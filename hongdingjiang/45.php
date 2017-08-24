<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖空气能热水器</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>空气能热水器</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/kongre1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',45)" id="1">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/kongre2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',45)" id="2">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/kongre3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',45)" id="3">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/kongre4_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',45)" id="4">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
    </div><!--liebiao1/-->
    
    <div class="qmengban">
    
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/kongre1.jpg" width="100%" /></dt>
             <dd>A.O.史密斯HPA-80B1.5A</dd>
             <dd class="dd3">A.O.史密斯HPA-80B1.5A空气能热水器采用独家技术微通道换热技术，换热更充分持久、加热过程更高效;智能提前加热和动态中温保温功能舒适与节能兼具，多点出水满足用户更多用水需求。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',45)" />
              <a href="http://item.jd.com/1484591123.html"><input type="button" value="点击购买" class="btn2" /></a>
             

            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/kongre2.jpg" width="100%" /></dt>
             <dd>格力KFRS-20ZM/B2S</dd>
             <dd class="dd3">格力空气能热水器KFRS-20ZM/B2S采用先进水路设计，具有5.8最高能效比;四位水位控制加热更节能方便、模块化功能设计满足不同用户需求;自动清洗模式更方便健康，恒温灵活出水为用户提供便捷。
</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',45)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/kongre3.jpg" width="100%" /></dt>
             <dd>海尔KF100/300-D7</dd>
             <dd class="dd3">海尔空气能热水器KF100/300-D7加热效率高、噪音低，持续加热无压力，能够在-25℃-40℃低温广域工作区间，突破了空气能热水器的工作环境限制。商用级金刚三层胆具备更好品质，CP2冷媒更环保。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',45)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/kongre4.jpg" width="100%" /></dt>
             <dd>纽恩泰NE-B150/150N</dd>
             <dd class="dd3">纽恩泰NE-B150/150N空气能热水器既能充当热水洗提供洗浴条件，也能实现采暖功能，并能轻松完成空气净化功能，净离子杀菌技术帮助净化室内空气，让用户在享受温暖洗浴时也能健康呼吸。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',45)" />
              <a href="http://item.jd.com/1581350488.html"><input type="button" value="点击购买" class="btn2" /></a>
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
