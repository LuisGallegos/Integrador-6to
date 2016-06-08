var routerApp = angular.module('routerApp', [require('uirouter')]);

routerApp.config(
  function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/Alta');
    $stateProvider
        // HOME STATES AND NESTED VIEWS ========================================
        .state('Alta', {
            url: '/Alta',
            templateUrl: 'Alta.php'
        })
        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('Baja', {
            url: '/Baja',
            templateUrl: 'Baja.php'
        })
        .state('Cambio', {
            url: '/Cambio',
            templateUrl: 'Cambio.php'
        })
        .state('Consulta', {
            url: '/Consulta',
            templateUrl: 'Consulta.php'
        })
});
