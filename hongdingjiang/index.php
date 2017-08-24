
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖产品评选</title>	
</head>
<body>
<div class="index">
  <div class="hides">
    <img src="images/index.jpg" width="100%" id="img1" />
  </div><!--hides/-->
  <div class="bg">
    <img src="images/bg.jpg" width="100%" />
  </div><!--bg/-->
  <div class="pinlei" id="pinlei" style="display:none;">
    <h1>选择你关注的品类(至少选择五类)</h1>
    <div class="liebiao">
      <dl>
        <dt> <img src="images/1.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='38'  />冰箱 </dd>
      </dl>
      <dl>
        <dt> <img src="images/2.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='48'  />电视 </dd>
      </dl>
      <dl>
        <dt> <img src="images/3.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='49'  />手机 </dd>
      </dl>
      <dl>
        <dt> <img src="images/4.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='50'  />智能尚品 </dd>
      </dl>
      <dl>
        <dt> <img src="images/5.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='42'  />空调挂机 </dd>
      </dl>
      <dl>
        <dt> <img src="images/6.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='39'  />滚筒洗衣机 </dd>
      </dl>
      <dl>
        <dt> <img src="images/7.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='40'  />波轮洗衣机 </dd>
      </dl>
      <dl>
        <dt> <img src="images/8.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='41'  />空调柜机 </dd>
      </dl>
      <dl>
        <dt> <img src="images/9.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='43'  />电热水器 </dd>
      </dl>
      <dl>
        <dt> <img src="images/10.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='44'  />燃气热水器 </dd>
      </dl>
      <dl>
        <dt> <img src="images/11.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='45'  />空气能热水器 </dd>
      </dl>
      <dl>
        <dt> <img src="images/12.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='46'  />太阳能热水器 </dd>
      </dl>
      <dl>
        <dt> <img src="images/13.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='56'  />吸油烟机 </dd>
      </dl>
      <dl>
        <dt> <img src="images/14.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='57'  />灶具 </dd>
      </dl>
      <dl>
        <dt> <img src="images/15.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='58'  />洗碗机 </dd>
      </dl>
      <dl>
        <dt> <img src="images/16.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='59'  />消毒柜 </dd>
      </dl>
      <dl>
        <dt> <img src="images/17.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='60'  />烤箱 </dd>
      </dl>
      <dl>
        <dt> <img src="images/18.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='61'  />微波炉 </dd>
      </dl>
      <dl>
        <dt> <img src="images/19.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='62'  />电蒸箱 </dd>
      </dl>
      <dl>
        <dt> <img src="images/20.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='63'  />豆浆机 </dd>
      </dl>
      <dl>
        <dt> <img src="images/21.png" /> </dt>
        <dd> <input type="checkbox" name="jiadian" value='53'  />电风扇 </dd>
      </dl>
      <dl>
        <dt><img src="images/22.png" /> </dt>
        <dd><input type="checkbox" name="jiadian" value='51'  />空气净化器 </dd>
      </dl>
      <dl>
        <dt><img src="images/23.png" /> </dt>
        <dd><input type="checkbox" name="jiadian" value='52'  />吸尘器 </dd>
      </dl>
      <dl>
        <dt><img src="images/24.png" /></dt>
        <dd><input type="checkbox" name="jiadian" value='47'  />燃气壁挂炉</dd>
      </dl>
      <dl>
        <dt><img src="images/25.png" /></dt>
        <dd><input type="checkbox" name="jiadian" value='54'  />净水机</dd>
      </dl>
      <dl>
        <dt><img src="images/26.png" /></dt>
        <dd><input type="checkbox" name="jiadian" value='55'  />饮水机</dd>
      </dl>
    </div><!--liebiao/-->
    
    <div class="bottom_btn">
      <ul>
        <li> <input type="checkbox" id="check" />全部选择</li>
        <li><a href="#" id="submit">下一步</a></li>
      </ul>
    </div><!--bottom_btn/-->
    
  </div><!--pinlei/-->
</div><!--index/-->
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
$(function(){
		$("#submit").on("click",function(){
		     window.i=0
			 window.arr = []
			$(".liebiao dl dd input[name='jiadian']").each(function(uu){  //循环每一个小品类
			 if($(this).attr('checked') == 'checked'){ 
				i++;
				arr.push($(this).val())
			   }
			  	
			})
			if(i<5){
				alert('至少选中5项')
				return false
			}else{
				var j;
				var strIds;
				strIds = '';	
				//arr			
				for (j=0;j<arr.length;j++)
				{		
					strIds += arr[j]+ ',';
				}
				strIds = strIds.substr(0,strIds.length-1);
							
				window.location=arr[0] + '.php?ids=' + strIds;
			
			}
});

$("#check").click(function(){
	 var bischecked=$('#check').is(':checked');
	 var fruit=$('input[name="jiadian"]');
	 //alert(fruit.val())
	 bischecked?fruit.attr('checked',true):fruit.attr('checked',false);
    });
})

</script>
</body>
<?php require_once('share.php');?>
</html>

<?php 
function httpPost($url,$data) {
       $ch = curl_init();    

	        $timeout = 300;     

	        curl_setopt($ch, CURLOPT_URL, $url);   

	        curl_setopt($ch, CURLOPT_POST, true);    

	        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    

	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    

	        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);    

	        $handles = curl_exec($ch);    

	        curl_close($ch);    

	        return $handles;    
   
  }

?>