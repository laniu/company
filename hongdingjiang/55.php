<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
<link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖饮水机</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>饮水机</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/yinshui1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',55)">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/yinshui2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',55)">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/yinshui3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',55)">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/yinshui4_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',55)">投票</dd>
        <dd class="dd2"><a href="#">京东<br />有售</a></dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
     
    </div><!--liebiao1/-->
    
    <div class="qmengban">
    
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/yinshui1.jpg" width="100%" /></dt>
             <dd>3M HWS-CT-H</dd>
             <dd class="dd3">3M饮水机HWS-CT-H作为一款温热管线型饮水机，其拥有智能化的操作系统，一键节能模式更加省电，常温水直接出，无论饮用还是洗漱都可以方便实用，体验效果较佳，内置三重保护，可以有效保证用水安全。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',55)" />
              <a href="http://item.jd.com/959247.html"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/yinshui2.jpg" width="100%" /></dt>
             <dd>安吉尔 Y2488LKD-XZJ</dd>
             <dd class="dd3">安吉尔Y2488LKD-XZJ饮水机拥有高贵典雅的外观设计，考究的用料和精致的做工，性能上除了拥有饮水机的一般性功能外，其一体式拉伸水壶，储物保鲜柜等配置也可以加强这款产品的使用维度。
</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',55)" />
              <a href="http://item.jd.com/10019729964.html?jt=11"><input type="button" value="点击购买" class="btn2" /></a>
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/yinshui3.jpg" width="100%" /></dt>
             <dd>美的YD1519S-X</dd>
             <dd class="dd3">美的YD1519S-X立式饮水机作为一款高端产品，它的外观与性能都是比较不错的。它的下置隐藏式水桶模式实用省力，细节做工精致，安全性也很高，对于生活品质要求高的朋友可以作为参考。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',55)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/yinshui4.jpg" width="100%" /></dt>
             <dd>沁园 JLD8585XZ-RO</dd>
             <dd class="dd3">沁园JLD8585XZ-RO立式饮水机拥有新款升级的强劲大滤芯与过滤性能强悍的RO膜，作为一款饮水机产品，其集饮水功能与净水功能于一体，不但节省了传统饮水机费时费力的送水模式，也在同时节约了成本。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',55)" />
              <a href="http://item.jd.com/1677939407.html"><input type="button" value="点击购买" class="btn2" /></a>
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
    setTimeout("window.location='"+url+"'",100);
}
</script>   
</body>
<?php require_once('share.php');?>
</html>
