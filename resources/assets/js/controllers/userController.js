angular.module('userCtrl', [])
.controller('userController', ['$scope', '$http', '$location',function($scope, $http, $location) {

    $scope.doLogin = function(loginForm){
            $http({
                url: baseUrl + 'api/auth',
                method: 'POST',
                data: {
                    email: $scope.login.username,
                    password: $scope.login.password,
                }
            }).then(function (response) {
                if (response.status == '200'){
                    $location.path('/dasboard');
                    console.log(response);
                }
            });
    }
}]);