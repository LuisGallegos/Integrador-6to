define([], function( ){
  return function($scope,vacantFactory){
    $scope.vacant=vacantFactory.vacant;
    $scope.vacantUp=vacantFactory.vacantUP;
    $scope.viewVacant = function () {
        vacantFactory.viewProject().then(
          function (promise) {
            $scope.vacantData = promise;
          });
      };

      $scope.insertVacant=function () {
        vacantFactory.newVacant($scope.vacant).then(
          function (promise) {
            $scope.vacantDatas = promise;
            if ($scope.vacantDatas==true) {
              sweetAlert("Great", "You successfully create a new Vacant!", "success");
            }else{
              sweetAlert("Oops...", "Unable to create a new Vacant!", "error");
            }
            $scope.viewVacant();
          });
          $('#addNewVacant').modal('toggle');
      };

      $scope.deleteVacant=function (idVacant) {
        vacantFactory.delVacant(idVacant).then(
          function (promise) {
            $scope.deleVacant = promise;
            if ($scope.deleVacant==true) {
              sweetAlert("Great", "You successfully create a new Vacant!", "success");
            }else{
              sweetAlert("Oops...", "Unable to create a new Vacant!", "error");
            }
            $scope.viewVacant();
          });
      };

      $scope.updateVacant= function () {
        vacantFactory.updatedVacant($scope.vacantUp).then(
          function (promise) {
            $scope.updaVacant = promise;
            if ($scope.updaVacant==true) {
              sweetAlert("Great", "You successfully updated the Vacant!", "success");
            }else{
              sweetAlert("Oops...", "Unable to updated the Vacant!", "error");
            }
            $scope.viewVacant();
          });
      };

      $scope.values= function (index) {
        $scope.vacantUp.idVacant = $scope.vacantData[index][0];
        $scope.vacantUp.name = $scope.vacantData[index][1];
        $scope.vacantUp.startdate = $scope.vacantData[index][2];
        $scope.vacantUp.enddate = $scope.vacantData[index][3];
        $scope.vacantUp.salary = $scope.vacantData[index][4];
        $scope.vacantUp.des = $scope.vacantData[index][5];
      };
  }
});
