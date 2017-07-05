myApp.controller('estadisticasController', ['$scope', '$http', 'urlbase', '$stateParams', '$window', '$rootScope', function($scope, $http, urlbase, $stateParams, $window, $rootScope) {

    var puertos = [];
    var buques = [];
    var estadisticas_salinidad=[];
    var estadisticas_temperatura=[];
    var estadisticas_conductividad=[];
    var estadisticas_ph=[];
    var estadisticas=[];
    var cont=0;

    $("#graficas").hide();
    $("#graficas2").hide();
    $("#btn_consultar_puerto").hide();
    $("#btn_consultar_buque").hide();
    $(".bloquear").hide();
    $(".fecha_puerto").hide();
    $(".fecha_buque").hide();


$('#optionsRadios1').click(function() {
        $("#graficas2").hide();
        $(".fecha_puerto").show();
        $("#btn_consultar_puerto").show();
        $(".fecha_buque").hide();
        $("#btn_consultar_buque").hide();
        $(".bloquear").hide();

        $('#btn_consultar_puerto').click(function(){


            cont++;
      var checked = $(this).attr('checked', true);
      if(checked){
        console.log("checked");
        $http({
            method: 'GET',
            url: urlbase + 'puertos/'
        }).then(function successCallback(datapuerto) {
            for (var i = 0; i < datapuerto.data.length; i++) {
                //console.log('Data estadisticas:'+datapuerto.data.length);
                $scope.puertos = datapuerto.data[i].ID_puerto;
                puertos.push($scope.puertos);

            }
            //console.log(puertos);
            for (var j =0; j < datapuerto.data.length; j++) {

                f1=$("#f1p").val();
                f2=$("#f2p").val();

                ruta='estadisticas/'+puertos[j]+'/'+f1+'/'+f2;
                //console.log('RUTA='+ruta);

                $http({
                    method: 'GET',
                   // url: urlbase + 'estadisticas/'+puertos[j]+'/'+f1+'/'+f2
                   url: urlbase + ruta
                }).then(function successCallback(databuques) {


                                        for (var i = 0; i < databuques.data.length; i++) {
                                            //console.log('Data estadisticas:'+datapuerto.data.length);
                                            $scope.puerto = databuques.data[i].Nombre_puerto;
                                            $scope.salinidad = databuques.data[i].salinidad;
                                            $scope.temperatura = databuques.data[i].temperatura;
                                            $scope.conductividad = databuques.data[i].conductividad;
                                            $scope.ph = databuques.data[i].ph;
                                            if (($.isNumeric($scope.salinidad)) && (cont===1)) {
                                              console.log($.isNumeric($scope.salinidad));
                                            estadisticas.push($scope.puerto);
                                            estadisticas_salinidad.push($scope.salinidad);
                                            estadisticas_temperatura.push($scope.temperatura);
                                            estadisticas_conductividad.push($scope.conductividad);
                                            estadisticas_ph.push($scope.ph);
                                          }
                                              $rootScope.estadisticas=estadisticas;
                                              $rootScope.estadisticas_salinidad=estadisticas_salinidad;
                                              $rootScope.estadisticas_temperatura=estadisticas_temperatura;
                                              $rootScope.estadisticas_conductividad=estadisticas_conductividad;
                                              $rootScope.estadisticas_ph=estadisticas_ph;




                                        }

                    $("#graficas").show();
                })
            }
        })
        //fin de httprequest
      }

        });
      
    });

//##################### INICIO TODOS LOS BUQUES ##############

 $('#optionsRadios2').click(function() {
    $("#graficas").hide();
    $(".fecha_puerto").hide();
    $(".fecha_buque").show();
    $("#btn_consultar_puerto").hide();
    $("#btn_consultar_buque").show();
    $(".bloquear").hide();

    $("#btn_consultar_buque").click(function(){
        cont++;
      var checked = $(this).attr('checked', true);
      if(checked){
        console.log("checked");
        $http({
            method: 'GET',
            url: urlbase + 'arribos/'
        }).then(function successCallback(databuque) {
            for (var i = 0; i < databuque.data.length; i++) {
                //console.log('Data estadisticas:'+datapuerto.data.length);
                $scope.buques = databuque.data[i].ID_buque;
                buques.push($scope.buques);
            }
            //console.log(buques);
            for (var j =0; j < databuque.data.length; j++) {
                f1b=$("#f1b").val();
                f2b=$("#f2b").val();

                ruta_buque='estadisticas/estabuques/'+buques[j]+'/'+f1b+'/'+f2b;
                $http({
                    method: 'GET',
                    url: urlbase + ruta_buque
                }).then(function successCallback(databuques) {
                    for (var i = 0; i < databuques.data.length; i++) {
                        //console.log('Data estadisticas:'+datapuerto.data.length);
                        $scope.buque = databuques.data[i].Nombre_buque;
                        $scope.salinidad = databuques.data[i].salinidad;
                        $scope.temperatura = databuques.data[i].temperatura;
                        $scope.conductividad = databuques.data[i].conductividad;
                        $scope.ph = databuques.data[i].ph;
                        /*console.log('Nombre_buque= '+$scope.buque);
                        console.log('salinidad= '+$scope.salinidad);
                        console.log('temperatura= '+$scope.temperatura);
                        console.log('conductividad= '+$scope.conductividad);
                        console.log('ph= '+$scope.ph);*/

                         if (($.isNumeric($scope.salinidad)) && (cont===1)) {
                            //console.log($.isNumeric($scope.salinidad));
                            estadisticas.push($scope.buque);
                            estadisticas_salinidad.push($scope.salinidad);
                            estadisticas_temperatura.push($scope.temperatura);
                            estadisticas_conductividad.push($scope.conductividad);
                            estadisticas_ph.push($scope.ph);
                        }
                        $rootScope.estadisticas=estadisticas;
                        $rootScope.estadisticas_salinidad=estadisticas_salinidad;
                        $rootScope.estadisticas_temperatura=estadisticas_temperatura;
                        $rootScope.estadisticas_conductividad=estadisticas_conductividad;
                        $rootScope.estadisticas_ph=estadisticas_ph;




                                        }

                    $("#graficas2").show();
                })
            }
        })
        //fin de httprequest
      }
        });
         
    });

//##################### FIN TDOOS LOS BUQUES ##################
$('#optionsRadios3').click(function() {
    $("#graficas").hide();
    $("#graficas2").hide();
    $(".fecha_puerto").hide();
    $(".fecha_buque").hide();
    $("#btn_consultar_buque").hide();
    $("#btn_consultar_buque").hide();
    $(".bloquear").show();

    $("#btn_consultar_detalle").click(function(){
        cont++;
      var checked = $(this).attr('checked', true);
      if(checked){
        console.log("checked");
        
                f1d=$("#f1d").val();
                f2d=$("#f2d").val();
                idb=$("#buque").val();
                idp=$("#puerto").val();


             
                ruta_detalle='estadisticas/detalle/'+idb+'/'+f1d+'/'+f2d+'/'+idp;
                console.log(ruta_detalle);
                $http({
                    method: 'GET',
                    url: urlbase + ruta_detalle
                }).then(function successCallback(databuques) {
                    for (var i = 0; i < databuques.data.length; i++) {
                        //console.log('Data estadisticas:'+datapuerto.data.length);
                        $scope.buque = databuques.data[i].Nombre_buque;
                        $scope.salinidad = databuques.data[i].salinidad;
                        $scope.temperatura = databuques.data[i].temperatura;
                        $scope.conductividad = databuques.data[i].conductividad;
                        $scope.ph = databuques.data[i].ph;
                        console.log('Nombre_buque= '+$scope.buque);
                        console.log('salinidad= '+$scope.salinidad);
                        console.log('temperatura= '+$scope.temperatura);
                        console.log('conductividad= '+$scope.conductividad);
                        console.log('ph= '+$scope.ph);

                         if (($.isNumeric($scope.salinidad)) && (cont===1)) {
                            //console.log($.isNumeric($scope.salinidad));
                            estadisticas.push($scope.buque);
                            estadisticas_salinidad.push($scope.salinidad);
                            estadisticas_temperatura.push($scope.temperatura);
                            estadisticas_conductividad.push($scope.conductividad);
                            estadisticas_ph.push($scope.ph);
                        }
                        $rootScope.estadisticas=estadisticas;
                        $rootScope.estadisticas_salinidad=estadisticas_salinidad;
                        $rootScope.estadisticas_temperatura=estadisticas_temperatura;
                        $rootScope.estadisticas_conductividad=estadisticas_conductividad;
                        $rootScope.estadisticas_ph=estadisticas_ph;




                                        }

                    $("#graficas2").show();
                })
      }
        });
  
});

$('#btn_reiniciar').click(function() {
  location.reload();
});



//get puertos for selectedPuerto
$http({
  method: 'GET',
  url: urlbase+'puertos'
}).then(function successCallback(response) {
    $scope.posts = response.data;
    // console.log("estudio  ");
    console.log("update");

  }, function errorCallback(response) {
    console.log(response.statusText);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
});
//get buque for selectedBuque
$http({
  method: 'GET',
  url: urlbase+'buques'
}).then(function successCallback(response) {
    $scope.posts1 = response.data;
    // console.log("estudio  ");
   // console.log("update");

  }, function errorCallback(response) {
    console.log(response.statusText);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
});
//Puertos --------------------------------------------------------------------------------------------

   $rootScope.$watch('estadisticas', function() {
        $scope.estadisticas=$rootScope.estadisticas;
        //console.log('Puertos:');
        //console.log($scope.estadisticas_puerto);
        $scope.labels = $scope.estadisticas;
    })


//Salinidad ----------------------------------------------------------------------------------------
   $rootScope.$watch('estadisticas_salinidad', function() {
        $scope.estadisticas_salinidad=$rootScope.estadisticas_salinidad;
        $scope.datas_salinidad = [$scope.estadisticas_salinidad];
        //console.log('Salinidad:');
        //console.log($scope.estadisticas_puerto);
        //console.log('valor maximoooo');
        //console.log(Math.max($scope.datas_salinidad));

    })

//Temperatura --------------------------------------------------------------------------------------------
    $rootScope.$watch('estadisticas_temperatura', function() {
        $scope.estadisticas_temperatura=$rootScope.estadisticas_temperatura;
        $scope.datas_temperatura = [$scope.estadisticas_temperatura];

    })


//Ph -----------------------------------------------------------------------------------------------------
 $rootScope.$watch('estadisticas_ph', function() {
        $scope.estadisticas_ph=$rootScope.estadisticas_ph;
        $scope.datas_ph = [$scope.estadisticas_ph];
        $scope.opt_ph = {
            scales: {
                xAxes: [{
                    id: 'x-axis-1',
                    type: 'linear',
                    ticks: {
                        min: 0,
                        max: 7
                    }
                }]
            },
        };
    })


//Conducntividad ------------------------------------------------------------------------------
    $rootScope.$watch('estadisticas_conductividad', function() {
            $scope.estadisticas_conductividad=$rootScope.estadisticas_conductividad;
            $scope.datas_conductividad = [$scope.estadisticas_conductividad];

        })

    //Metros cubicos deslastrados --------------------------------------------------------------
    /*$scope.datas_mtsdeslastrados = [
        [1.83, 2.14, 1.875, 1.69, 1.62]
    ];
    $scope.opt_mtsdeslastrados = {
        scales: {
            xAxes: [{
                id: 'x-axis-1',
                type: 'linear',
                ticks: {
                    min: 0,
                    max: 60
                }
            }]
        },
    };*/


    $scope.colors = ['#2d5035'];

}]);


