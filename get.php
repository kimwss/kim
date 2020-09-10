<?php 
include_once ("connect.php"); 
session_start();
if (isset($_SESSION['username'])){ 
	$json['nc']=$_SESSION['nc']; 
	$json['flag']=true;
 }else     
	$json['flag']=false;
echo json_encode($json);

