define([], function( ){
  return function($http,$scope){
      $scope.url = '../presenters/vacantPresenter.php';
      $scope.vacantData;
      $scope.viewVacant = function () {
        $scope.flag = {
            flag: 'viewVacant'
        },
        $http({
            method: 'POST', //Method of the function http
            url:  $scope.url, //Url of the file
            data:  $scope.flag, //Data that was send
            headers: {'Content-Type': 'application/x-www-form-urlencoded'} //headers
        }).then(function(response) {
          $scope.vacantData = response.data;

        });
      }
  }
});
