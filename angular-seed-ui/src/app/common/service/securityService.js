/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.common')
        .factory('SecurityService', SecurityService);

    // @ngInject
    function SecurityService($log, $state, growl) {

        var LOG = $log.get('SecurityService'),
            currentUserModel = {};

        return {
            currentUser: currentUserModel,
            initCurrentUser: initCurrentUser,

            authenticate: authenticate
        };

        function initCurrentUser() {
            // rest logic
        }

        function authenticate() {
            // auth logic
            $log.debug('authenticate called');
        }
    }

}());