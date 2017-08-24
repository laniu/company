<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖消毒柜</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>消毒柜</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/xiaodu1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',59)" id="1">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/xiaodu2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',59)" id="2">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/xiaodu4_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',59)" id="3">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/xiaodu3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',59)" id="4">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
 
    </div><!--liebiao1/-->
    
    <div class="qmengban">
    
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/xiaodu1.jpg" width="100%" /></dt>
             <dd>方太ZTD100F-WH1</dd>
             <dd class="dd3">方太ZTD100F-WH1高效净U系列消毒柜操作简便，消毒方式环保高效，餐具容纳能力高，密封性好，安全系数高，可谓是一款家用厨房中不可缺少的必备电器。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',59)" />
              <a href="http://item.jd.com/1747507290.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/xiaodu2.jpg" width="100%" /></dt>
             <dd>林内ZTD110Q-AG</dd>
             <dd class="dd3">林内智净系列消毒柜ZTD110Q-AG除了智能消毒功能外，人性化地设计出婴幼儿用品专用区，为宝宝用品带来彻底的洁净，而大容量和多项安全功能让选择它的消费者更加放心。
</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',59)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
       
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/xiaodu4.jpg" width="100%" /></dt>
             <dd>西门子家电HS363600W</dd>
             <dd class="dd3">西门子家电HS363600W嵌入式智能消毒柜外形高端美观，内部大容量碗篮设计使用灵活便捷。阻尼效果拉篮导轨稳定性高，抽拉顺畅。更有独家的三重杀菌技术，强效杀灭空间内的细菌，确保细菌无处遁形。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',59)" />
              <a href="http://item.jd.com/1612389.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
         <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/xiaodu3.jpg" width="100%" /></dt>
             <dd>帅康ZTD100K-K16</dd>
             <dd class="dd3">达到二星消毒标准的帅康ZTD100K-K16消毒柜，独创双管三模消毒模式，全面消灭餐具上的隐藏细菌。其特有的光触媒净化净味功能，更可轻松保持柜内空气清新，时刻呵护您舌尖儿上的安全。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',59)" />
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
