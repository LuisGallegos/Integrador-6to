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
      case 'newCandidat':
        $promise = $caMo->newCandidat($request->candidat);
        echo($promise);
        break;
      case 'delCandidat':
        $promise = $caMo->deleteCandidat($request->candidat);
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

    public function newCandidat($objectCandidat){
        return $this->cM->newCandidat($objectCandidat);
      }

    public function deleteCandidat($idCandidat){
        return $this->cM->deleteCandidat($idCandidat);
    }

    public function updateCandidat($objectCandidat){
      return $this->cM->updateCandidat($objectCandidat);
    }
}


?>
