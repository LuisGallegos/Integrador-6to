define([], function( ){
  return function($scope,vacantFactory){

    $scope.vacantData;
      $scope.viewVacant = function () {
        vacantFactory.viewProject().then(
          function (promise) {
            $scope.vacantData = promise;
          });
      };
  }
});
