myApp.controller('buquesctr',['$scope','$http','urlbase','$stateParams','$window', function($scope,$http,urlbase,$stateParams,$window){
  //$scope.title = title;

    // console.log($stateParams.id_puerto);
  if ($stateParams.id_buque === undefined) {
    $http({
    method: 'GET',
    url: urlbase+'buques/'
  }).then(function successCallback(response) {
      $scope.data = response.data;
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
      url: urlbase+'buques/'+$stateParams.id_buque
    }).then(function successCallback(response) {
        alert("Buque eliminado exitosamente");
        $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/buques";
      }, function errorCallback(response) {
        console.log(response.statusText);
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });
    }else{
      //console.log("entro en el if");
      $http({
      method: 'GET',
      url: urlbase+'buques/'+$stateParams.id_buque
    }).then(function successCallback(response) {
        $scope.data = response.data[0];
      }, function errorCallback(response) {
        console.log(response.statusText);
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });
    }

  }

   $scope.submit = function() {


         if ($stateParams.id_buque === undefined) {
           console.log("agregar el buquesito");
               console.log(this.post);
           // $scope.list.push(this.text);
          // $scope.text = '';
          console.log(this.post);
          $http({
            method: 'POST',
            url: urlbase+'buques/',
            data: this.post
          }).then(function successCallback(response) {
              //console.log(response.statusText);
              alert("Buque registrado exitosamente");
              $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/buques";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

         }else{

          // $scope.list.push(this.text);
          // $scope.text = '';

          console.log(this.data);
          $http({
            method: 'PUT',
            url: urlbase+'buques/'+this.data.ID_buque,
            data: this.data
          }).then(function successCallback(response) {
              //console.log(response.statusText);
              alert("Buque modificado exitosamente");
              $window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/buques";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

         };
      };
}]);
