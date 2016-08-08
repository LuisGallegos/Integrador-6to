<?php
require ('../models/nomineeModel.php');
$noMo = new nominePr();
$postdata = file_get_contents('php://input');
$request = json_decode($postdata);


 $result = new stdClass();

if(isset($request->flag)){

    switch ($request->flag) {
      case 'viewNominee':
        $promise = $noMo->viewNominee();
        $json= json_encode($promise);
        echo($json);
        break;
    }

}else{
  $result->status = false;
   $result->message = "Error: missing flag";
   echo json_encode($result);
}
/**
 *
 */
class nominePr {

  private $nM;

  public function __construct(){
      $this->nM = new nomine_model();
    }

    public function viewNominee(){
        return $this->nM->viewNominee();
    }

}
?>
