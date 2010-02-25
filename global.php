<?php
/*
    Created by: Derek Pavao
    Created for: Ocean Front Lounge Inc.
    Created on: 1 July 2009
*/
/*$db = new mysqli('localhost','root','root','database_name');

if ($db->connect_error) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
 }
*/

session_start();

 if ($_SESSION['user_name']=='' && $no_login != true){
    header('Location:login.php');
    die();
 }
 


function __autoload($class_name){
	include('classes/'.strtolower($class_name).'.class.php');
    
}


?>