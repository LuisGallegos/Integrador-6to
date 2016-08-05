define([], function( ){
  return function($scope,vacantFactory){
    $scope.vacant=vacantFactory.vacant;
    $scope.vacantData;

    $scope.viewVacant = function () {
        vacantFactory.viewProject().then(
          function (promise) {
            $scope.vacantData = promise;
            console.log($scope.vacantData);
          });
      };

      $scope.insertVacant=function () {
        vacantFactory.newVacant($scope.vacant).then(
          function (promise) {
            $scope.vacantData = promise;

          });
      };
  }
});
