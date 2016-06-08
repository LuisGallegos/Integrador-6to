require.config({
    baseUrl: '../',

    paths:{
      angular: 'lib/Angular/angular.min',
      uirouter: 'lib/Angular_uirouter/angular-ui-router',
      jquery: 'lib/JQuery/jquery-1.12.4',
      bootsrap: 'lib/Bootstrap/js/bootstrap.min',
      particles: 'lib/Particles',
      routerApp: 'controller/app.module'
    },

    shim:{
      particles:{
        deps:['jquery'],
        exports:'particles'
      },
      uirouter:{
        deps:['angular'],
        exports:'angular_router'
      },
      routerApp:{
        deps:['angular_router','particles'],
        exports:'appmodule'
      }
    }
});
require( ["routerApp"], function (appmodule) {

});
