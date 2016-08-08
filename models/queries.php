<?php

//-------------------------------------------------------------------------------LOGIN QUERIES-----------------------------------------------------------------------------------------------



//:::::SELECT
$SELECT_USERS_DATA = "SELECT users.username, users.pass, users.stat, attempts.times FROM users INNER JOIN attempts ON users.username = attempts.username WHERE users.username= ?;";
$SELECT_CHECKUSER= "Select username, pass from users where username=?;"; //Chek if the user already exist

//:::::UPDATES
$UPDATE_ATTEMPTS_TIMES = "UPDATE attempts SET times= times+1 WHERE username= ?;";
$UPDATE_USERS_STAT = "UPDATE users SET stat=0 WHERE username= ?; ";

//:::::INSERTS

$INSERT_NEWUSER= "Insert into users(username,pass,email) values (?,?,?);";//Ecrypt the password and insert the user in the DB
$INSERT_ATTEMPTS= "Insert into attempts(username) values (?);";//Insert user on attempts table


//-------------------------------------------------------------------------------LOGIN QUERIES-----------------------------------------------------------------------------------------------


//-------------------------------------------------------------------------------VACANAT QUERIES-----------------------------------------------------------------------------------------------
//:::::SELECT

$SELECT_VACANTES="EXEC CVacSRH;";

//:::::UPDATES

$UPDATE_VACANT="EXEC EVacSRH ?,?,?,?,?,?;";

//:::::INSERTS

$INSERT_VACANT="EXEC IVacSRH ?,?,?,?,?;";

//:::::DELETE

$DELETE_VACANT="EXEC DVacSRH ?;";


//-------------------------------------------------------------------------------VACANAT QUERIES-----------------------------------------------------------------------------------------------
//:::::SELECT

$SELECT_COMBOVACANT="EXEC ComboVacSRH;";

$SELECT_CANDIDAT="EXEC CCanSRH;";

$SELECT_COMBOSTATE="EXEC ComboEsSRH;";

//:::::UPDATES

$UPDATE_CANDIDAT="EXEC DCanSRH ?,?,?,?,?,?,?;";

//:::::INSERTS

$INSERT_CANDIDAT="EXEC ICanSRH ?,?,?,?,?,?,1;";


//:::::MISECELEOUS

$PROMOVEE_CANDIDAT="EXEC MCanSRH ?;";

//:::::DELETE

//$DELETE_CANDIDAT="EXEC DVacSRH ?;";


//-------------------------------------------------------------------------------EMPLOYEE QUERIES-----------------------------------------------------------------------------------------------
//:::::SELECT

$SELECT_EMPLOYEE="EXEC CEmpSRH;";

//:::::UPDATES

$UPDATE_EMPLOYEE="EXEC AEmpSRH ?,?,?,?;";

//:::::DELETE

$DELETE_EMPLOYEE="EXEC DEnpSRH ?;";

//-------------------------------------------------------------------------------NOMINEE QUERIES-----------------------------------------------------------------------------------------------

//:::::SELECT

$SELECT_NOMINEE="SELECT * FROM SENomSRH;";

?>
