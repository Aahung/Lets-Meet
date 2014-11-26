'use strict';

describe('Service: Option', function () {

  // load the service's module
  beforeEach(module('letsMeetApp'));

  // instantiate service
  var Option;
  beforeEach(inject(function (_Option_) {
    Option = _Option_;
  }));

  it('should do something', function () {
    expect(!!Option).toBe(true);
  });

});
