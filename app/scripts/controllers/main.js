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

    $scope.addressList = [];
    $scope.groups = [];
    $scope.groups.members = [];

    //init groups after login
    CeviDBService.searchAllMyGroups().then(function (res) {
      $scope.groups = res;
      $scope.memberProperties = CeviDBService.getMemberProperties();
    }, function (error) {
      handleError(error);
    });

    $scope.checkAll = function () {
      angular.forEach($scope.groups, function (group) {
        group.selected = $scope.selectedAll;
      });
      $scope.selectMembers();
    };

    $scope.selectMembers = function () {
      angular.forEach($scope.groups, function (group) {
        if (group.selected && !group.isListLoaded) {

          group.members = CeviDBService.getAllMembersOfGroup(group.id);
        /*.then(function (res) {
            group.members = res;
            angular.forEach(group.members, function (member) {*/
              $scope.addressList.push(member);/*
            });
            group.isListLoaded = true;
          }, function (error) {
            handleError(error);
          });*/
        } else {
          if (!group.selected) {
            if (group.members != undefined) {
              angular.forEach(group.members, function (member) {
                if ($scope.addressList != undefined) {
                  var index = $scope.addressList.indexOf(member);
                  if (index != -1) {
                    $scope.addressList.splice(index, 1);
                  }
                }
              });
            }
            group.isListLoaded = false;
          }
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
