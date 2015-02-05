/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')
        .factory('ResolveService', function (
            $q,
            NotificationService) {

            return {
                a: a
            };

            function a($stateParams) {
                return rest.findById($stateParams.id);
            }

        });

}());