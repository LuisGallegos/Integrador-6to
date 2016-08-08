<?php
include_once ('../lib/connection.php');
include ('queries.php');


class nomine_model{
    private $stmt;
    public $rs;

    public function viewNominee(){
      global $conn, $SELECT_NOMINEE;
      $conn->Execute("EXEC p;");
      $stmt = $conn->Prepare($SELECT_NOMINEE);
      $rs = $conn->GetArray($SELECT_NOMINEE);
      return $rs;
    }

}
?>
