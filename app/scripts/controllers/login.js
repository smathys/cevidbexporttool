'use strict';

/**
 * @ngdoc function
 * @name ceviDbExportToolApp.controller:LoginCtrl
 * @description
 * # LoginCtrl
 * Controller of the ceviDbExportToolApp
 */
angular.module('ceviDbExportToolApp')
  .controller('LoginCtrl', function ($scope, $location, CeviDBService) {

    $scope.username = "";
    $scope.password = "";
    $scope.errorMsg = "";
    $scope.isErrorOccured = false;

    $scope.login = function login(){
      CeviDBService.loginUser($scope.username, $scope.password).then( function(res) {

        $location.path('/address-list');
      }, function (error) {
        console.log('An error occurred!', error);
        $scope.isErrorOccured = true;
        $scope.errorMsg = "An error occurred! (" + error + ")";
        //TODO: Do DOM Manipulation in Directives
        $('#error').addClass('bg-danger');
      });
    }
  });
