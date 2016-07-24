require.config({
    baseUrl: '../',
    paths: {
    //Application paths
        managerModule: 'js/app/modules/managerModule',
            basic: 'js/app/basic',
            angular: 'js/angular.min',
            sweetAlert: 'components/sweetalert-master/sweetalert-master/dist/sweetalert.min',
        loginController: 'js/app/controllers/loginController',
        vacantController: 'js/app/controllers/vacantController',
        vacantFactory:'js/app/factories/vacantFactory',
        jquery: 'components/jquery/jquery.min',
        bootstrap: 'components/bootstrap/dist/js/bootstrap.min',
        metis: 'components/metisMenu/dist/metisMenu.min',
        customtheme: 'js/sb-admin-2',
        particles: 'lib/Particles'
    },
    shim: {
    //Application dependencies
      'customtheme':{
        deps:['jquery','metis'],
        exports: 'customtheme'
      },
      'metis':{
        deps:['jquery'],
        exports:'metis'
      },
      'bootstrap':{
        deps:['customtheme'],
        exports: 'bootstrap'
      },

      //BOT deps
      //MORRIS NADA
        managerModule: ['angular','sweetAlert','bootstrap','particles']

    }
});
