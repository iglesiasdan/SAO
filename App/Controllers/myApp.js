'use strict';
var myApp = angular.module('myApp',['ngRoute','ui.router','angularFileUpload','chart.js']).factory('$exeptionHandler',
  function(){
    return function(exception, cause) {
      exception.message += 'Angular Exception: "' + cause + '"';
      throw exception;
  };
}
);
// prueba con states
myApp.service('fileUpload', ['$http', function ($http) {
    //console.log("hi");
    this.uploadFileToUrl = function(file, uploadUrl){
        var fd = new FormData();
        fd.append('file', file);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(){
        })
        .error(function(){
        });
    }
}]);
myApp.directive('fileModel', ['$parse', function ($parse) {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            var model = $parse(attrs.fileModel);
            var modelSetter = model.assign;

            element.bind('change', function(){
                scope.$apply(function(){
                    modelSetter(scope, element[0].files[0]);
                });
            });
        }
    };
}]);
myApp.controller('myCtrl', ['$scope', 'fileUpload', function($scope, fileUpload){

    $scope.uploadFile = function(){
        var file = $scope.myFile;
        // console.log('file is ' );
        // console.dir(file);
        var uploadUrl = "./uploads/upload.php";
        fileUpload.uploadFileToUrl(file, uploadUrl);
        console.log(fileUpload);
    };

}]);



myApp.config(function ($stateProvider, $urlRouterProvider) {
     var baseUrl = "http://107.180.66.98:3000/";//"http://107.180.66.98:90:3000/";
     $urlRouterProvider.when("/", "/inicio");

     $stateProvider
        .state("inicio", {
            url: "/inicio",
            views: {
                '':{  templateUrl: "../Views/Pages/home.php"}
            }

        })
        .state("estudios", {
            url:"/estudios/:ruta",
            views:{
              '':{templateUrl: "../Views/Pages/navbar_estudios.php"},
              'table@estudios':{templateUrl: "../Views/Pages/table_estudios.php",controller: "arriboController"}
            },
            resolve: {
              urlbase: function () {
                return baseUrl+'arribos';
              }
            }
        })
        .state("agregar_arribo", {
            url:"/agregar_arribo",
            templateUrl: "../Views/Pages/agregar_arribo.php",
            controller:"buqueController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("estudios.detalle", {
            url:"/detalle_estudios",
            templateUrl: "../Views/Pages/table_arrivo.php",
            controller: "arriboController"
        })
        .state("detalle_estudio", {
            url:"/detalle_estudio/:id_estudio",
            templateUrl: "../Views/Pages/detalle_estudio.php",
            controller: "buqueController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("puertos", {
            url:"/puertos",
            templateUrl: "../Views/Pages/admin_puerto.php",
            controller: "puertoController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("agregar_puerto", {
            url:"/agregar_puerto",
            templateUrl: "../Views/Pages/agregar_puerto.php",
            controller:"puertoController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("modificar_puerto", {
            url:"/modificar_puerto/:id_puerto",
            templateUrl: "../Views/Pages/modificar_puerto.php",
            controller: "puertoController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
         .state("eliminar_puerto", {
            url:"/eliminar_puerto/:id_puerto/:eliminar",
            //templateUrl: "../Views/Pages/eliminar_puerto.php",
            controller: "puertoController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("agencias", {
            url:"/agencias",
            templateUrl: "../Views/Pages/admin_agencias.php",
            controller: "agenciaController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("agregar_agencias", {
            url:"/agregar_agencias",
            templateUrl: "../Views/Pages/agregar_agencia.php",
            controller: "agenciaController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("modificar_agencia", {
            url:"/modificar_agencia/:id_agencia",
            templateUrl: "../Views/Pages/modificar_agencia.php",
            controller: "agenciaController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
         .state("eliminar_agencia", {
            url:"/eliminar_agencia/:id_agencia/:eliminar",
            //templateUrl: "../Views/Pages/eliminar_puerto.php",
            controller: "agenciaController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("buques", {
            url:"/buques",
            templateUrl: "../Views/Pages/admin_buques.php",
            controller: "buqueController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("agregar_buque", {
            url:"/agregar_buque",
            templateUrl: "../Views/Pages/agregar_buque.php",
            controller: "buquesctr",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("modificar_buque", {
            url:"/modificar_buque/:id_buque",
            templateUrl: "../Views/Pages/modificar_buque.php",
            controller: "buquesctr",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
         .state("eliminar_buque", {
            url:"/eliminar_buque/:id_buque/:eliminar",
            //templateUrl: "../Views/Pages/eliminar_puerto.php",
            controller: "buquesctr",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("estadisticas", {
           url:"/estadisticas",
           templateUrl: "../Views/Pages/admin_estadisticas.php",
           controller: "estadisticasController",
           resolve: {
             urlbase: function () {
               return baseUrl;
             }
           }
       })
        
         .state("usuarios", {
            url:"/usuarios",
            templateUrl: "../Views/Pages/usuarios.php",
            controller: "usuarioController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("agregar_usuario", {
            url:"/agregar_usuario",
            templateUrl: "../Views/Pages/agregar_usuario.php",
            controller:"usuarioController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("modificar_usuario", {
            url:"/modificar_usuario/:id_usuario",
            templateUrl: "../Views/Pages/modificar_usuario.php",
            controller: "usuarioController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
         .state("eliminar_usuario", {
            url:"/eliminar_usuario/:id_usuario/:eliminar",
            //templateUrl: "../Views/Pages/eliminar_puerto.php",
            controller: "usuarioController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
});



//config routes
// myApp.config(function($routeProvider) {
//             // $urlRouteProvider.otherwise('/inicio');
//
//             // route for the home page
//             $routeProvider
//
//             .otherwise({redirectTo: '/inicio'})
//             .when('/', {
//                 templateUrl : '../Views/Pages/home.php'
//             })
//
//             .when('/inicio', {
//                 templateUrl : '../Views/Pages/home.php'
//             })
//
//             // route for the about page
//             .when('/estudios', {
//                 templateUrl : '../Views/Pages/navbar_estudios.php',
//                 controller  : 'formularioController'
//             })
//
//             // route for the contact page
//             .when('/contact', {
//                 templateUrl : 'pages/contact.html',
//                 controller  : 'contactController'
//             });
// });
