myApp.controller('buqueController',['$scope','$http','urlbase','$stateParams','$rootScope','$window','$anchorScroll','fileUpload', function($scope,$http,urlbase,$stateParams,$rootScope,$window,$document,$anchorScroll,fileUpload){
  //$scope.title = title;
  // var uploader = $scope.uploader = new FileUploader({
  //     url: 'upload.php'
  // });


  //consulta buques
  //console.log($stateParams);
  $scope.id_estudio = $stateParams.id_estudio;
  this.data = {};
  if($stateParams.id_estudio === undefined){
    console.log("id estudio vacio");
    $http({
    method: 'GET',
    url: urlbase+'buques/'
    }).then(function successCallback(response) {
      $scope.posts = response.data;
      $rootScope.post3 = response.data;
    }, function errorCallback(response) {
      console.log(response.statusText);
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });
    //puertos
    $http({
    method: 'GET',
    url: urlbase+'puertos/'
    }).then(function successCallback(response) {
      //$scope.posts = response.data;
      $rootScope.post4 = response.data;
    }, function errorCallback(response) {
      console.log(response.statusText);
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });
    //agencias
    $http({
    method: 'GET',
    url: urlbase+'agencias/'
    }).then(function successCallback(response) {
      // $scope.posts = response.data;
      $rootScope.post5 = response.data;
    }, function errorCallback(response) {
      console.log(response.statusText);
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });
    //whatch for getting posts to scope
    $rootScope.$watch('post3',function(){
      console.log("buque "+$rootScope.post3);
      $scope.posts3=$rootScope.post3;
    })
    $rootScope.$watch('post4',function(){
      //console.log("puerto");
      $scope.posts4=$rootScope.post4;
    })
    $rootScope.$watch('post5',function(){
      //console.log("puerto");
      $scope.posts5=$rootScope.post5;
    })


}else{






$http({
  method: 'GET',

  url: urlbase+'buques/'+$stateParams.id_estudio
}).then(function successCallback(response) {
    $scope.posts = response.data[0];
    $rootScope.selectedBuque = response.data[0];

    // console.log("buque  ");
    // console.log(response.data[0]);
    //----------------------consulta de buque------------
    $http({
      method: 'GET',
      url: urlbase+'arribos/'+response.data[0].ID_buque
    }).then(function successCallback(response) {
        $scope.posts1 = response.data[0];

        response.data.Fecha = new Date(response.data.Fecha_arribo);
        $rootScope.post1=response.data;
        $rootScope.selectedPuerto = response.data;
        $rootScope.selectedAgencia = response.data;
        //---------------estudios del arribo----------------------------
        $http({
          method: 'GET',
          url: urlbase+'estudios/arribo/'+response.data.ID_arribo
        }).then(function successCallback(response) {
            $scope.posts2 = response.data[0];
            // console.log("estudio  ");
            // console.log(response.data[0]);
            $rootScope.selectedtanque = "";
            // response.data.id_estudio.push(0);
            // response.data.N_tanque.push('Seleccionar No. Tanque');
            var acumAct=null;
            var acumSal=null;
            var acumTem=null;
            var acumCond=null;
            var acumPh=null;
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
            promedios.acti=acumAct;
            promedios.sal=acumSal;
            promedios.tem=acumTem;
            promedios.con=acumCond;
            promedios.ph=acumPh
            $rootScope.post2=response.data;
            $rootScope.prom = promedios;
          }, function errorCallback(response) {
            console.log(response.statusText);
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
        //final de consultar estudio de tanque
        $http({
          method: 'GET',
          url: urlbase+'buques'
        }).then(function successCallback(response) {
            $rootScope.post3=response.data;
          }, function errorCallback(response) {
            console.log(response.statusText);
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
        $http({
          method: 'GET',
          url: urlbase+'puertos'
        }).then(function successCallback(response) {
            $rootScope.post4=response.data;
          }, function errorCallback(response) {
            console.log(response.statusText);
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
        $http({
          method: 'GET',
          url: urlbase+'agencias'
        }).then(function successCallback(response) {
            $rootScope.post5=response.data;
          }, function errorCallback(response) {
            console.log(response.statusText);
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
        //--------------------------------------------
        $rootScope.$watch('prom',function(){
          //console.log($rootScope.prom);
          $scope.prom=$rootScope.prom;
        })
        $rootScope.$watch('post1',function(){
          //console.log($rootScope.post1);
          $scope.posts1=$rootScope.post1;
        })
        $rootScope.$watch('post2',function(){
          //console.log("puerto");
          $scope.posts2=$rootScope.post2;
        })
        $rootScope.$watch('post3',function(){
          //console.log("puerto");
          $scope.posts3=$rootScope.post3;
        })
        $rootScope.$watch('post4',function(){
          //console.log("puerto");
          $scope.posts4=$rootScope.post4;
        })
        $rootScope.$watch('post5',function(){
          //console.log("puerto");
          $scope.posts5=$rootScope.post5;
        })
        $rootScope.$watch('selectedBuque',function(){
          // console.log($rootScope.selectedBuque);
          $scope.selectedBuque=$rootScope.selectedBuque;
        })
        $rootScope.$watch('selectedPuerto',function(){
          // console.log($rootScope.selectedBuque);
          $scope.selectedPuerto=$rootScope.selectedPuerto;
        })
        $rootScope.$watch('selectedAgencia',function(){
          // console.log($rootScope.selectedBuque);
          $scope.selectedAgencia=$rootScope.selectedAgencia;
        })
        $rootScope.$watch('selectedtanque',function(){
          // console.log($rootScope.selectedBuque);
          $scope.selectedtanque=$rootScope.selectedtanque;
        })
        // angular.forEach(sexo, function(value, key) {
        //   console.log(key + ': ' + value);
        // });
      }, function errorCallback(response) {
        console.log(response.statusText);
        // called asynchronously if an error occurs
        // or server returns response with an error status.

    });
    //---------------estudios del arribo----------------- *227 reportar robo de equipos ccg




  }, function errorCallback(response) {
    console.log(response.statusText);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
});
}
  $scope.submit2 = function(){
    //alert('hola');
    var mes = this.posts1.Fecha.getMonth();
    mes++;
    var fecha = new Date(this.posts1.Fecha.getFullYear(),mes,this.posts1.Fecha.getDate());
    var json = {};
    json["id_buque"] = this.selectedBuque.ID_buque;
    json["id_puerto"] = this.selectedPuerto.ID_puerto;
    json["id_agencia"] = this.selectedAgencia.ID_agencia;
    json["fecha_arribo"] = fecha;
    json["calado_proa"] = this.posts1.Calado_proa;
    json["calado_popa"] = this.posts1.Calado_popa;
    json["diferencias_calado"] = this.posts1.Diferencias_calado;
    json["observaciones"] = this.posts1.Observaciones;
    // var str = json["Fecha_arribo"];
    // var res = str.split("T");
    // json["Fecha_arribo"] = res[0];
    console.log(json);
    console.log($stateParams.id_estudio);

    if ($stateParams.id_estudio === undefined) {
      // console.log(this.posts1.Fecha)
      // console.log("estamos agregando vainas");
      console.log(json);

      $http({
        method: 'POST',
        url: urlbase+'arribos/',
        data: json
      }).then(function successCallback(response) {
          //console.log(response.statusText);
          $window.location.reload(true);
          alert("Arribo agregado exitosamente");
          $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/estudios/";
        }, function errorCallback(response) {
          console.log(response.statusText);
          // called asynchronously if an error occurs
          // or server returns response with an error status.
        });



    }else{

      json["ID_arribo"] = parseInt($stateParams.id_estudio);
      $http({
        method: 'PUT',
        url: urlbase+'arribos/'+parseInt($stateParams.id_estudio),
        data: json
      }).then(function successCallback(response) {
          //console.log(response.statusText);
          $window.location.reload(true);
          alert("Arribo modificado exitosamente");
          $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/estudios/";
        }, function errorCallback(response) {
          console.log(response.statusText);
          // called asynchronously if an error occurs
          // or server returns response with an error status.
        });
    }


  }
  // consulta arribos
  $scope.submit = function(){
    var count = 0;
            angular.forEach(this.selectedtanque, function(val) {
                count ++;
            });


    if (count < 9) {
      console.log($stateParams);

       this.selectedtanque['ID_arribo'] = $stateParams.id_estudio;
       this.selectedtanque['ID_usuario'] = 3;
       console.log(this.selectedtanque);
      $http({
        method: 'POST',
        url: urlbase+'estudios/',
        data: this.selectedtanque
      }).then(function successCallback(response) {
          console.log(response.statusText);
          // console.log("http://107.180.66.98:90/SAO/Views/#/detalle_estudio/"+$stateParams.id_estudio);
          // $window.location.href ="http://107.180.66.98:90/SAO/Views/#/detalle_estudio/"+$stateParams.id_estudio;
          $scope.onChange();
          alert("Estudio registrado exitosamente");
        }, function errorCallback(response) {
          console.log(response.statusText);
          // called asynchronously if an error occurs
          // or server returns response with an error status.
      });
      // fin de la consulta http
    }else {




    $http({
      method: 'PUT',
      url: urlbase+'estudios/'+this.selectedtanque.ID_estudio,
      data: this.selectedtanque
    }).then(function successCallback(response) {
        // console.log(response);
        //var url=$stateParams.id_estudio;
        // $window.location.hash='tanquesito';
        // var llave = $scope.onChange();
        $window.location.reload(true);
        console.log($window.location.href);
        $rootScope.selectedtanque = response.config.data;


        // console.log($scope.hasTag($rootScope.posts2,response.config.data.ID_estudio));
        // var llave = $scope.getObject($scope.posts2,response.config.data,'ID_estudio',response.config.data.ID_estudio);
        // console.log(llave);
        alert("Estudio actualizado exitosamente");
        $rootScope.$watch('selectedtanque',function(){
          // console.log($rootScope.selectedBuque);
          $scope.selectedtanque=$rootScope.selectedtanque;
        })
        $rootScope.$watch('posts2',function(){
          console.log("estudios");
          // console.log($rootScope.posts2);
          this.posts2=$rootScope.posts2;
          console.log($scope.posts2);
        })
      }, function errorCallback(response) {
        console.log(response.statusText);
    });
    //fin de actualizar el estudio


    // $scope.hasTag = function(tags,tagName) {
    //   var count = 0;
    //           angular.forEach(this.selectedtanque, function(val) {
    //               count ++;
    //           });
    //   var i = null;
    // 	for (i = 0; con > i; i += 1) {
    // 		if (tags[i].ID_estudio === tagName) {
    //       console.log(i);
    //       return true;
    // 		}
    // 	}
    //
    // 	return false;
    // };

    // $scope.getObject = function getObjects(obj, selobj, key, val) {
    //   var objects = [];
    //   for (var i in obj) {
    //       if (!obj.hasOwnProperty(i)) continue;
    //       if (typeof obj[i] == 'object') {
    //           objects = objects.concat(getObjects(obj[i], selobj, key, val));
    //       } else if (i == key && obj[key] == val) {
    //           objects.push(selobj);
    //           console.log(obj);
    //       }
    //   }
    //   return objects;
    // }
}
}
$scope.gotoBottom = function() {
  // set the location.hash to the id of
  // the element you wish to scroll to.
  $location.hash('tanquesito');

  // call $anchorScroll()
  $anchorScroll();
};
    $scope.onChange = function(){
      // $scope.gotoBottom();
      $http({
        method: 'GET',

        url: urlbase+'buques/'+$stateParams.id_estudio
      }).then(function successCallback(response) {
          $scope.posts = response.data[0];
          $rootScope.selectedBuque = response.data[0];
          // console.log("buque  ");
          // console.log(response.data[0]);
          //----------------------consulta de buque------------
          $http({
            method: 'GET',
            url: urlbase+'arribos/'+response.data[0].ID_buque
          }).then(function successCallback(response) {
              $scope.posts1 = response.data[0];
              // console.log("arribo  ");
              // console.log(response.data);
              response.data.Fecha = new Date(response.data.Fecha_arribo);
              $rootScope.posts1=response.data;
              //---------------estudios del arribo----------------------------
              $http({
                method: 'GET',
                url: urlbase+'estudios/arribo/'+response.data.ID_arribo
              }).then(function successCallback(response) {
                  $scope.posts2 = response.data;
                  // console.log("estudio  ");
                  console.log("update");
                  // $rootScope.selectedtanque = "";
                  // response.data.id_estudio.push(0);
                  // response.data.N_tanque.push('Seleccionar No. Tanque');
                  var acumAct=null;
                  var acumSal=null;
                  var acumTem=null;
                  var acumCond=null;
                  var acumPh=null;
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
                  promedios.acti=acumAct;
                  promedios.sal=acumSal;
                  promedios.tem=acumTem;
                  promedios.con=acumCond;
                  promedios.ph=acumPh
                  $rootScope.posts2=response.data;
                  $rootScope.prom = promedios;
                }, function errorCallback(response) {
                  console.log(response.statusText);
                  // called asynchronously if an error occurs
                  // or server returns response with an error status.
              });
              //final de consultar estudio de tanque
              $http({
                method: 'GET',
                url: urlbase+'buques'
              }).then(function successCallback(response) {
                  $rootScope.posts3=response.data;
                }, function errorCallback(response) {
                  console.log(response.statusText);
                  // called asynchronously if an error occurs
                  // or server returns response with an error status.
              });
              //--------------------------------------------
              $rootScope.$watch('prom',function(){
                //console.log($rootScope.prom);
                $scope.prom=$rootScope.prom;
              })
              $rootScope.$watch('posts1',function(){
                //console.log($rootScope.post1);
                $scope.posts1=$rootScope.posts1;
              })
              $rootScope.$watch('posts2',function(){
                //console.log("puerto");
                $scope.posts2=$rootScope.posts2;
              })
              $rootScope.$watch('posts3',function(){
                //console.log("puerto");
                $scope.posts3=$rootScope.posts3;
              })
              $rootScope.$watch('selectedBuque',function(){
                // console.log($rootScope.selectedBuque);
                $scope.selectedBuque=$rootScope.selectedBuque;
              })
              $rootScope.$watch('selectedtanque',function(){
                // console.log($rootScope.selectedBuque);
                $scope.selectedtanque=$rootScope.selectedtanque;
              })
              // $rootScope.$watch('selectedtanque',function(){
              //   // console.log($rootScope.selectedBuque);
              //   $scope.selectedtanque=$rootScope.selectedtanque;
              // })
              // angular.forEach(sexo, function(value, key) {
              //   console.log(key + ': ' + value);
              // });
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.

          });
          //---------------estudios del arribo----------------- *227 reportar robo de equipos ccg




        }, function errorCallback(response) {
          console.log(response.statusText);
          // called asynchronously if an error occurs
          // or server returns response with an error status.
      });
      return $rootScope.posts2;

    }

    //code for checking vector of selectedBuque
    $scope.checkQuestions = function() {
      var count = 0;
              angular.forEach(this.selectedtanque, function(val) {
                  count ++;
              });
     if (count > 0) { // your question said "more than one element"
      console.log("hola");
       return true;
      }
      else {
       return false;
      }
    };

   /* $scope.submitb = function() {
        console.log(this.data);


           if ($stateParams.id_buque=== undefined) {
             // $scope.list.push(this.text);
            // $scope.text = '';
            console.log(this.data);
            console.log($scope.myFile);
            $http({
              method: 'POST',
              url: urlbase+'buques/',
              data: this.data
            }).then(function successCallback(response) {
                //console.log(response.statusText);
                alert("Buque registrado exitosamente");
                $window.location.href ="http://107.180.66.98:90/SAO/Views/#/buques";
              }, function errorCallback(response) {
                console.log(response.statusText);
                // called asynchronously if an error occurs
                // or server returns response with an error status.
              });

           }else{

            // $scope.list.push(this.text);
            // $scope.text = '';
            console.log("actualizar");
            $http({
              method: 'PUT',
              url: urlbase+'buques/'+this.posts.ID_buque,
              data: this.data


            }).then(function successCallback(response) {
                //console.log(response.statusText);
                alert("Buque modificado exitosamente");
                $window.location.href ="http://107.180.66.98:90/SAO/Views/#/buques";
              }, function errorCallback(response) {
                console.log(response.statusText);
                // called asynchronously if an error occurs
                // or server returns response with an error status.
              });

           };
        };*/





}]);
