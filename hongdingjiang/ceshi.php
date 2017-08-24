   <?php
	$path = $_SERVER['PHP_SELF'];

   // echo $phpself;
	echo $path;
    echo basename($path)."<br>";
    //如果选择suffix则忽略扩展名
    echo basename($path,".php");
    ?>