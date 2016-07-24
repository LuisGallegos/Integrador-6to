<?php
include_once ('../lib/connection.php');
include ('queries.php');


class vacant_model{
    private $stmt;
    public $rs;

    public function viewVacant(){
      global $conn, $SELECT_VACANTES;
      $stmt = $conn->Prepare($SELECT_VACANTES);
      $rs = $conn->GetArray($SELECT_VACANTES);
      return $rs;
    }

}

/*
public function addPro($objectProject){
      global $conn,$INSERT_PROJECT;
      $conn->StartTrans();
      $conn->Execute($INSERT_PROJECT,$this->objectToArray($objectProject)); //UPDATE AWARD CONFIGURATION
      if($conn->HasFailedTrans()){
        $message = "Error";
      }else{
        $message = "Success";
      }
      $conn->CompleteTrans();
      echo $message;
    }
    */


/*
public function objectToArray($object){
      $newArray = array();
      $i=0;
      foreach ($object as $value) {
        $newArray[$i]=$value;
        $i++;
      }
      return $newArray;
    }
*/

/*
public function pushToArray($object,$varToPush){
      $newArray = $this->objectToArray($object);
      array_push($newArray,$varToPush);
      return $newArray;
    }
*/



?>
