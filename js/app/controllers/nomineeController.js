define([], function( ){
  return function($scope,nomineeFactory){

    $scope.viewNominee = function () {
        nomineeFactory.viewProject().then(
          function (promise) {
            $scope.nomineeData = promise;
          });
      };
    }
});
