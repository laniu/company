<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖太阳能热水器</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>太阳能热水器</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/taiyang1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',46)" id="1">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/taiyang2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',46)" id="2">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/taiyang3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',46)" id="3">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/taiyang4_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',46)" id="4">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
     
    </div><!--liebiao1/-->
    
    <div class="qmengban">
    
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/taiyang1.jpg" width="100%" /></dt>
             <dd>皇明金尊210 18支</dd>
             <dd class="dd3">皇明金尊210全自动太阳能热水器采用了全玻璃真空热管，实现管内不走水，除了不积水垢之外，还可以实现低温迅速启动，更早升温，同时不会出现冻管、炸管的情况。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',46)" />
              <a href="http://item.jd.com/1368243535.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/taiyang2.jpg" width="100%" /></dt>
             <dd>力诺瑞特P-JF2-100/1.82/0.70-QFF-1702	</dd>
             <dd class="dd3">力诺瑞特P-JF2-100/1.82/0.70-QFF-1702	壁挂平板式太阳能热水器采用强制循环和虹吸换热双重动力，制取热水系统综合热效显著提升，介质通过复杂管路能力极大增强，尤其适合城市中高层建筑。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',46)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/taiyang3.jpg" width="100%" /></dt>
             <dd>清华阳光JB5818（R）-22-150</dd>
             <dd class="dd3">清华阳光JB5818(R)-22-150太阳能热水器的外形独特，在千篇一律的太阳能热水器界可称难得。此外产品使用独特的无水超导紫金管，不易积尘，集热率更高，彰显了清华阳光雄厚的技术实力。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',46)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/taiyang4.jpg" width="100%" /></dt>
             <dd>太阳雨Q-B-J-1-149/2.50/0.05</dd>
             <dd class="dd3">太阳雨双舱太阳能热水器Q-B-J-1-149/2.50/0.05最大的特点就是继承了太阳能热水器和电热水器，用户在节能的同时，面对天气不利的情况，也可以放心使用热水，并且出水效率更高。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',46)" />
              <a href="http://item.jd.com/1466193585.html"><input type="button" value="点击购买" class="btn2" /></a>
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
