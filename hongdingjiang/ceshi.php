   <?php
	$path = $_SERVER['PHP_SELF'];

   // echo $phpself;
	echo $path;
    echo basename($path)."<br>";
    //���ѡ��suffix�������չ��
    echo basename($path,".php");
    ?>