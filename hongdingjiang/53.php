<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖电风扇</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>电风扇</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/fengshan2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',53)" id="1">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/fengshan3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',53)" id="2">投票</dd>       
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/fengshan4_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',53)" id="3">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/fengshan1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',53)" id="4">投票</dd>        
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
    </div><!--liebiao1/-->
    
    <div class="qmengban">    
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/fengshan2.jpg" width="100%" /></dt>
             <dd>巴慕达EGF-1380</dd>
             <dd class="dd3">巴慕达EGF-1380的用心设计使它生来不凡，没有机取巧的成分，完全把控制住了细节，硬风柔化、静音设计、降低耗电皆为用心之举，衬得起顶级与高端。而多种用法也大大增加了其灵活性，值得推荐。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',53)" />
              <a href="http://item.jd.com/1522935143.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/fengshan3.jpg" width="100%" /></dt>
             <dd>必爱风 Haiku SenseME智能竹制吊扇</dd>
             <dd class="dd3">在智能家居盛行、节能环保的大背景下，将传统家电进行改造升级，该智能吊扇也算是一款具有突破的硬件产品。简约设计的韵味、竹子彰显华人文化的美德，也不失为一款不错的室内装饰品，该风扇的时钟等功能则可以方便人们生活。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',53)" />
            </form>
            <p><img src="images/bigduigou.png"  /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/fengshan4.jpg" width="100%" /></dt>
             <dd>戴森AM09</dd>
             <dd class="dd3">戴森AM09外观时尚精致，便于携带以及家庭使用，是多功能电风扇，同时个人模式和多人模式的双重运用则大大方便了消费者的多种需求，冷暖风双用也增加了其可用性。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',53)" />
              <a href="http://item.jd.com/1691855.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png"  /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/fengshan1.jpg" width="100%" /></dt>
             <dd>Minka Aire Artemis</dd>
             <dd class="dd3">Minka Aire Artemis 不仅仅是台吊扇，还是一个灯具，外观独特靓丽。如果客人在您家正在欣赏这个吊扇独特的外观时，您把灯光打开会不会让客人更加吃惊呢。出色的性能确实值得其市场价位。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',53)" />
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
