define([], function( ){
  return function($scope,candidatFactory){
    $scope.candidat=candidatFactory.candidat;
    $scope.candidatUp=candidatFactory.candidatUP;

    $scope.viewCandidat = function () {
        candidatFactory.viewProject().then(
          function (promise) {
            $scope.candidatData = promise;
          });
      };

      $scope.insertCandidat=function () {
        candidatFactory.newCandidat($scope.candidat).then(
          function (promise) {
            $scope.candidatDatas = promise;
            if ($scope.candidatDatas==true) {
              sweetAlert("Great", "You successfully create a new Candidat!", "success");
            }else{
              sweetAlert("Oops...", "Unable to create a new Candidat!", "error");
            }
            $scope.viewCandidat();
          });
      };

      $scope.promoveCandidat=function (idCandidat) {
        candidatFactory.promoveCandidat(idCandidat).then(
          function (promise) {
            $scope.delecandidat = promise;
            if ($scope.delecandidat==true) {
              sweetAlert("Great", "You successfully promove a new Candidat!", "success");
            }else{
              sweetAlert("Oops...", "Unable to promove a new Candidat!", "error");
            }
            $scope.viewCandidat();
          });
      };

      $scope.updateCandidated= function () {
        candidatFactory.updatedCandidat($scope.candidatUp).then(
          function (promise) {
            $scope.updaCandidat = promise;
            if ($scope.updaCandidat==true) {
              sweetAlert("Great", "You successfully updated the Candidat!", "success");
            }else{
              sweetAlert("Oops...", "Unable to updated the Candidat!", "error");
            }
            $scope.viewCandidat();
          });
      };

      $scope.values=function (index) {
        $scope.candidatUp.idcandidat = $scope.candidatData[index][0];
        $scope.candidatUp.name = $scope.candidatData[index][1];
        $scope.candidatUp.fatherlast = "";
        $scope.candidatUp.motherlast = "";
        $scope.candidatUp.number = $scope.candidatData[index][2];
        $scope.candidatUp.email = $scope.candidatData[index][3];
        if ($scope.candidatData[index][5]=="PROCESO") {
            $scope.candidatUp.state = "1";
        }
        if ($scope.candidatData[index][5]=="EXAMINADO") {
            $scope.candidatUp.state = "2";
        }
        if ($scope.candidatData[index][5]=="SELECCIONADO") {
            $scope.candidatUp.state = "3";
        }
        if ($scope.candidatData[index][5]=="CONTRATADO") {
            $scope.candidatUp.state = "4";
        }
        if ($scope.candidatData[index][5]=="DECLINADO") {
            $scope.candidatUp.state = "5";
        }
      };

      $scope.comboVacant=function () {
        candidatFactory.viewComboVacant().then(
          function (promise) {
            $scope.vacantData = promise;
          });
      };

      $scope.comboState=function () {
        candidatFactory.viewComboState().then(
          function (promise) {
            $scope.stateData = promise;
          });
      };

  }
});
