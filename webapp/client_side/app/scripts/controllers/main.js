'use strict';

/**
 * @ngdoc function
 * @name letsMeetApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the letsMeetApp
 */
angular.module('letsMeetApp')
  .controller('MainCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
