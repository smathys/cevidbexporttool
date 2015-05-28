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

    var self = this;

    self.login = function(){
      CeviDBService.loginUser(self.username, self.password).then( function(res) {

        $location.path('/address-list');
      }, function (error) {
        console.log('An error occurred!', error);
        self.isErrorOccured = true;
        self.errorMsg =  error.text;
        //TODO: Do DOM Manipulation in Directives
        $('#error').addClass('bg-danger');
      });
    }
  });
