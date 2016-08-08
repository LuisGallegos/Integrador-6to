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
        candidatController: 'js/app/controllers/candidatController',
        candidatFactory:'js/app/factories/candidatFactory',
        nomineeController: 'js/app/controllers/nomineeController',
        nomineeFactory:'js/app/factories/nomineeFactory',
        employeController: 'js/app/controllers/employeController',
        employeFactory:'js/app/factories/employeFactory',
        jquery: 'components/jQuery/jquery-2.2.3.min',
        bootstrap: 'components/bootstrap/dist/js/bootstrap.min',
        dashboard: 'js/dashboard',
        dataragepicker: 'components/daterangepicker/daterangepicker',
        moment: 'js/moment.min',
        datapicker:'components/datepicker/bootstrap-datepicker',
        wysihtml5: 'components/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min',
        fastclick: 'components/fastclick/fastclick',
        demo: 'js/demo',
        app:'js/app',
        jqueryui: 'components/jquery-ui/jquery-ui.min',
        particles: 'lib/Particles'
    },
    shim: {
    //Application dependencies
      'app':{
        deps:['jquery','jqueryui','bootstrap'],
        exports: 'app'
      },
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
      'jqueryui':{
        deps:['jquery'],
        exports:'jqueryui'
      },
      'demo':{
        deps:['dashboard'],
        exports: 'demo'
      },

      //BOT deps
      //MORRIS NADA
        managerModule: ['angular','sweetAlert','bootstrap','particles','app','dashboard','demo']

    }
});
