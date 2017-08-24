<?php
require_once('tiaozhuan.php');
$arr = '';
foreach($_SESSION['arr'] as $key=>$v){
	$arr .= 'q'.$key.'='.$v.'&';
}
$wecha_id = $_SESSION['wechaid'];
$pass = 'Red2015toP';
$md5  = md5($wecha_id.$pass);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>认识一下吧</h1>
    <div class="tijiao">
      <h2>请填写您的信息，提交投票。</h2>
      <div class="form">
        <input type="text" placeholder="请输入姓名" class="name" id="name"/>
        <input type="text" placeholder="请输入手机号" class="mobile" id="mobile" />
        <input type="submit" value="提交" class="sub" id="submit"/>
      </div>
    </div><!--tijiao/-->
    
    <div class="tankuang" id="fail">
      <p>提交失败或已提交过</p>
      <a href="#">好的</a>
    </div><!--tankuang/-->
	
    <div class="tankuang" id="chongfu">
      <p>您已经提交过了</p>
      <a href="#">好的</a>
    </div><!--tankuang/-->
	
    <div class="tankuang" id="nullphone">
      <p>手机号不能为空</p>
      <a href="#">好的</a>
    </div><!--tankuang/-->
    
   <div class="tankuang" id="showname">
      <p>请填写正确的姓名</p>
      <a href="#">好的</a>
    </div><!--tankuang/-->
    
    <div class="tankuang" id="showphone">
      <p>请填写正确的手机号</p>
      <a href="#">好的</a>
    </div><!--tankuang/-->
    
    <div class="tankuang" id="success">
      <p>投票成功去领红包吧</p>
      <a href="hongbao.php">好的</a>
    </div><!--tankuang/-->
  
  </div><!--pinlei/-->
</div><!--index/--> 
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>  
<script>
$(function(){
		$("#fail").hide()
		$("#nullphone").hide()
		$("#showname").hide()
		$("#showphone").hide()
		$("#success").hide()
		$("#chongfu").hide()
		$("#submit").on("click",function(){
			var wecha_id = '<?php echo $wecha_id;?>'
			var mobile   = $("#mobile").val()
		    var reg = /(1[3-9]\d{9}$)/;
        
			var name     = $("#name").val()
			//alert(name)
			if(name == ''){
				$("#showname").show()
				//$("#name").focus(); 
				return false
			}if(mobile == ''){
				$("#nullphone").show()
				return false
				
			}if (!reg.test(mobile)){
				$("#showphone").show()
				//$("#mobile").focus(); 
				return false
			}
           $("#success").show()
		});
});
</script>
</body>
<?php require_once('share.php');?>
</html>
