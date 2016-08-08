<?php
require ('../models/candidatModel.php');
$caMo = new candidatPr();
$postdata = file_get_contents('php://input');
$request = json_decode($postdata);


 $result = new stdClass();

if(isset($request->flag)){

    switch ($request->flag) {
      case 'viewCandidat':
        $promise = $caMo->viewCandidat();
        $json= json_encode($promise);
        echo($json);
        break;
      case 'viewComboVacant':
        $promise = $caMo->viewComboVacant();
        $json= json_encode($promise);
        echo($json);
        break;
      case 'viewComboState':
        $promise = $caMo->viewComboState();
        $json= json_encode($promise);
        echo($json);
        break;
      case 'newCandidat':
        $promise = $caMo->newCandidat($request->candidat);
        echo($promise);
        break;
      case 'promoveCandidat':
        $promise = $caMo->promoveCandidat($request->candidat);
        echo($promise);
        break;
      case 'updatedCandidat':
        $promise = $caMo->updateCandidat($request->candidat);
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
class candidatPr {

  private $cM;

  public function __construct(){
      $this->cM = new candidat_model();
    }

    public function viewCandidat(){
        return $this->cM->viewCandidat();
    }

    public function viewComboVacant(){
      return $this->cM->viewComboVacant();
    }

    public function viewComboState(){
      return $this->cM->viewComboState();
    }

    public function newCandidat($objectCandidat){
        return $this->cM->newCandidat($objectCandidat);
      }

    public function promoveCandidat($idCandidat){
        return $this->cM->promoveCandidat($idCandidat);
    }

    public function updateCandidat($objectCandidat){
      return $this->cM->updateCandidat($objectCandidat);
    }
}


?>
