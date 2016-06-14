define(['loginController'],
function(loginController){
  var managerModule = angular.module('managerModule',['ui.router']);

  managerModule.controller('loginController',loginController);

  managerModule.config(function ($stateProvider,$urlRouterProvider){
      $stateProvider
              .state('home', {
                url: '/home',
                templateUrl: 'homes.php'
                })
              .state('uploads', {
                url: '/uploads',
                templateUrl: 'uploads.php'
                })
              .state('downloads', {
                url: '/downloads',
                templateUrl: 'downloads.php'
                })

      $urlRouterProvider.otherwise('/home');

  });

  return managerModule;
});
