'use strict';

/**
 * @ngdoc function
 * @name letsMeetApp.controller:LoginCtrl
 * @description
 * # LoginCtrl
 * Controller of the letsMeetApp
 */
angular.module('letsMeetApp')
  .controller('LoginCtrl', function ($scope, User, $location, $rootScope) {
    if ($rootScope.userId) {
        $location.path('/user/' + $rootScope.userId);
    }
    $scope.login = function() {
        var username = $scope.userName;
        var password = $scope.userPass;
        User.Auth(username, password)
            .success(function(res) {
                if (res.success == 1) {
                    $location.path('/user/' + res.id);
                    $rootScope.userId = res.id;
                    $rootScope.userAlias = res.alias;
                } else {
                    window.alert('fail to log in.');
                }
                console.log(res);
            }).error(function(err) {
                window.alert('fail to log in: ' + err);
                console.log(err);
            });
    }
  });
