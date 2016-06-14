<?php
/* 
 @author: Luis Gallegos   
 @author: Francisco Lozano 
 @version: 1.0    
 This is the PHP file that add a new user to the DB.
 */
//include('connection.php');    //Inlcude our file to conect to thr DB
include ('../models/insertclass.php'); //Include our file that contains the class to insert a new User
$user = $_POST['username'];    //Ask from User
$pass = $_POST['password'];       //Ask from Password
$emailm= $_POST['email'];       //Ask for email

echo insert::check(insert::consultas($user),$user,$pass,$emailm); //print the value of the function and send to app.js

?>