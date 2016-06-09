<?php
include('../lib/connection.php'); 
require('queries.php');
class insert { //Name of the class
    public $stmt;
    public $rs;
    
    public function consultas($user) { //Name of the function and parms in this case only the sso or user
        global $conn, $SELECT_CHECKUSER;     //We include the Connection to our function
        //$encrypted_pass = openssl_digest($contra, 'md5');
        $stmt= $conn->Prepare($SELECT_CHECKUSER);//Preprare the statement of $checkuser
        $rs= $conn->Execute($stmt,$user);//Execute the statement
        
        $uservalidation=$rs->fields['username'];//With a resultset we obtaint the value of the first field
        
        return $uservalidation;
    }
    
    
    public function check($uservalidation,$userd,$passd,$emaild) { //Name of the class and  parms if the user exist, sso,pass,email
        global $conn,$INSERT_NEWUSER,$INSERT_ATTEMPTS;
        $data= array($userd,$passd,$emaild);               
        if($uservalidation===null){//If the Field is empty we insert the new user int both tables
            
            $stmt= $conn->Prepare($INSERT_NEWUSER);
            $rs= $conn->Execute($stmt,$data);

            $stmt= $conn->Prepare($INSERT_ATTEMPTS);
            $rs= $conn->Execute($stmt,$userd);
   
            return 'correct';//Message of correct sign up

        }else{
            return 'wrong';//Message of wrong sign up
        }
    }
}