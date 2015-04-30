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
      //to init memberPropertyList call DBService getMemberProperties
      $scope.memberProperties = CeviDBService.getMemberProperties();
    }, function (error) {
      handleError(error);
    });

    $scope.checkAll = function () {
      angular.forEach($scope.groups, function (group) {
        group.selected = $scope.selectedAll;
      });
    };

    $scope.hideProperty = function (property) {
      return property === "links";
    };

    $scope.selectMembers = function () {
      angular.forEach($scope.groups, function (group) {
        if (group.selected && !group.isListLoaded) {
          CeviDBService.getAllMembersOfGroup(group.id).then(function (res) {
            $scope.members = res;
            group.isListLoaded = true;
          }, function (error) {
            handleError(error);
          });
        } else {
          //TODO: remove members, set flag isListLoaded to false
        }
      });
    }


    $scope.logout = function logout() {
      CeviDBService.logoutUser().then(function (res) {
        $location.path('/');
      }, function (error) {
        handleError(error);
        $location.path('/');
      });
    }

  });

function handleError(error) {
  if ($scope != undefined) {
    $scope.isErrorOccured = true;
    $scope.errorMsg = "An error occurred! (" + error + ")";
    //TODO: Do DOM Manipulation in Directives
    $('#error').addClass('bg-danger');
  }
}
