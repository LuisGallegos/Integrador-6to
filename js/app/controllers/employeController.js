define([], function( ){
  return function($scope,employeFactory){
    $scope.employe=employeFactory.employe;
    $scope.employeUp=employeFactory.candidatUP;

    $scope.viewEmploye = function () {
        employeFactory.viewProject().then(
          function (promise) {
            $scope.employeData = promise;
          });
      };


      $scope.deleteEmploye=function (idEmploye) {
        employeFactory.delEmploye(idEmploye).then(
          function (promise) {
            $scope.deleemploye = promise;
            if ($scope.deleemploye==true) {
              sweetAlert("Great", "You successfully create a new Employe!", "success");
            }else{
              sweetAlert("Oops...", "Unable to create a new Employe!", "error");
            }
            $scope.viewEmploye();
          });
      };

    

      $scope.values=function (index) {
        $scope.employeUp.idEmploye = $scope.employeData[index][0];
        $scope.employeUp.name = $scope.employeData[index][1];
        $scope.employeUp.startdate = $scope.employeData[index][2];
        $scope.employeUp.enddate = $scope.employeData[index][3];
        $scope.employeUp.salary = $scope.employeData[index][4];
        $scope.employeUp.des = $scope.employeData[index][5];
      };

  }
});
