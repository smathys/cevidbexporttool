'use strict';


/**
 * @ngdoc function
 * @name ceviDbExportToolApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the ceviDbExportToolApp
 */
angular.module('ceviDbExportToolApp')
  .controller('MainCtrl', function ($scope, $location, CeviDBService, $q) {

    $scope.addressList = [];
    $scope.groups = [];
    $scope.groups.members = [];
    $scope.memberProperties = {};
    var _keys =[];

    //init groups after login
    CeviDBService.searchAllMyGroups().then(function (res) {
      $scope.groups = res;
      _keys = CeviDBService.getMemberProperties();

      angular.forEach(_keys, function(key){
        $scope.memberProperties[key] = false;
      });

    }, function (error) {
      handleError(error);
    });

    $scope.checkAll = function () {
      angular.forEach($scope.groups, function (group) {
        group.selected = $scope.selectedAll;
      });
      $scope.selectMembers();
    };
    $scope.checkAllProperties = function(){
      angular.forEach(_keys, function(key){
        $scope.memberProperties[key] = $scope.selectAllDetails;
      });
    }

    $scope.selectMembers = function () {
      angular.forEach($scope.groups, function (group) {
        if (group.selected && !group.isListLoaded) {
          addEntries(group);
        } else {
          if (!group.selected) {
            if (group.members !== undefined) {
              removeEntries(group);
            }
            group.isListLoaded = false;
          }
        }
      });
    };
    $scope.selectDetail = function(key){
      $scope.memberProperties[key] = true;
    }

    $scope.logout = function logout() {
      CeviDBService.logoutUser().then(function (res) {
        $location.path('/');
      }, function (error) {
        handleError(error);
        $location.path('/');
      });
    };

    function removeEntries(group) {
      angular.forEach(group.members, function (member) {
        if ($scope.addressList != undefined) {
          var index = $scope.addressList.indexOf(member);
          if (index != -1) {
            $scope.addressList.splice(index, 1);
          }
        }
      });
    }

    function addEntries(group) {
      CeviDBService.getAllMembersIDsOfGroup(group.id).then(function (res) {
        var promises = [];
        angular.forEach(res, function (memberID) {
          promises.push(CeviDBService.getMemberDetails(memberID));
        });
        $q.all(promises).then(function (response) {
          group.members = [];
          angular.forEach(response, function (personObj) {
            var person = personObj.people[0];
            person.phone = {};

            angular.forEach(personObj.linked.phone_numbers, function(phone_number){
              person.phone[phone_number.label] = phone_number.number;
            });

            group.members.push(person);
            //check if person is already in the list
            if ( !$scope.addressList.some( function(entry){
                return entry.id == person.id   })){
              $scope.addressList.push(person);
            }

          });
          group.isListLoaded = true;
        });
      }, function (error) {
        handleError(error);
      });
    }


    function handleError(error) {
      console.log("error occured: " + error);
      /*if ($scope !== undefined) {
       $scope.isErrorOccured = true;
       $scope.errorMsg = "An error occurred! (" + error + ")";
       //TODO: Do DOM Manipulation in Directives
       $('#error').addClass('bg-danger');
       }*/
    }
  });
