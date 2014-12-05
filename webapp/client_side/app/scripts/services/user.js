'use strict';

/**
 * @ngdoc service
 * @name letsMeetApp.User
 * @description
 * # User
 * Service in the letsMeetApp.
 */
angular.module('letsMeetApp')
    .factory('User', ['$http',
        function($http) {
            var User = {};

            User.Auth = function(username, password) {
                return $http({
                    method: 'POST',
                    url: 'api/auth.php',
                    data: {
                        'm': 'email', // method
                        'u': username,
                        'p': password
                    }
                });
            };

            return User;
        }
    ]);