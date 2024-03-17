<?php
$host='localhost';
$database='test1';
$userdb='root';
$password='';

 $link=mysqli_connect($host,$userdb,$password,$database) or die ("Ошибка" . mysqli_error($link));
	if(isset($_POST['Name'])&& isset($_POST['Email'])&& isset($_POST['Password'])){
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	
		if($Name && $Email && $Password){
		$query="insert into sot(Name,Email,Password) values('$Name','$Email','$Password')";
		$result=mysqli_query($link,$query) or die ("Ошибка" . mysqli_error($link));
		}
	}
?>

