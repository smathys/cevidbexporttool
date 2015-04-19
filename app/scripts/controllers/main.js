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

    CeviDBService.searchAllMyGroups().then(function (res) {
      console.log('success');
      $scope.groups = res;
    }, function (error) {
      console.log('An error occurred!', error);
      $scope.isErrorOccured = true;
      $scope.errorMsg = "An error occurred! (" + error + ")";
      //TODO: Do DOM Manipulation in Directives
      $('#error').addClass('bg-danger');
    });

    $scope.checkAll = function () {
      if ($scope.selectedAll) {
        $scope.selectedAll = true;
      } else {
        $scope.selectedAll = false;
      }
      angular.forEach($scope.groups, function (group) {
        group.Selected = $scope.selectedAll;
      });

    };

  });
