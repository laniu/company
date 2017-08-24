<?php 
require_once('include.php'); 
$url = "http://weixin.cheaa.com/wxcms/index.php?g=Wap&m=Diaoyan&a=phone";
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 500);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_URL, $url);
$res = curl_exec($curl);
curl_close($curl);
$data = json_decode($res,true);
$jsdata = array();
$jsdata2 = array();
$arr     = array(38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63);
/* echo '<pre>';
var_dump($data);
echo '</pre>';die; */
 foreach($data as $k=>$v){
   if(in_array($k,$arr)){
	   $jsdata[$k] = [];
	   $jsdata2[$k] = [];
	   foreach($v as $key=> $val){
		  $jsdata[$k][] = $key;
		  $jsdata2[$k][] = $val[0];
       }
     }	
 }
 $js ='';
 for($i=38;$i<64;$i++){
 $Arrdata2 = json_encode($jsdata2[$i]);
 $Arrdata2 = str_replace('"', '',$Arrdata2);
 $strArrdata = '["' . implode('","',$jsdata[$i]) . '"]';
	  $js .="$('.$i').highcharts({                                           
        chart: {                                                           
            type: 'bar'                                                    
        },   
        xAxis: {                                                           
            categories: $strArrdata,
                                                                      
        },      
        plotOptions: {                                                     
            bar: {                                                         
                dataLabels: {                                              
                    enabled: true                                          
                }                                                          
            }                                                              
        },                                                                 
                                                                 
         series: [{                                                                                                     
            data: $Arrdata2,  
        }]                                                              
	});" ;
 }
 
$dataArr = array(38=>'冰箱',39=>'滚筒洗衣机',40=>'波轮洗衣机',41=>'空调柜机',42=>'空调挂机',43=>'电热水器',44=>'燃气热水器',45=>'空气能热水器',46=>'太阳能热水器',47=>'燃气壁挂炉',48=>'电视',49=>'手机',50=>'智能尚品',51=>'空气净化器',52=>'吸尘器',53=>'电风扇',54=>'净水机',55=>'饮水机',56=>'吸油烟机',57=>'灶具',58=>'洗碗机',59=>'消毒柜',60=>'烤箱',61=>'微波炉',62=>'电蒸箱',63=>'豆浆机');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport"><link type="text/css" rel="stylesheet" href="style/style.css" />
<title>红顶奖产品评选</title>	
</head>
<body>
<div class="index">
  <div class="pinlei">
    <h1>投票结果</h1>
    <div class="toupiao">
      <dl class="t_top">
        <dt><img src="images/jiadian.png" width="100%" /></dt>
        <dd>
          <p>家电排行榜</p>
          <p class="p1">参与网友：<span> <?php echo $data['member'];?> </span>人  总票数：<span> <?php echo $data['vote'];?> </span>票</p>
        </dd>
      </dl><!--t_top/-->
     
      <div class="t_bottom">
	   <?php 
	     foreach($data as $k=>$v){
         if(in_array($k,$arr)){
	  ?>
        <div class="tb">
          <h1><span>
		  <?php 
			 echo $dataArr[$k]
		  ?>
		  </span><img src="images/xia.png" width="40" /></h1>
          <div class="<?php echo $k?>" style="width:90%;height:350px"></div>
        </div>
		<?php 
		  }
        }	
		?>
      </div><!--t_bottom/-->
      
    </div><!--toupiao/-->
     
  </div><!--pinlei/-->
</div><!--index/--> 
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/highcharts.js"></script>
  <script>
 
//alert(arr)
 $(function () {  
          <?php echo $js?>                                                 
});  
   
  </script>  
</body>
<?php require_once('share.php');?>
</html>
