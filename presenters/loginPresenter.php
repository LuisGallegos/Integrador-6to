<?php
// @author: Luis Gallegos
// @author: Francisco Lozano
// @version: 1.1
//include('connection.php');

//CLASS UserData GETS AND SETS THE DATA THAT THE USER SUBMITS.
require '../models/loginModel.php';
$userdata = new UserData();

if (isset($_POST['username']) && !empty($_POST['username'])){
	$userdata->setUsername($_POST["username"]);
}

if (isset($_POST['password']) && !empty($_POST['password'])){
	$userdata->setPassword($_POST["password"]);
}

$userdata->getAccess();
//echo $userdata->getUsername();

//echo $userdata->getPassword();

class UserData{
  private $username;
  private $password;

  function __construct(){
    $this->checkdata = new CheckData();
  }

  public function getUsername(){
    return $this->username;
  }

  public function setUsername($username){
    $this->username = $username;
  }

  public function getPassword(){
    return $this->password;
  }

  public function setPassword($password){
    $this->password = $password;
  }

  public function getAccess(){
    echo $this->checkdata->checkUserData($this->getUsername(), $this->getPassword());
  }

}


//INITIALIZE OUR CLASSES
//$checkdata = new CheckData();
//$checkdata->checkUserData();
?>

