myApp.controller('usuarioController',['$scope','$http','urlbase','$stateParams', '$window', function($scope,$http,urlbase,$stateParams,$window){
  //$scope.title = title;

    console.log($stateParams);
  if ($stateParams.id_usuario === undefined) {
    $http({
    method: 'GET',
    url: urlbase+'usuarios/'
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
    url: urlbase+'usuarios/'+$stateParams.id_usuario
  }).then(function successCallback(response) {
      alert("Usuario eliminado exitosamente");
      $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/usuarios";
    }, function errorCallback(response) {
      console.log(response.statusText);
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });
    }else{
      $http({
      method: 'GET',
      url: urlbase+'Usuarios/'+$stateParams.id_usuario
    }).then(function successCallback(response) {
        $scope.posts = response.data[0];
      }, function errorCallback(response) {
        console.log(response.statusText);
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });
    }
  }

 /*$scope.submit = function() {

         // $scope.list.push(this.text);
          // $scope.text = '';
          console.log(this.data);
          $http({
            method: 'POST',
            url: urlbase+'usuarios/',
            data: this.data
          }).then(function successCallback(response) {
              //console.log(response.statusText);
              alert("usuario registrado exitosamente");
              $window.location.href ="http://107.180.66.98:90/SAO/Views/#/usuarios";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });
       };*/


 $scope.submit = function() {



         if ($stateParams.id_usuario=== undefined) {
           // $scope.list.push(this.text);
          // $scope.text = '';
          console.log(this.data);
          $http({
            method: 'POST',
            url: urlbase+'usuarios/',
            data: this.data
          }).then(function successCallback(response) {
              //console.log(response.statusText);
              alert("Usuario registrado exitosamente");
              $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/usuarios";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

         }else{

          // $scope.list.push(this.text);
          // $scope.text = '';
          console.log("actualizar");
          console.log(this.posts);
          $http({
            method: 'PUT',
            url: urlbase+'usuarios/'+this.posts.ID_usuario,
            data: this.posts
          }).then(function successCallback(response) {
              // console.log(response.statusText);
              alert("Usuario modificado exitosamente");
              //$window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/usuarios";
              $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/usuarios";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

         };
      };


}]);
