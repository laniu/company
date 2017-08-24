<?php  
  
if(empty($_SESSION['user'])){  
      
    header("Location:http://zhifu.weiyingjia.org/ceshijiekou/fn_wx_login.php"); 
}else{  
    print_r($_SESSION['user']);  
}  
  
?>  