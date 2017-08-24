<?php  
  
    $appid = "wx287b1bf2a3f9fd46";                 
	  //      https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect
	  //$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri=http%3a%2f%2fzhifu.weiyingjia.org%2fceshijiekou%2fshouquan.php&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect';  
      $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri=http%3a%2f%2fthink.weiyingjia.cn%2fhongding%2fshouquan.php&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect';  

	  header("Location:".$url);  
  
?>  