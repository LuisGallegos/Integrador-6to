<?php
require ('../models/employeModel.php');
$vaMo = new employePr();
$postdata = file_get_contents('php://input');
$request = json_decode($postdata);


 $result = new stdClass();

if(isset($request->flag)){

    switch ($request->flag) {
      case 'viewVacant':
        $promise = $vaMo->viewEmploye();
        $json= json_encode($promise);
        echo($json);
        break;
      case 'delVacant':
        $promise = $vaMo->deleteEmploye($request->vacant);
        echo($promise);
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
class employePr {

  private $vM;

  public function __construct(){
      $this->vM = new employe_model();
    }

    public function viewEmploye(){
        return $this->vM->viewEmploye();
    }

    public function deleteEmploye($objectVacant){
      return $this->vM->deleteEmploye($objectVacant);
    }
}


?>
