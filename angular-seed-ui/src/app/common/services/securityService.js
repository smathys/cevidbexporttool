/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.common')
        .factory('SecurityService', SecurityService);

    // @ngInject
    function SecurityService($log, $state, growl) {


        growl.error('Message', 'Title');
        growl.info("This adds a warn message");
        growl.success("This adds a warn message");
        growl.error("This adds a warn message", {title: 'ALERT WE GOT ERROR'});

        var LOG = $log.getInstance('SecurityService'),
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