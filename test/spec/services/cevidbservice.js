'use strict';

describe('Service: CeviDBService', function () {

  // load the service's module
  beforeEach(module('ceviDbExportToolApp'));

  // instantiate service
  var CeviDBService;
  beforeEach(inject(function (_CeviDBService_) {
    CeviDBService = _CeviDBService_;
  }));

  it('should do something', function () {
    expect(!!CeviDBService).toBe(true);
  });

});
