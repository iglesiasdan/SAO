myApp.controller('buqueController',['$scope','$http','urlbase','$stateParams','$rootScope','$window', function($scope,$http,urlbase,$stateParams,$rootScope,$window){
  //$scope.title = title;
  $rootScope.todo=[];
  //consulta buques
  //console.log($stateParams);\
  if($stateParams.id_estudio === undefined){

     $http({
  method: 'GET',
  url: urlbase+'buques/'
  }).then(function successCallback(response) {
    $scope.posts = response.data;
  }, function errorCallback(response) {
    console.log(response.statusText);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });
 
}else{
 





   $http({
    method: 'GET',

    url: urlbase+'buques/'+$stateParams.id_estudio
  }).then(function successCallback(response) {
      $scope.posts = response.data[0];
      // console.log("buque  ");
      // console.log(response.data[0]);
      //----------------------consulta de buque------------
      $http({
        method: 'GET',
        url: urlbase+'arribos/'+response.data[0].ID_buque
      }).then(function successCallback(response) {
          $scope.posts1 = response.data[0];
          console.log("arribo  ");
          console.log(response.data);
          response.data.Fecha = new Date(response.data.Fecha_arribo);
          $rootScope.post1=response.data;
          //---------------estudios del arribo----------------------------
          $http({
            method: 'GET',
            url: urlbase+'estudios/arribo/'+response.data.ID_arribo
          }).then(function successCallback(response) {
              $scope.posts2 = response.data[0];
              console.log("estudio  ");
              console.log(response.data[0]);
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
  // consulta arribos
  $scope.submit = function() {
      console.log(this.data);


         if ($stateParams.id_buque=== undefined) {
           // $scope.list.push(this.text);
          // $scope.text = '';
          console.log(this.data);
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
            data: this.posts
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
      };


}]);
