<?php
require_once('include.php');
$path = $_SERVER['PHP_SELF'];//文件路径
$file = basename($path,".php");//die;
$id   = isset($_GET['ids'])?$_GET['ids']:$_SESSION['menu'];
if(is_array($id)){
	 $ids  = $id;
}else{	
    $ids   = (explode(",",$id));
}
$q    = isset($_GET['q'])?$_GET['q']:'';
$v    = isset($_GET['v'])?$_GET['v']:'';
if(!empty($ids)){
   $_SESSION['menu'] = $ids;
}//var_dump($_SESSION['menu']);
if(!empty($q) && !empty($v)){
	$_SESSION['arr'][$q] = $v;
}
if(in_array($file,$_SESSION['menu'])){
	for($i=0;$i<count($ids);$i++){
		if($ids[$i] == $file){
			if($i+1<count($ids)){
	    	   $url = $ids[$i+1];//下一页
			}
		   else{
			   $url = '';
		   }
			    
		}
	}
}
if(!empty($_SESSION['arr'][$file])){
echo 	$xuanzhong = $_SESSION['arr'][$file];
}
?>