<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖豆浆机</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>豆浆机</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/doujiang1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',63)" id="1">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/doujiang2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',63)" id="2">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/doujiang3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',63)" id="3">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/doujiang4_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',63)" id="4">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
    </div><!--liebiao1/-->
    
    <div class="qmengban">
    
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/doujiang1.jpg" width="100%" /></dt>
             <dd>东菱DL-9000水果豆浆机</dd>
             <dd class="dd3">第三代东菱水果豆浆机延续原有的一键多功能，结合了豆浆机、榨汁机、米糊机、研磨机于一体，让原料爆发出更美味的味道、保留原始的营养价值。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',63)" />
            </form>
            <p><img src="images/bigduigou.png"  /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/doujiang2.jpg" width="100%" /></dt>
             <dd>九阳D88SG破壁豆浆机</dd>
             <dd class="dd3">九阳DJ13B-D88SG豆浆机时尚的外观加上无豆渣豆浆，省却过滤过程，让制作豆浆变得更加简单高效，操作面板位于机身顶部，一键轻松搞定，轻松操作易上手。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',63)" />
              <a href="http://item.jd.com/1470476.html"><input type="button" value="点击购买" class="btn2" /></a>
              

            </form>
            <p><img src="images/bigduigou.png"  /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/doujiang3.jpg" width="100%" /></dt>
             <dd>美的磨盘豆浆机HX13C11</dd>
             <dd class="dd3">美的HX13C11磨盘豆浆机磨出的豆浆更加细腻，清洗也特别的简单，值得一提的是，这款豆浆机磨出的豆浆豆蛋白含量比普通豆浆机高79%，固形物含量高达7.2g/100ml，可以轻松制作豆花、豆腐哦。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',63)" />
            </form>
            <p><img src="images/bigduigou.png"  /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/doujiang4.jpg" width="100%" /></dt>
             <dd>苏泊尔密闭熬煮豆浆机DJ12B-Y98</dd>
             <dd class="dd3">苏泊尔密闭熬煮DJ12B-Y98豆浆机是一款外观与品质兼具的豆浆机，时尚外观设计，较好的融入家居环境，而且采用双层杯体设计，在机器高温运作的时候不会烫手，非常贴心的设计。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',63)" />
              <a href="http://item.jd.com/1716763943.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png"  /></p>
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
