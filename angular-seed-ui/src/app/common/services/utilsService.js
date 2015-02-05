/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')
        .factory('Utils', function ($q) {

            return {
                createAndResolveHelperPromise: createAndResolveHelperPromise,
                createAndRejectHelperPromise: createAndRejectHelperPromise,
                convertToFloat: convertToFloat
            };

            function createAndResolveHelperPromise() {
                var deferred = $q.defer();
                deferred.resolve();
                return deferred.promise;
            }

            function createAndRejectHelperPromise() {
                var deferred = $q.defer();
                deferred.reject();
                return deferred.promise;
            }

        });

}());