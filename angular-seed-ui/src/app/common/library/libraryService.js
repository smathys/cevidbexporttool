/* global angular, _ */
(function () {
    "use strict";

    /**
     *
     * Only place where the 3rd party library is directly referenced,
     * for usage in application use angular service
     *
     */

    angular.module('angular-seed.common')

        .factory('_', function () {
            return window._;
        })

        .factory('moment', function () {
            return window.moment;
        });

}());