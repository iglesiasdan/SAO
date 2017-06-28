myApp.controller('arriboController',['$scope','$http','urlbase', function($scope,$http,urlbase){
  //$scope.title = title;

     //console.log(urlbase);
  $http({
    method: 'GET',
    url: urlbase
  }).then(function successCallback(response) {
      $scope.posts = response.data;
    }, function errorCallback(response) {
      console.log(response.statusText);
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });
}]);
