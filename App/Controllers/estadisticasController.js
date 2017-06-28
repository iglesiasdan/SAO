myApp.controller('estadisticasController', ['$scope', '$http', 'urlbase', '$stateParams', '$window', '$rootScope', function($scope, $http, urlbase, $stateParams, $window, $rootScope) {

    var puertos = [];
    var estadisticas_puerto=[];
    var estadisticas_salinidad=[];
    var estadisticas_temperatura=[];
    var estadisticas_conductividad=[];
    var estadisticas_ph=[];
    var cont=0;

     $("#graficas").hide();
    $('#optionsRadios1').click(function() {
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

                $http({
                    method: 'GET',
                    url: urlbase + 'estadisticas/'+puertos[j]
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
                                            estadisticas_puerto.push($scope.puerto);
                                            estadisticas_salinidad.push($scope.salinidad);
                                            estadisticas_temperatura.push($scope.temperatura);
                                            estadisticas_conductividad.push($scope.conductividad);
                                            estadisticas_ph.push($scope.ph);
                                          }
                                              $rootScope.estadisticas_puerto=estadisticas_puerto;
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
    console.log("update");

  }, function errorCallback(response) {
    console.log(response.statusText);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
});
//Puertos --------------------------------------------------------------------------------------------

   $rootScope.$watch('estadisticas_puerto', function() {
        $scope.estadisticas_puerto=$rootScope.estadisticas_puerto;
        //console.log('Puertos:');
        //console.log($scope.estadisticas_puerto);
        $scope.labels = $scope.estadisticas_puerto;
    })


//Salinidad ----------------------------------------------------------------------------------------
   $rootScope.$watch('estadisticas_salinidad', function() {
        $scope.estadisticas_salinidad=$rootScope.estadisticas_salinidad;
        $scope.datas_salinidad = [$scope.estadisticas_salinidad];
        //console.log('Salinidad:');
        //console.log($scope.estadisticas_puerto);
        console.log('valor maximoooo');
        console.log(Math.max($scope.datas_salinidad));

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




    /*//Obtener la lista de todos los puertos.
    var puertos = [];
    $http({
        method: 'GET',
        url: urlbase + 'puertos/'
    }).then(function successCallback(datapuerto) {
        for (var i = 0; i < datapuerto.data.length; i++) {
            //console.log('Data estadisticas:'+datapuerto.data.length);
            $scope.puertos = datapuerto.data[i].Nombre_puerto;
            puertos.push($scope.puertos);
            //Obtener la lista de todos los arribos de un buque en un puerto determinado.
            $http({
                method: 'GET',
                url: urlbase + 'estadisticas/' + datapuerto.data[i].ID_puerto
            }).then(function successCallback(dataestadisticas) {
                for (var j = 0; j < dataestadisticas.data.length; j++) {

                    //console.log('Data estadisticas:'+dataestadisticas.data.length);
                    $scope.estudio = dataestadisticas.data[j].ID_estudio;
                    $scope.buque = dataestadisticas.data[j].ID_buque;
                    $scope.arribos = dataestadisticas.data[j].ID_arribo;
                    $scope.puerto_arribo = dataestadisticas.data[j].ID_puerto;
                    var arreglo={};
                    arreglo[j]=$scope.estudio;
                    $rootScope.arreglo=arreglo;
                    console.log('Arribo: ' + $scope.arribos + ' Buque: ' + $scope.buque + ' Estudio: ' + $scope.estudio + ' Puerto: '+ $scope.puerto_arribo);

                    $http({
                        method: 'GET',
                        url: urlbase + 'buques/' + $scope.estudio
                    }).then(function successCallback(response) {
                        $scope.posts = response.data[0];
                        $rootScope.selectedBuque = response.data[0];

                        // console.log("buque  ");
                        // console.log(response.data[0]);
                        //----------------------consulta de buque------------
                        $http({
                            method: 'GET',
                            url: urlbase + 'arribos/' + $scope.buque
                        }).then(function successCallback(response) {
                            $scope.posts1 = response.data[0];
                            response.data.Fecha = new Date(response.data.Fecha_arribo);
                            $rootScope.post1 = response.data;
                            $rootScope.selectedPuerto = response.data;
                            $rootScope.selectedAgencia = response.data;
                            //---------------estudios del arribo----------------------------
                            $http({
                                method: 'GET',
                                url: urlbase + 'estudios/arribo/' + $scope.arribos
                            }).then(function successCallback(response) {
                                $scope.posts2 = response.data[0];
                                // console.log("estudio  ");
                                // console.log(response.data[0]);
                                $rootScope.selectedtanque = "";
                                // response.data.id_estudio.push(0);
                                // response.data.N_tanque.push('Seleccionar No. Tanque');
                                var acumAct = null;
                                var acumSal = null;
                                var acumTem = null;
                                var acumCond = null;
                                var acumPh = null;
                                for (var i = 0; i < response.data.length; i++) {
                                    acumAct += parseInt(response.data[i].Actividad);
                                    acumSal += parseInt(response.data[i].Salinidad);
                                    acumTem += parseInt(response.data[i].Temperatura);
                                    acumCond += parseInt(response.data[i].Conductividad);
                                    acumPh += parseInt(response.data[i].Ph);
                                }
                                acumAct /= response.data.length;
                                acumSal /= response.data.length;
                                acumTem /= response.data.length;
                                acumCond /= response.data.length;
                                acumPh /= response.data.length;


                                var promedios = {};

                                promedios.acti = acumAct;
                                promedios.sal = acumSal;
                                promedios.tem = acumTem;
                                promedios.con = acumCond;
                                promedios.ph = acumPh;
                                promedios.buque=$scope.buque;
                                promedios.puerto=$scope.puerto_arribo;
                                promedios.arribos=$scope.arribos;
                                promedios.estudio=$scope.estudio;

                                $rootScope.prom=promedios;

                            }, function errorCallback(response) {
                                //console.log(response.statusText);
                                // called asynchronously if an error occurs
                                // or server returns response with an error status.
                            });


                        });
                    });

                }
            })


        }
    })



    $rootScope.$watch('prom', function() {

        console.log(JSON.stringify($rootScope.prom));

          //$scope.prom=$rootScope.prom;
                    })

    $rootScope.$watch('arreglo', function() {

        console.log('arreglo: '+JSON.stringify($rootScope.arreglo));
          //$scope.prom=$rootScope.prom;
                    })

*/
