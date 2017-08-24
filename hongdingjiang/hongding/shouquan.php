<?php  
$appid = "wx287b1bf2a3f9fd46";  
$secret = "36a8d4dcf82bcce63d3e80965eb22f19";  
$code = $_GET["code"];  
$get_token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code';  
  
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$get_token_url);  
curl_setopt($ch,CURLOPT_HEADER,0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );  
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);  
$res = curl_exec($ch);  
curl_close($ch);  
$json_obj = json_decode($res,true);  
  
//根据openid和access_token查询用户信息  
$access_token = $json_obj['access_token'];  
$openid = $json_obj['openid'];  
$get_user_info_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';  
  
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$get_user_info_url);  
curl_setopt($ch,CURLOPT_HEADER,0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );  
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);  
$res = curl_exec($ch);  
curl_close($ch);  
  
//解析json  
$user_obj = json_decode($res,true); 
$_SESSION['user'] = $user_obj;  
$openid = $user_obj['openid'];
$token = 'hongdingjiang';
$pass = 'Red2015toP';
$codes = md5($openid.$token.$pass);

$url2="http://think.weiyingjia.cn/hongdingjiang/end.html?user_obj=".$openid."&token=".$token."&codes=".$codes;
//$url2="http://www.baidu.com?a=a";
header("Location:".$url2);  
?>  