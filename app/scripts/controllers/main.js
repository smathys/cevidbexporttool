'use strict';

/**
 * @ngdoc function
 * @name ceviDbExportToolApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the ceviDbExportToolApp
 */
angular.module('ceviDbExportToolApp')
  .controller('MainCtrl', function ($scope, CeviDBService) {
    $scope.groups = CeviDBService.searchGroups;

  });
