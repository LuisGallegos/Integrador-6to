<?php
include_once ('../lib/connection.php');
include ('queries.php');


class employe_model{
    private $stmt;
    public $rs;

    public function viewEmploye(){
      global $conn, $SELECT_EMPLOYEE;
      $stmt = $conn->Prepare($SELECT_EMPLOYEE);
      $rs = $conn->GetArray($SELECT_EMPLOYEE);
      return $rs;
    }


    public function updateEmploye($objectEmploye){
      global $conn,$UPDATE_EMPLOYEE;
      $conn->StartTrans();
      $conn->Execute($UPDATE_EMPLOYEE,$this->objectToArray($objectEmploye)); //NEW A EMPLOYE
      if($conn->HasFailedTrans()){
          $message = false;
      }else{
          $message = true;
      }
      $conn->CompleteTrans();
      echo $message;
    }

    public function deleteEmploye($idEmploye){
      global $conn,$DELETE_EMPLOYEE;
      $conn->StartTrans();
      $conn->Execute($DELETE_EMPLOYEE,$idEmploye); //DELETE A EMPLOYE
      if($conn->HasFailedTrans()){
          $message = false;
      }else{
          $message = true;
      }
      $conn->CompleteTrans();
      echo $message;
    }

    public function objectToArray($object){
      $newArray = array();
      $i=0;
      foreach ($object as $value) {
        $newArray[$i]=$value;
        $i++;
      }
      return $newArray;
      }

}


?>
