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

    public function newVacant($objectVacant){
      global $conn,$INSERT_VACANT;
      $conn->StartTrans();
      $conn->Execute($INSERT_VACANT,$this->objectToArray($objectVacant)); //NEW A VACANT
      if($conn->HasFailedTrans()){
          $message = false;
      }else{
          $message = true;
      }
      $conn->CompleteTrans();
      echo $message;
    }

    public function updateVacant($objectVacant){
      global $conn,$UPDATE_VACANT;
      $conn->StartTrans();
      $conn->Execute($UPDATE_VACANT,$this->objectToArray($objectVacant)); //NEW A VACANT
      if($conn->HasFailedTrans()){
          $message = false;
      }else{
          $message = true;
      }
      $conn->CompleteTrans();
      echo $message;
    }

    public function deleteVacant($idVacant){
      global $conn,$DELETE_VACANT;
      $conn->StartTrans();
      $conn->Execute($DELETE_VACANT,$idVacant); //DELETE A VACANT
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

/*
public function pushToArray($object,$varToPush){
      $newArray = $this->objectToArray($object);
      array_push($newArray,$varToPush);
      return $newArray;
    }
*/



?>
