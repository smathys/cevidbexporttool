'use strict';

/**
 * @ngdoc function
 * @name ceviDbExportToolApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the ceviDbExportToolApp
 */
angular.module('ceviDbExportToolApp')
  .controller('MainCtrl', function ($scope, $location, CeviDBService) {


    CeviDBService.searchAllMyGroups().then(function (res) {
      $scope.groups = res;
    }, function (error) {
      console.log('An error occurred!', error);
      $scope.isErrorOccured = true;
      $scope.errorMsg = "An error occurred! (" + error + ")";
      //TODO: Do DOM Manipulation in Directives
      $('#error').addClass('bg-danger');
    });

    $scope.checkAll = function () {
      angular.forEach($scope.groups, function (group) {
        group.selected = $scope.selectedAll;
      });

    };

    $scope.logout = function logout(){
      CeviDBService.logoutUser().then( function(res) {

        $location.path('/');
      }, function (error) {
        console.log('An error occurred!', error);
        $scope.isErrorOccured = true;
        $scope.errorMsg = "An error occurred! (" + error + ")";
        //TODO: Do DOM Manipulation in Directives
        $('#error').addClass('bg-danger');
      });
    }

  });
