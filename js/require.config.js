require.config({
    baseUrl: '../',
    paths: {
    //Application paths
        managerModule: 'js/app/modules/managerModule',
            basic: 'js/app/basic',
            angular: 'js/angular.min',
            sweetAlert: 'components/sweetalert-master/sweetalert-master/dist/sweetalert.min',
        bodyController: 'js/app/controllers/bodyController',
        loginController: 'js/app/controllers/loginController',
        jquery: 'components/jquery/jquery.min',
        bootstrap: 'components/bootstrap/dist/js/bootstrap.min',
        metis: 'components/metisMenu/dist/metisMenu.min',
        customtheme: 'js/sb-admin-2',
        particles: 'lib/Particles',
        sigmadata: 'js/sigma',
        sigmacore:'components/Sigma/src/sigma.core',
        sigmaconrad: 'components/Sigma/src/conrad',
        sigmautils: 'components/Sigma/src/utils/sigma.utils',
        sigmapolyfills: 'components/Sigma/src/utils/sigma.polyfills',
        sigmasettings: 'components/Sigma/src/sigma.settings',
        sigmadispatcher: 'components/Sigma/src/classes/sigma.classes.dispatcher',
        sigmaconfigurable: 'components/Sigma/src/classes/sigma.classes.configurable',
        sigmagraph: 'components/Sigma/src/classes/sigma.classes.graph',
        sigmacamera: 'components/Sigma/src/classes/sigma.classes.camera',
        sigmaquad: 'components/Sigma/src/classes/sigma.classes.quad',
        sigmaedgequad: 'components/Sigma/src/classes/sigma.classes.edgequad',
        sigmamouse: 'components/Sigma/src/captors/sigma.captors.mouse',
        sigmatouch: 'components/Sigma/src/captors/sigma.captors.touch',
        sigmacanvas: 'components/Sigma/src/renderers/sigma.renderers.canvas',
        sigmawebgl: 'components/Sigma/src/renderers/sigma.renderers.webgl',
        sigmasvg: 'components/Sigma/src/renderers/sigma.renderers.svg',
        sigmadef: 'components/Sigma/src/renderers/sigma.renderers.def',
        sigmawebglnodesdef: 'components/Sigma/src/renderers/webgl/sigma.webgl.nodes.def',
        sigmawebglnodesfast: 'components/Sigma/src/renderers/webgl/sigma.webgl.nodes.fast',
        sigmawebgledgesdef: 'components/Sigma/src/renderers/webgl/sigma.webgl.edges.def',
        sigmawebgledgesfast: 'components/Sigma/src/renderers/webgl/sigma.webgl.edges.fast',
        sigmawebgledgesarrow: 'components/Sigma/src/renderers/webgl/sigma.webgl.edges.arrow',
        sigmacanvaslabelsdef: 'components/Sigma/src/renderers/canvas/sigma.canvas.labels.def',
        sigmacanvashoversdef: 'components/Sigma/src/renderers/canvas/sigma.canvas.hovers.def',
        sigmacanvasnodesdef: 'components/Sigma/src/renderers/canvas/sigma.canvas.nodes.def',
        sigmacanvasedgesdef: 'components/Sigma/src/renderers/canvas/sigma.canvas.edges.def',
        sigmacanvasedgescurve: 'components/Sigma/src/renderers/canvas/sigma.canvas.edges.curve',
        sigmacanvasedgesarrow: 'components/Sigma/src/renderers/canvas/sigma.canvas.edges.arrow',
        sigmacanvasedgescurvedArrow: 'components/Sigma/src/renderers/canvas/sigma.canvas.edges.curvedArrow',
        sigmacanvasedgehoversdef: 'components/Sigma/src/renderers/canvas/sigma.canvas.edgehovers.def',
        sigmacanvasedgehoverscurve: 'components/Sigma/src/renderers/canvas/sigma.canvas.edgehovers.curve',
        sigmacanvasedgehoversarrow: 'components/Sigma/src/renderers/canvas/sigma.canvas.edgehovers.arrow',
        sigmacanvasedgehoverscurvedArrow: 'components/Sigma/src/renderers/canvas/sigma.canvas.edgehovers.curvedArrow',
        sigmacanvasextremitiesdef: 'components/Sigma/src/renderers/canvas/sigma.canvas.extremities.def',
        sigmasvgutils: 'components/Sigma/src/renderers/svg/sigma.svg.utils',
        sigmasvgnodesdef: 'components/Sigma/src/renderers/svg/sigma.svg.nodes.def',
        sigmasvgedgesdef: 'components/Sigma/src/renderers/svg/sigma.svg.edges.def',
        sigmasvgedgescurve: 'components/Sigma/src/renderers/svg/sigma.svg.edges.curve',
        sigmasvglabelsdef: 'components/Sigma/src/renderers/svg/sigma.svg.labels.def',
        sigmasvghoversdef: 'components/Sigma/src/renderers/svg/sigma.svg.hovers.def',
        sigmamiddlewaresrescale: 'components/Sigma/src/middlewares/sigma.middlewares.rescale',
        sigmamiddlewarescopy: 'components/Sigma/src/middlewares/sigma.middlewares.copy',
        sigmamiscanimation: 'components/Sigma/src/misc/sigma.misc.animation',
        sigmamiscbindEvents: 'components/Sigma/src/misc/sigma.misc.bindEvents',
        sigmamiscbindDOMEvents: 'components/Sigma/src/misc/sigma.misc.bindDOMEvents',
        sigmamiscdrawHovers: 'components/Sigma/src/misc/sigma.misc.drawHovers'

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
      'sigmadata':{
        deps:['sigmacore','sigmaconrad','sigmautils','sigmapolyfills','sigmasettings','sigmadispatcher','sigmaconfigurable','sigmagraph','sigmacamera','sigmaquad','sigmaedgequad','sigmamouse','sigmatouch','sigmacanvas','sigmawebgl','sigmasvg','sigmadef','sigmawebglnodesdef','sigmawebglnodesfast','sigmawebgledgesdef','sigmawebgledgesfast','sigmawebgledgesarrow','sigmacanvaslabelsdef','sigmacanvashoversdef','sigmacanvasnodesdef','sigmacanvasedgesdef','sigmacanvasedgescurve','sigmacanvasedgesarrow','sigmacanvasedgescurvedArrow','sigmacanvasedgehoversdef','sigmacanvasedgehoverscurve','sigmacanvasedgehoversarrow','sigmacanvasedgehoverscurvedArrow','sigmacanvasextremitiesdef','sigmasvgutils','sigmasvgnodesdef','sigmasvgedgesdef','sigmasvgedgescurve','sigmasvglabelsdef','sigmasvghoversdef','sigmamiddlewaresrescale','sigmamiddlewarescopy','sigmamiscanimation','sigmamiscbindEvents','sigmamiscbindDOMEvents','sigmamiscdrawHovers'],
        exports: 'sigmadata'
      },
      //BOT deps
      //MORRIS NADA
        managerModule: ['angular','sweetAlert','bootstrap','sigmadata','particles']

    }
});
