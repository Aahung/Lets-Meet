'use strict';

describe('Service: Meet', function () {

  // load the service's module
  beforeEach(module('letsMeetApp'));

  // instantiate service
  var Meet;
  beforeEach(inject(function (_Meet_) {
    Meet = _Meet_;
  }));

  it('should do something', function () {
    expect(!!Meet).toBe(true);
  });

});
