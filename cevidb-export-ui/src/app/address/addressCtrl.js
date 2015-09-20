/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.home')
        .controller('AddressCtrl', AddressCtrl);

    // @ngInject
    function AddressCtrl($log,
                      $location,
                      CeviDBService) {

        var LOG = $log.get('AddressCtrl');

        LOG.debug('Entered');

        var self = this;

        self.addressList = [];
        self.groups = [];
        self.groups.members = [];
        self.memberProperties = [];

        //init groups after login
        CeviDBService.searchAllMyGroups().then(function (res) {
            self.groups = res;
            angular.forEach(CeviDBService.getMemberProperties(), function (key) {
                self.memberProperties.push({'key': key, isShown: false});
            });

        }, function (error) {
            handleError(error);
        });

        self.checkAll = function () {
            angular.forEach(self.groups, function (group) {
                group.selected = self.selectAll;
            });
            self.selectMembers();
        };
        self.checkAllProperties = function () {
            angular.forEach(self.memberProperties, function (obj) {
                obj.isShown = self.selectAllDetails;
            });
        };

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


        self.logout = function logout() {
            CeviDBService.logoutUser().then(function (res) {
                $location.path('/');
            }, function (error) {
                handleError(error);
                $location.path('/');
            });
        };

        self.showProperty = function isPropertyShown(key){
            for( var i = 0; i < self.memberProperties.length; i++){
                if ( self.memberProperties[i].key === key){
                    return self.memberProperties[i].isShown;
                }
            }
        };
        self.getMemberInfo = function getMemberInfo(key){

        };

        function removeEntries(group) {
            angular.forEach(group.members, function (member) {
                if (self.addressList !== undefined) {
                    var index = self.addressList.indexOf(member);
                    if (index !== -1) {
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

                        angular.forEach(personObj.linked.phone_numbers, function (phone_number) {
                            person["phone " + phone_number.label] = phone_number.number;

                        });

                        angular.forEach(personObj.linked.additional_emails, function (mail) {
                            person["email " + mail.label] = mail.email;
                        });
                        angular.forEach(personObj.linked.social_accounts, function (account) {
                            person[account.label.toLowerCase()] = account.name;
                        });

                        group.members.push(person);
                        //check if person is already in the list
                        if ( !self.addressList.some( function(entry){
                                return entry.id === person.id;
                            }) ){
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
            LOG.error('error occured: ' + error);
            self.isErrorOccured = true;
            self.errorMsg =  error.text;
        }




    }

}());