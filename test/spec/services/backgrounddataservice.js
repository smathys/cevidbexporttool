'use strict';

describe('Service: BackgroundDataService', function () {

  // load the service's module
  beforeEach(module('ceviDbExportToolApp'));

  // instantiate service
  var backgroundDataService;
  beforeEach(inject(function (_backgroundDataService_) {
    backgroundDataService = _backgroundDataService_;
  }));

  it('should do something', function () {
    expect(!!backgroundDataService).toBe(true);
  });

});
