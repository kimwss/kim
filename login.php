<?php include_once ("connect.php"); 
session_start(); 
$user=$_GET['username']; 
$pwd=$_GET['pwd']; 
$yzm=$_GET['yzm']; if($yzm==$_SESSION['vCode']){
$result=$link->query("select * from `user` where username='$user' and pwd='$pwd'");     
$link = null;     
$row = $result->fetch(); 
if ($row) {
	$_SESSION['username'] = $row['username'];         
	$_SESSION['nc'] = $row['nc'];
	$flag=3;
}else{
	$flag=2; 
} }else{
	$flag=1;
} 
echo $flag;

