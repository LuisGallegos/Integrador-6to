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
          $('#addNewCandidat').modal('toggle');
      };

      $scope.deleteCandidat=function (idCandidat) {
        candidatFactory.delCandidat(idCandidat).then(
          function (promise) {
            $scope.delecandidat = promise;
            if ($scope.delecandidat==true) {
              sweetAlert("Great", "You successfully create a new Candidat!", "success");
            }else{
              sweetAlert("Oops...", "Unable to create a new Candidat!", "error");
            }
            $scope.viewCandidat();
          });
      };

      $scope.updateCandidat= function () {
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
        $scope.candidatUp.idCandidat = $scope.candidatData[index][0];
        $scope.candidatUp.name = $scope.candidatData[index][1];
        $scope.candidatUp.startdate = $scope.candidatData[index][2];
        $scope.candidatUp.enddate = $scope.candidatData[index][3];
        $scope.candidatUp.salary = $scope.candidatData[index][4];
        $scope.candidatUp.des = $scope.candidatData[index][5];
      };

  }
});
