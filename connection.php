<?php
$connection = mysqli_connect ("localhost","root","","semester3");

///check connection
if ($connection){
	echo "Connection Succes";
}else{
	echo "Connection Failed!" . mysqli_connect_error();
	die;
}

?>