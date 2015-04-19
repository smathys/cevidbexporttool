'use strict';

describe('Controller: BackgroundctrlCtrl', function () {

  // load the controller's module
  beforeEach(module('ceviDbExportToolApp'));

  var BackgroundctrlCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    BackgroundctrlCtrl = $controller('BackgroundctrlCtrl', {
      $scope: scope
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(scope.awesomeThings.length).toBe(3);
  });
});
