'use strict';

describe('Controller: LoginbtnCtrl', function () {

  // load the controller's module
  beforeEach(module('letsMeetApp'));

  var LoginbtnCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    LoginbtnCtrl = $controller('LoginbtnCtrl', {
      $scope: scope
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(scope.awesomeThings.length).toBe(3);
  });
});
