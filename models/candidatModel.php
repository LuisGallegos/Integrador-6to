<?php
include_once ('../lib/connection.php');
include ('queries.php');


class candidat_model{
    private $stmt;
    public $rs;

    public function viewCandidat(){
      global $conn, $SELECT_CANDIDAT;
      $stmt = $conn->Prepare($SELECT_CANDIDAT);
      $rs = $conn->GetArray($SELECT_CANDIDAT);
      return $rs;
    }

    public function newCandidat($objectCandidat){
      global $conn,$INSERT_CANDIDAT;
      $conn->StartTrans();
      $conn->Execute($INSERT_CANDIDAT,$this->objectToArray($objectCandidat)); //NEW A CANDIDAT
      if($conn->HasFailedTrans()){
          $message = false;
      }else{
          $message = true;
      }
      $conn->CompleteTrans();
      echo $message;
    }

    public function updateCandidat($objectCandidat){
      global $conn,$UPDATE_CANDIDAT;
      $conn->StartTrans();
      $conn->Execute($UPDATE_CANDIDAT,$this->objectToArray($objectCandidat)); //NEW A CANDIDAT
      if($conn->HasFailedTrans()){
          $message = false;
      }else{
          $message = true;
      }
      $conn->CompleteTrans();
      echo $message;
    }

    public function deleteCandidat($idCandidat){
      global $conn,$DELETE_CANDIDAT;
      $conn->StartTrans();
      $conn->Execute($DELETE_CANDIDAT,$idCandidat); //DELETE A CANDIDAT
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
