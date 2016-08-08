<?php
require ('../models/vacantesModel.php');
$vaMo = new vacantPr();
$postdata = file_get_contents('php://input');
$request = json_decode($postdata);


 $result = new stdClass();

if(isset($request->flag)){

    switch ($request->flag) {
      case 'viewVacant':
        $promise = $vaMo->viewVacant();
        $json= json_encode($promise);
        echo($json);
        break;
      case 'newVacant':
        $promise = $vaMo->newVacant($request->vacant);
        echo($promise);
        break;
      case 'delVacant':
        $promise = $vaMo->deleteVacant($request->vacant);
        echo($promise);
        break;
      case 'updatedVacant':
        $promise = $vaMo->updateVacant($request->vacant);
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
class vacantPr {

  private $vM;

  public function __construct(){
      $this->vM = new vacant_model();
    }

    public function viewVacant(){
        return $this->vM->viewVacant();
    }

    public function newVacant($objectVacant){
        return $this->vM->newVacant($objectVacant);
      }

    public function deleteVacant($idVacant){
        return $this->vM->deleteVacant($idVacant);
    }

    public function updateVacant($objectVacant){
      return $this->vM->updateVacant($objectVacant);
    }
}


?>
