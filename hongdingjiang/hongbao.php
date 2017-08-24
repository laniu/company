<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
<link type="text/css" rel="stylesheet" href="style/style.css" />
<link type="text/css" rel="stylesheet" href="style/animate.min.css" />
<title>红顶奖</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>试试手气</h1>
    <div class="hongbao">
      <img src="images/hongbao.jpg" width="100%" />

      <h2><a href="toupiao.php">投票结果查询</a></h2>
    </div><!--hongbao/-->
    
    <div class="hmangban">
        <img src="images/open.png"  width="65%" />
        <img src="images/fachu.png" width="65%" />
        <img src="images/muyou.png" width="65%" />
    </div><!--hmangban/-->
    
    <div class="money">
      <p>恭喜中奖<span id="moneys"></span>元</p>
      <p>宝贝将由</p>
      <p>[中国家电网]<img src="images/fuwu.png" width="30%" />发出</p>
      <p>请注意查收</p>
    </div>
	
    <div class="money1">
      <p>感谢参与</p>
      <p>明天再试试吧</p>
    </div>
	
	 <div class="money2">
      <p>今天已经抽过</p>
      <p>明天再试试吧</p>
    </div>
  </div><!--pinlei/-->
</div><!--index/--> 
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script><!-- 
<script type="text/javascript" src="js/script.js"></script>   -->
</body>
<script>
$('.hmangban img:eq(0)').one("click", function () {
     var wechat = '111111111111111111111';
//alert(wechat)
	$.post('lottery.php',{wechat:wechat},function(data){
		$(".hmangban img:eq(0)").addClass('animated shake').animate({
		    opacity:"1"
		 },1000)
		.animate({
		  opacity:"0"
		},300);
		if(data == '5' || data == '3' || data == '2' || data == '1'){
		    $(".hmangban img:eq(1),.money").animate({
				opacity:"1"
			},2000); 
			$("#moneys").html(data)
		}else if(data == '0'){
			$(".hmangban img:eq(2),.money2").animate({
			  opacity:"1"
			},2000); 
		}else{
			$(".hmangban img:eq(2),.money1").animate({
			  opacity:"1"
			},2000); 
		}
		//alert(data);
		//$(".hmangban img:eq(0)").attr('id','close');
	//	alert($(".hmangban img:eq(0)").attr('id'));
	})
})

</script>
</html>