'use strict';

/**
 * @ngdoc function
 * @name letsMeetApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the letsMeetApp
 */
angular.module('letsMeetApp')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
