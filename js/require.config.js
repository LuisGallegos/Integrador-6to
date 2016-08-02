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
        dashboard: 'js/dashboard',
        dataragepicker: 'components/daterangepicker/daterangepicker',
        moment: 'js/moment.min',
        datapicker:'components/datepicker/bootstrap-datepicker',
        bootstrap3: 'components/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min',
        jqueryscroll: 'components/slimScroll/jquery.slimscroll.min',
        fastclick: 'components/fastclick/fastclick',
        demo: 'js/demo',
        jqueryui: 'components/jquery-ui/jquery-ui.min',
        particles: 'lib/Particles'
    },
    shim: {
    //Application dependencies
      'customtheme':{
        deps:['jquery','metis'],
        exports: 'customtheme'
      },
      'datapicker':{
        deps:['moment'],
        exports:'datapicker'
      },
      'moment':{
        deps:['dataragepicker'],
        exports:'moment'
      },
      'metis':{
        deps:['jquery'],
        exports:'metis'
      },
      'jqueryui':{
        deps:['jquery'],
        exports:'jqueryui'
      },
      'bootstrap':{
        deps:['customtheme'],
        exports: 'bootstrap'
      },
      'dashboard':{
        deps:['customtheme'],
        exports: 'dashboard'
      },
      'demo':{
        deps:['dashboard'],
        exports: 'demo'
      },

      'jqueryscroll':{
        deps:['jquery'],
        exports: 'jqueryscroll'
      },

      //BOT deps
      //MORRIS NADA
        managerModule: ['angular','sweetAlert','bootstrap','particles', 'dashboard']

    }
});
