<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖微波炉</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>微波炉</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/weibo2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',61)" id="1">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/weibo1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',61)" id="2">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/weibo3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',61)" id="3">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/weibo4_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',61)" id="4">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
    </div><!--liebiao1/-->
    
    <div class="qmengban">
      
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/weibo2.jpg" width="100%" /></dt>
             <dd>格兰仕G90F25MSXLVIII-A7(G0)</dd>
             <dd class="dd3">这款格兰仕G90F25MSXLVIII-A7(G0)微波炉独创的双模变频技术， 烹饪食物口感更美味，同时该机出卓越的外观设计美观又实用，相信这款产品凭借其领先的双模变频技术定会成成为叫好又叫座的微波炉产品。
</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',61)" />
              <a href="http://item.jd.com/1772786.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/weibo1.jpg" width="100%" /></dt>
             <dd>LG MH6343BDA</dd>
             <dd class="dd3">LG MH6343BDA微波炉圆形内胆实现超大空间及快速加热让微波炉使用发生颠覆性改变，LG变频光波微波技术轻松实现炖、烤、煮、蒸等多样烹饪方式，这是一款让用户享受健康美味每一天的产品。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',61)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/weibo3.jpg" width="100%" /></dt>
             <dd>美的X5-252A</dd>
             <dd class="dd3">这款美的X5-252A蒸立方微波炉所搭载的混合动力直喷蒸技术使其轻松实现一机多用，智能清洁系统，让清洁变得无比简单，这款微波炉绝对称得上是微波炉界的劳斯莱斯。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',61)" />
              <a href="http://item.jd.com/1766383.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/weibo4.jpg" width="100%" /></dt>
             <dd>三洋EM-L568T</dd>
             <dd class="dd3">三洋EM-L568T微波炉搭的SETM旋波平台技术开启微波炉工作方式的新时代，可使食物受热更均匀，同时可增加微波炉的实际加热食物量，6重防微波泄漏技术及三重连锁开关让该机变得安全无比。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',61)" />
              <a href="http://item.jd.com/1376723899.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
       
                
    </div><!--qmengban/-->
    
    <?php require_once('icon.php');?>
    
    <div class="mengban">
      
    </div><!--mengban/-->
    
  </div><!--pinlei/-->
</div><!--index/-->
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>
function goto(value,html)
{
	var url = '<?php if(!empty($url)) echo $url;else echo 'tijiao' ;?>.php?v=' + value +'&q=' + html;
    setTimeout("window.location='"+url+"'",1000);
}
</script>    
<script>
$(function(){
    var xuanzhong = '<?php echo $xuanzhong;?>';
		$('#'+xuanzhong).css({color:"#ccc",background:"rgba(102,102,102,0.8)"})
		$('#'+xuanzhong).text("已投票")
	
})
</script> 
</body>
<?php require_once('share.php');?>
</html>
