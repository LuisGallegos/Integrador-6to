define(['loginController','bodyController'],
function(loginController, bodyController){
  var managerModule = angular.module('managerModule',['ui.router']);

  managerModule.controller('loginController',loginController);
  managerModule.controller('bodyController',bodyController);

  managerModule.config(function ($stateProvider,$urlRouterProvider){
      $stateProvider
              .state('home', {
                url: '/home',
                templateUrl: 'homes.php',
                controller: 'bodyController as bodyCon'
                })
              .state('uploads', {
                url: '/uploads',
                templateUrl: 'uploads.php'
                })
              .state('downloads', {
                url: '/downloads',
                templateUrl: 'downloads.php'
                })
              .state('downloads', {
                  url: '/downloads',
                  templateUrl: 'downloads.php'
                })

      $urlRouterProvider.otherwise('/home');

  });

  return managerModule;
});
