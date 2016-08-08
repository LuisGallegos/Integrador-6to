define(['loginController','vacantController','vacantFactory','candidatController','candidatFactory'],
function(loginController,vacantController,vacantFactory,candidatController,candidatFactory){
  var managerModule = angular.module('managerModule',['ui.router']);

  managerModule.controller('loginController',loginController);
  managerModule.controller('vacantController',vacantController);
  managerModule.factory('vacantFactory', vacantFactory);
  managerModule.controller('candidatController',candidatController);
  managerModule.factory('candidatFactory', candidatFactory);
  managerModule.config(function ($stateProvider,$urlRouterProvider){
      $stateProvider
              .state('home', {
                url: '/home',
                templateUrl: 'homes.php'
                })
              .state('vacants', {
                url: '/vacants',
                templateUrl: 'vacants.php',
                controller: 'vacantController',
                })
              .state('candidats', {
                url: '/candidats',
                templateUrl: 'candidatos.php',
                controller: 'candidatController',
                })
              .state('nomines', {
                  url: '/nomines',
                  templateUrl: 'nomination.php'
                })
              .state('employees', {
                url: '/employees',
                templateUrl: 'empleados.php'
                })

      $urlRouterProvider.otherwise('/home');

  });

  return managerModule;
});
