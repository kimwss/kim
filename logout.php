<?php session_start(); 
unset($_SESSION['username']); 
unset($_SESSION['nc']);
echo json_encode(true);

