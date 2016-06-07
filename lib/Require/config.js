require.config({
    baseUrl: '../',

    paths:{
      angular: 'lib/Angular/angular.min',
      jquery: 'lib/JQuery/jquery-1.12.4',
      bootsrap: 'lib/Bootstrap/js/bootstrap.min',
      particles: 'lib/Particles',
      appmodule: 'controller/app.module'
    },
    
    shim:{
      particles:{
        deps:['jquery'],
        exports:'particles'
      },
      angular:{
        deps: ['jquery','bootsrap'],
        exports: 'angular'
      },
      appmodule:{
        deps:['angular','particles'],
        exports:'appmodule'
      }
    }
});
require( ["appmodule"], function (appmodule) {
    // set up the app instance
    var MyApp;
});
