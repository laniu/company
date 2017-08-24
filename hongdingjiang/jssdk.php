<?php
class JSSDK {
  private $appId;
  private $appSecret;

  public function __construct($appId, $appSecret) {
    $this->appId = $appId;
    $this->appSecret = $appSecret;
  }

  public function getSignPackage() {
    $jsapiTicket = $this->getJsApiTicket();

    // 注意 URL 一定要动态获取，不能 hardcode.
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $timestamp = time();
    $nonceStr = $this->createNonceStr();

    // 这里参数的顺序要按照 key 值 ASCII 码升序排序
    $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

    $signature = sha1($string);

    $signPackage = array(
      "appId"     => $this->appId,
      "nonceStr"  => $nonceStr,
      "timestamp" => $timestamp,
      "url"       => $url,
      "signature" => $signature,
      "rawString" => $string
    );
    return $signPackage; 
  }

  private function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }

  private function getJsApiTicket() {
    // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
    $data = json_decode(file_get_contents("jsapi_ticket.json"));
    if ($data->expire_time < time()) {
      $accessToken = $this->getAccessToken2(true);
      // 如果是企业号用以下 URL 获取 ticket
      // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
      $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
      $res = json_decode($this->httpGet($url));
      $ticket = $res->ticket;
      if ($ticket) {
        $data->expire_time = time() + 7000;
        $data->jsapi_ticket = $ticket;
        $fp = fopen("jsapi_ticket.json", "w");
        fwrite($fp, json_encode($data));
        fclose($fp);
      }
    } else {
      $ticket = $data->jsapi_ticket;
    }

    return $ticket;
  }

  public function getAccessToken() {
    // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
	
    $data = json_decode(file_get_contents("access_token.json"));
    if ($data->expire_time < time()) {
      // 如果是企业号用以下URL获取access_token
      // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
      $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
      $res = json_decode($this->httpGet($url));
      $access_token = $res->access_token;
      if ($access_token) {
        $data->expire_time = time() + 7000;
        $data->access_token = $access_token;
        $fp = fopen("access_token.json", "w");
        fwrite($fp, json_encode($data));
        fclose($fp);
      }
    } else {
	   $access_token = $data->access_token;
    }
    return $access_token;
  }
  
  
    public function getAccessToken2($flag) {
    // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
    $data = json_decode(file_get_contents("access_token.json"));
    if ($data->expire_time < time() || $flag) {
      // 如果是企业号用以下URL获取access_token
      // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
      $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
      $res = json_decode($this->httpGet($url));
      $access_token = $res->access_token;
      if ($access_token) {
        $data->expire_time = time() + 7000;
        $data->access_token = $access_token;
        $fp = fopen("access_token.json", "w");
        fwrite($fp, json_encode($data));
        fclose($fp);
      }
    } else {
      $access_token = $data->access_token;
    }
    return $access_token;
  }
  
  public function getDetail($openid) {
	  $token = $this->getAccessToken();
	  $url   = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$token."&openid=".$openid;
      $response   = $this->httpGet($url);
	  $res   = json_decode($response);
	  if(property_exists($res,"errcode") && ($res->errcode == "42001" || $res->errcode == "40001")){
		   $this->getAccessToken2(true);
		   $token = $this->getAccessToken();
		   $url   = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$token."&openid=".$openid;
		   $response   = $this->httpGet($url);
		   $res   = json_decode($response);
	  }
	  return $res;
  }
  
  public function getQRcode($myId) {
	  $token = $this->getAccessToken();
	  $data  = "{\"action_name\": \"QR_LIMIT_SCENE\", \"action_info\": {\"scene\": {\"scene_id\": ".$myId."}}}";
	  $url   = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$token;
      $response   = $this->httpPost($url,$data);
	  $res   = json_decode($response);
	  if(property_exists($res,"errcode") && ($res->errcode == "42001" || $res->errcode == "40001")){
		   $this->getAccessToken2(true);
		   $token = $this->getAccessToken();
		   $url   = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$token;
		   $response   = $this->httpPost($url,$data);
		   $res   = json_decode($response);
	  }
	  return $res;
  }	  
  
  
  
  //发送客服消息
  //https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=ACCESS_TOKEN
  public function sendMessage($message) {
	  $token = $this->getAccessToken();
	  
	  $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=".$token;
      $res = $this->httpPost($url,$message);
	  $res = json_decode($res);
	  if($res->errcode == "42001" || $res->errcode == "40001"){
		   $this->getAccessToken2(true);
		   $token = $this->getAccessToken();
		   $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=".$token;
		   $res = $this->httpPost($url,$message);
		   $res = json_decode($res);
	  }

	  return $res->errcode.$res->errmsg;
  }

  public function industry($message){
	  $token = $this->getAccessToken();
	  $url = "https://api.weixin.qq.com/cgi-bin/template/api_set_industry?access_token=".$token;
      $res = $this->httpPost($url,$message);
	  $res = json_decode($res);
	  if($res->errcode == "42001" || $res->errcode == "40001"){
		   $this->getAccessToken2(true);
		   $token = $this->getAccessToken();
		   $url = "https://api.weixin.qq.com/cgi-bin/template/api_set_industry?access_token=".$token;
		   $res = $this->httpPost($url,$message);
		   $res = json_decode($res);
	  }

	  return $res->errcode.$res->errmsg;
	  
  }
  public function model($message){
	  $token = $this->getAccessToken();
	  $url = "https://api.weixin.qq.com/cgi-bin/template/api_add_template?access_token=".$token;
      $res = $this->httpPost($url,$message);
	  $res = json_decode($res);
	  if($res->errcode == "42001" || $res->errcode == "40001"){
		   $this->getAccessToken2(true);
		   $token = $this->getAccessToken();
		   $url = "https://api.weixin.qq.com/cgi-bin/template/api_add_template?access_token=".$token;
		   $res = $this->httpPost($url,$message);
		   $res = json_decode($res);
	  }

	  return $res->template_id;
	  
  }
  
  public function sendModel($message){
	  $token = $this->getAccessToken();
	  $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$token;
      $res = $this->httpPost($url,$message);
	  $res = json_decode($res);
	  if($res->errcode == "42001" || $res->errcode == "40001"){
		   $this->getAccessToken2(true);
		   $token = $this->getAccessToken();
		   $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$token;
		   $res = $this->httpPost($url,$message);
		   $res = json_decode($res);
	  }

	  return $res->errcode;
	  
  }
  
  private function httpGet($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_URL, $url);

    $res = curl_exec($curl);
    curl_close($curl);

    return $res;
  }
  
  private function httpPost($url,$data) {
    $curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("Accept: text/json","Content-Type: text/json"));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    $res = curl_exec($curl);
    curl_close($curl);
    return $res;
  }
 
}

