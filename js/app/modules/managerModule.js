define(['loginController','vacantController'],
function(loginController,vacantController){
  var managerModule = angular.module('managerModule',['ui.router']);

  managerModule.controller('loginController',loginController);
  managerModule.controller('vacantController',vacantController);
  managerModule.config(function ($stateProvider,$urlRouterProvider){
      $stateProvider
              .state('home', {
                url: '/home',
                templateUrl: 'homes.php',
                controller: 'vacantController'
                })
              .state('uploads', {
                url: '/uploads',
                templateUrl: 'uploads.php'
                })
              .state('downloads', {
                url: '/downloads',
                templateUrl: 'downloads.php'
                })
              .state('nomination', {
                  url: '/nomination',
                  templateUrl: 'nomination.php'
                })
                .state('empleados', {
                    url: '/empleados',
                    templateUrl: 'empleados.php'
                  })

      $urlRouterProvider.otherwise('/home');

  });

  return managerModule;
});
