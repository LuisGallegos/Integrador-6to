<?php
include ('../models/vacantesModel.php');
$data = file_get_contents('php://input');
$response = json_decode($data);
$vP = new vacantPr();
switch ($response->flag) {
  case 'viewVacant':
    $promise = $vP->viewVacant();
    $json=json_encode($promise);
    echo $json;
    break;
  default:
    echo "Server Internal Error ";
    break;
}

/**
 *
 */
class vacantPr {

  $vM = new vacantModel();
  
  public function viewVacant(){
    return $vM->viewVacant();
  }

}


?>
