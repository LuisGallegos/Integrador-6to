<?php
include_once ('../lib/connection.php');
include ('queries.php');


class vacantModel {

    public function viewVacant(){
      global $conn,$SELECT_VACANTES;
      //$conn->StartTrans();
      $conn->Execute($SELECT_VACANTES);
      //$conn->CompleteTrans();
      $promise= $conn;
      return $promise
    }
}



?>
