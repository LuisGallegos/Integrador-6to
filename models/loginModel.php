<?php
require('../lib/connection.php');
require('queries.php');

//CLASS TO CHECK DATA THE USER SUBMITTS, INHERITS FROM UserData.
class CheckData extends UserData{
  private $stmt;
  private $rs;

  function __construct(){

  }

//checkUserData IS THE BUSINESS LOGIC
  public function checkUserData($user, $password){
    global $conn, $SELECT_USERS_DATA, $UPDATE_ATTEMPTS_TIMES, $UPDATE_USERS_STAT;
    $text = "";
    $username = "";

//PREPARE AND EXECUTE QUERY TO SELECT ALL THE USER DATA
    $stmt = $conn->Prepare($SELECT_USERS_DATA);
    $rs = $conn->Execute($stmt, $user);
    $dataarray = $rs->GetRows();
    if(!$dataarray){
      $text = "wrong";

    }else{
      foreach ($dataarray as $row) {
        if($row["stat"] == 0){//CHECK IF OUR USER IS NOT BLOCK
            $text = "wrongS";
            break;
            //IF NOT, CHECK IF THE PASSWORD IS WRONG. IF SO, EXECUTES updateAttempts()
        }else if($row["decrypted_pass"] != $password){
            $text = "wrong";
            $username = $user;
            $this->updateAttempts($username, $conn, $UPDATE_ATTEMPTS_TIMES);
            //CHECK IF ATTEMPTED LOGIN TIMES IS EQUALS TO 3, IF SO, EXECUTES updateStatus()
            if($row["times"]+1 === 3){
              $this->updateStatus($username, $conn, $UPDATE_USERS_STAT);
            }
            break;
            //IF EXISTS AND THE PASSWORD SUBMITTED IS CORRECT, EXECUTES initSession()
          }else if($row["decrypted_pass"] === $password){
            $username = $user;
            $this->initSession($username);
            $text = "correct";
            break;
          }
        }
      }
        return $text;
    }

//UPDATES THE FAILED LOGIN ATTEMPTS OF THE USER
  public function updateAttempts($username, $conn, $UPDATE_ATTEMPTS_TIMES){
    $stmt = $conn->Prepare($UPDATE_ATTEMPTS_TIMES);
    $rs = $conn->Execute($stmt, $username);
  }

//UPDATES THE STATUS OF THE USER TO BLOCK
  public function updateStatus($username, $conn, $UPDATE_USERS_STAT){
    $stmt = $conn->Prepare($UPDATE_USERS_STAT);
    $rs = $conn->Execute($stmt, $username);
  }

//CREATES A PHP SESSION FOR OUR USER
  public function initSession($username){
    $_SESSION = array();
    session_id('active');
    session_start();
    $_SESSION['timeout'] = time();
    if (isset($_SESSION['username'])) {
        $_SESSION['username'] = $username;
    } else {
        $_SESSION['username'] = $username;
    }
  }

}

?>
