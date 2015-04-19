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

  });
