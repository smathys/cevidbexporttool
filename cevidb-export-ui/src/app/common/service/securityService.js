/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.common')
        .factory('SecurityService', SecurityService);

    // @ngInject
    function SecurityService($log, $state) {

        var LOG = $log.get('SecurityService'),
            currentUserModel = {};

        return {
            currentUser: currentUserModel,
            initCurrentUser: initCurrentUser,

            authenticate: authenticate
        };

        function initCurrentUser() {
            // rest logic
            LOG.debug('current user initialized');
        }

        function authenticate() {
            // auth logic
        }
    }

}());