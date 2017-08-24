<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖洗碗机</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>洗碗机</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/xiwan2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',58)" id="1">投票</dd>        
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/xiwan1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',58)" id="2">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/xiwan3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',58)" id="3">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/xiwan4_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',58)" id="4">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
    </div><!--liebiao1/-->
    
    <div class="qmengban">
       
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/xiwan2.jpg" width="100%" /></dt>
             <dd>卡萨帝WQP60SS</dd>
             <dd class="dd3">卡萨帝WQP60SS抽屉式洗碗机操控更舒适、手感更好、使用更简单、使用人群受限制更少、人机交互更好，此外在餐具适用性，出轨系统匹配性，体积容量比高效性方面表现优异。
</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',58)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/xiwan1.jpg" width="100%" /></dt>
             <dd>方太水槽洗碗机JBSD2T-Q2</dd>
             <dd class="dd3">方太水槽洗碗机JBSD2T-Q2一体式洗碗机是一款全新的跨界三合一厨房电器产品，它是洗碗机，也是水槽，更是果蔬净化机，为中国厨房量身定制，革新传统厨房家电使用理念。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',58)" />
              <a href="http://item.jd.com/1747599818.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/xiwan3.jpg" width="100%" /></dt>
             <dd>美的WQP8-W3906+MMY</dd>
             <dd class="dd3">美的WQP8-W3906+MMY洗碗机高端中式厨房的必备利器，它是高品位用户厨房清洁的好帮手，其所搭载的3D高压喷淋去污技术，高水压去污，洗的干净不伤餐具，高品位生活从美的WQP8-W3906+MMY开始。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',58)" />
              <a href="http://item.jd.com/1844515.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/xiwan4.jpg" width="100%" /></dt>
             <dd>西门子家电SN45M531TI</dd>
             <dd class="dd3">随着中国中高端嵌入式洗碗机市场的逐年增大，相信这款西门子家电SN45M531TI洗碗机凭借其先进的IQ driver智能高效水系统、完美的细节设计、水浊度传感器光感技术、智能检测餐具加载量等先进卓越的技术定会取得出色成绩。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',58)"  />
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
