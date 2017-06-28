  myApp.controller('formularioController',['$scope','$http', function($scope,$http){

    $http({
      method: 'GET',
      url: 'http://107.180.66.98:90:3000/estudios/'
    }).then(function successCallback(response) {
        $scope.posts = response.data;
      }, function errorCallback(response) {
        console.log(response.statusText);
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });
  }]);
