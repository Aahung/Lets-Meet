'use strict';

/**
 * @ngdoc function
 * @name letsMeetApp.controller:LoginbtnCtrl
 * @description
 * # LoginbtnCtrl
 * Controller of the letsMeetApp
 */
angular.module('letsMeetApp')
    .controller('LoginbtnCtrl', function($scope, $rootScope, $location) {
        if ($rootScope.userId) $scope.loginBtn = $rootScope.userAlias;
        else $scope.loginBtn = "Log in";
        $rootScope.$watch('userId', function() {
            if ($rootScope.userId) $scope.loginBtn = $rootScope.userAlias;
            else $scope.loginBtn = "Log in";
        });
    });