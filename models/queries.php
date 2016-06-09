<?php

//-------------------------------------------------------------------------------LOGIN QUERIES-----------------------------------------------------------------------------------------------

//:::::SELECT
$SELECT_USERS_DATA = "SELECT users.username, CAST(AES_DECRYPT(users.pass,'hola') AS CHAR(30)) decrypted_pass, users.stat, attempts.times FROM users INNER JOIN attempts ON users.username = attempts.username WHERE users.username= ? ";
$SELECT_CHECKUSER= "Select username, pass from users where username=?"; //Chek if the user already exist

//:::::UPDATES
$UPDATE_ATTEMPTS_TIMES = "UPDATE attempts SET times= times+1 WHERE username= ? ";
$UPDATE_USERS_STAT = "UPDATE users SET stat=0 WHERE username= ? ";

//:::::INSERTS

$INSERT_NEWUSER= "Insert into users(username,pass,email) values (?,AES_ENCRYPT(?,'hola'),?)";//Ecrypt the password and insert the user in the DB
$INSERT_ATTEMPTS= "Insert into attempts(username) values (?)";//Insert user on attempts table


//-------------------------------------------------------------------------------LOGIN QUERIES-----------------------------------------------------------------------------------------------


?>
