myApp.controller('puertoController',['$scope','$http','urlbase','$stateParams', '$window', function($scope,$http,urlbase,$stateParams,$window){
  //$scope.title = title;

    console.log($stateParams);
  if ($stateParams.id_puerto === undefined) {
    $http({
    method: 'GET',
    url: urlbase+'puertos/'
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
    url: urlbase+'puertos/'+$stateParams.id_puerto
  }).then(function successCallback(response) {
      alert("Puerto eliminado exitosamente");
      $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/puertos";
    }, function errorCallback(response) {
      console.log(response.statusText);
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });
    }else{
      $http({
      method: 'GET',
      url: urlbase+'puertos/'+$stateParams.id_puerto
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
            url: urlbase+'puertos/',
            data: this.data
          }).then(function successCallback(response) {
              //console.log(response.statusText);
              alert("Puerto registrado exitosamente");
              $window.location.href ="http://107.180.66.98:90/SAO/Views/#/puertos";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });
       };*/


 $scope.submit = function() {



         if ($stateParams.id_puerto=== undefined) {
           // $scope.list.push(this.text);
          // $scope.text = '';
          console.log(this.data);
          $http({
            method: 'POST',
            url: urlbase+'puertos/',
            data: this.data
          }).then(function successCallback(response) {
              //console.log(response.statusText);
              alert("Puerto registrado exitosamente");
              $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/puertos";
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
            url: urlbase+'puertos/'+this.posts.ID_puerto,
            data: this.posts
          }).then(function successCallback(response) {
              // console.log(response.statusText);
              alert("Puerto modificado exitosamente");
              $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/puertos";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

         };
      };


}]);
