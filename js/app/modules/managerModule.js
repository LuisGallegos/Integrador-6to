define(['loginController','vacantController','vacantFactory'],
function(loginController,vacantController,vacantFactory){
  var managerModule = angular.module('managerModule',['ui.router']);

  managerModule.controller('loginController',loginController);
  managerModule.controller('vacantController',vacantController);
  managerModule.factory('vacantFactory', vacantFactory);
  managerModule.config(function ($stateProvider,$urlRouterProvider){
      $stateProvider
              .state('home', {
                url: '/home',
                templateUrl: 'homes.php',
                controller: 'vacantController',
                })
              .state('Perceptions', {
                url: '/Perceptions',
                templateUrl: 'perceptions.php'
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
