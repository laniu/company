<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖电蒸箱</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>电蒸箱</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/zhengxiang1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',62)" id="1">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/zhengxiang2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',62)" id="2">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/zhengxiang3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',62)" id="3">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/zhengxiang5_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',62)" id="4">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
    </div><!--liebiao1/-->
    
    <div class="qmengban">
    
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/zhengxiang1.jpg" width="100%" /></dt>
             <dd>方太SCD26-C1A</dd>
             <dd class="dd3">方太SCD26-C1A电蒸箱采用经典的不锈钢与黑色钢化玻璃搭配，尽显高雅气质。动态蒸汽平衡系统，水箱加热装置，精准热敏探头即时感应，让该机蒸出美味的食品。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',62)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/zhengxiang2.jpg" width="100%" /></dt>
             <dd>格兰仕DZ30Q-D81</dd>
             <dd class="dd3">格兰仕DZ30Q-D81电蒸箱外观设计精美时尚，内部功能全面，8档营养烹饪模式、智能菜单等功能，让用户轻松制作美食。此外，该机在使用安全方面考虑的也十分周到，为用户打造方便好用环保的好产品。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',62)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/zhengxiang3.jpg" width="100%" /></dt>
             <dd>老板S270</dd>
             <dd class="dd3">老板S270电蒸箱外观华丽气派，内部3D立体蒸汽系统，全方位环绕加热，保证食物受热均匀，营养不流失。八大智能烹饪模式，可视化美观操作面板，让用户享受愉快的美食蒸制之旅。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',62)"  />
              <a href="http://item.jd.com/1808926552.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/zhengxiang5.jpg" width="100%" /></dt>
             <dd>西门子家电HB26D555W</dd>
             <dd class="dd3">西门子家电嵌入式电蒸箱HB26D555W全玻璃内门+TFT真彩中文显示屏设计，时尚高端更美观。内置40升自烹饪程序，配合35℃-100℃精确控温，让用户轻松做出美味的食品。过硬的蒸汽控制系统，避免水垢堵塞，大大延长机器使用寿命。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',62)" />
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
