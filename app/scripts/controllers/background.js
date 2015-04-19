'use strict';

/**
 * @ngdoc function
 * @name ceviDbExportToolApp.controller:BackgroundctrlCtrl
 * @description
 * # BackgroundctrlCtrl
 * Controller of the ceviDbExportToolApp
 */
angular.module('ceviDbExportToolApp')
  .controller('BackgroundCtrl', function ($scope,BackgroundDataService) {

    $scope.words = BackgroundDataService.getCeviWords();
    //$('#Cevi').addClass('highlight');
    //$('#Export').addClass('highlight');
    //$('#DB').addClass('highlight');
    //$('#Tool').addClass('highlight');

  });
