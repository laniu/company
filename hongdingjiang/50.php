<?php
require_once('tiaozhuan.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖智能尚品</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>智能尚品</h1>
    <div class="liebiao1">
      <dl>
        <dt><a href="#"><img src="images/zhineng2_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('1',50)" id="1">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/zhineng1_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('2',50)" id="2">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/zhineng3_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('3',50)" id="3">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
      <dl>
        <dt><a href="#"><img src="images/zhineng4_1.jpg" /></a></dt>
        <dd class="dd1" onclick="goto('4',50)" id="4">投票</dd>
        <p id="hide2"><img src="images/smallduigou.png" width="30%" /></p>
      </dl>
    
    </div><!--liebiao1/-->
    
    <div class="qmengban">
     
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/zhineng2.jpg" width="100%" /></dt>
             <dd>科沃斯全能机器人 F386-DS</dd>
             <dd class="dd3">科沃斯亲宝机器人F386-DS拥有四大技能，还有新闻、音乐、笑话、戏曲、教育、有声读物这六大娱乐功能，可以说它既是智能生活的贴心助手，又是能歌善舞的小伙伴，不愧是全能机器人。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('1',50)" />
            </form>
            <p><img src="images/bigduigou.png"  /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/zhineng1.jpg" width="100%" /></dt>
             <dd>LG Styler S3RER</dd>
             <dd class="dd3">LG Styler S3RER智能衣物护理机是一款针对衣物护理的专业产品，不仅可以进行衣物塑形与裤线管理，还有呵护用户健康的除菌除味功能，一键护理、随穿随走的设计相比洗衣店更加方便。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('2',50)" />
            </form>
            <p><img src="images/bigduigou.png" /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/zhineng3.jpg" width="100%" /></dt>
             <dd>清华同方云罐 CC-200P</dd>
             <dd class="dd3">清华同方云罐Plus CC-200P的外形非常别致，内在的硬件配置也堪称强悍，配合丰富的接口设计与众多附属配件，可以实现家庭支付、教育、健康、安全等的智能化，让用户享受智能生活。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('3',50)" />
            </form>
            <p><img src="images/bigduigou.png"  /></p>
            <h2><img src="images/duigou.png" width="26" /></h2>
          </div>
        </div><!--mengban/-->
        
        <div class="mengban">
          <h1></h1>
          <div>
            <dl>
             <dt><img src="images/zhineng4.jpg" width="100%" /></dt>
             <dd>索尼游戏机 PlayStation 4</dd>
             <dd class="dd3">经过一番波折，索尼游戏机PlayStation 4总算是在中国站稳了脚跟。PS4为中国玩家带来的除了更便宜的价格和更放心的产品，为数众多的中文版游戏，更是再也不用玩家一边翻字典一边玩游戏了。</dd>
            </dl>
            <form>
              <input type="button" value="投票" class="btn1" onclick="goto('4',50)" />
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
	url = '<?php if(!empty($url)) echo $url;else echo 'tijiao' ;?>.php?v=' + value +'&q=' + html;
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
