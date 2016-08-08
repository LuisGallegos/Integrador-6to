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
            $scope.vacantData = promise;
            if ($scope.vacantData==true) {
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

      

  }
});
