'use strict';


/**
 * @ngdoc function
 * @name ceviDbExportToolApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the ceviDbExportToolApp
 */
angular.module('ceviDbExportToolApp')
  .controller('MainCtrl', function ($scope, $location, CeviDBService, $q){

    var self = this;

    self.addressList = [];
    self.groups = [];
    self.groups.members = [];
    self.memberProperties = {};
    var _keys =[];

    //init groups after login
    CeviDBService.searchAllMyGroups().then(function (res) {
      self.groups = res;
      _keys = CeviDBService.getMemberProperties();

      angular.forEach(_keys, function(key){
        self.memberProperties[key] = false;
      });

    }, function (error) {
      handleError(error);
    });

    self.checkAll = function () {
      angular.forEach(self.groups, function (group) {
        group.selected = self.selectedAll;
      });
      self.selectMembers();
    };
    self.checkAllProperties = function(){
      angular.forEach(_keys, function(key){
        self.memberProperties[key] = self.selectAllDetails;
      });
    }

    self.selectMembers = function () {
      angular.forEach(self.groups, function (group) {
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
    self.selectDetail = function(key){
      self.memberProperties[key] = true;
    }

    self.logout = function logout() {
      CeviDBService.logoutUser().then(function (res) {
        $location.path('/');
      }, function (error) {
        handleError(error);
        $location.path('/');
      });
    };

    function removeEntries(group) {
      angular.forEach(group.members, function (member) {
        if (self.addressList != undefined) {
          var index = self.addressList.indexOf(member);
          if (index != -1) {
            self.addressList.splice(index, 1);
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
            person.mails = {};
            person.social = {};

            angular.forEach(personObj.linked.phone_numbers, function(phone_number){
              person.phone[phone_number.label] = phone_number.number;
            });

            angular.forEach(personObj.linked.additional_emails, function(mail){
              person.mails[mail.label] = mail.email;
            });
            angular.forEach(personObj.linked.social_accounts, function(account){
              person.social[account.label] = account.name;
            });

            group.members.push(person);
            //check if person is already in the list
            if ( !self.addressList.some( function(entry){
                return entry.id == person.id   })){
              self.addressList.push(person);
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
    }
  });
