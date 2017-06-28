myApp.controller('agenciaController',['$scope','$http','urlbase','$stateParams','$window', function($scope,$http,urlbase,$stateParams,$window){
  //$scope.title = title;

    // console.log($stateParams.id_puerto);
  if ($stateParams.id_agencia === undefined) {
    $http({
    method: 'GET',
    url: urlbase+'agencias/'
  }).then(function successCallback(response) {
      $scope.posts = response.data;
    }, function errorCallback(response) {
      console.log(response.statusText);
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });

  }else{
    // console.log($stateParams.eliminar);
    if ($stateParams.eliminar === "1") {
        console.log("eliminar");
        $http({
      method: 'DELETE',
      url: urlbase+'agencias/'+$stateParams.id_agencia
    }).then(function successCallback(response) {
        alert("Agencia eliminada exitosamente");
        $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/agencias";
      }, function errorCallback(response) {
        console.log(response.statusText);
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });
    }else{
      // console.log("entro en el if");
      $http({
      method: 'GET',
      url: urlbase+'agencias/'+$stateParams.id_agencia
    }).then(function successCallback(response) {
        $scope.posts = response.data[0];
        // console.log($scope.posts);
      }, function errorCallback(response) {
        console.log(response.statusText);
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });
    }

  }

   $scope.submit = function() {



         if ($stateParams.id_agencia === undefined) {
           // $scope.list.push(this.text);
          // $scope.text = '';
          console.log(this.data);
          $http({
            method: 'POST',
            url: urlbase+'agencias/',
            data: this.data
          }).then(function successCallback(response) {
              //console.log(response.statusText);
              alert("Agencia registrado exitosamente");
              $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/agencias";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

         }else{

          // $scope.list.push(this.text);
          // $scope.text = '';
          console.log("actualizar");
          console.log(this.post);
          $http({
            method: 'PUT',
            url: urlbase+'agencias/'+this.posts.ID_agencia,
            data: this.post
          }).then(function successCallback(response) {
              //console.log(response.statusText);
              alert("Agencia modificado exitosamente");
              $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/agencias";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

         };
      };
}]);
