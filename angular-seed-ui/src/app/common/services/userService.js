/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')
        .factory('UserService', function (
            SecurityRestService,
            _) {

            var currentUserModel = {};

            return {
                currentUser: currentUserModel,
                initCurrentUser: initCurrentUser,

                getPersonId: getPersonId,
                getFirstname: getFirstname,
                getLastname: getLastname,
                getEmail: getEmail,
                getMobilePhoneNumber: getMobilePhoneNumber
            };

            function getPersonId() {
                return currentUserModel.personId;
            }

            function getFirstname() {
                return currentUserModel.firstname;
            }

            function getLastname() {
                return currentUserModel.lastname;
            }

            function getEmail() {
                return currentUserModel.email;
            }

            function getMobilePhoneNumber(){
                return currentUserModel.mobilePhoneNumber;
            }


            function initCurrentUser() {
                return SecurityRestService.getCurrentUserInfo().then(function(currentUser) {
                    angular.copy(currentUser, currentUserModel);
                    currentUserModel.isSuperuserForAtLeastOneUnternehmung = isSuperuserForAtLeastOneUnternehmung();
                    return currentUser;
                });
            }

        });

}());