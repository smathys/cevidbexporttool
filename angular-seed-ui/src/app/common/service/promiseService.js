/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.common')
        .factory('PromiseService', PromiseService);

    // @ngInject
    function PromiseService($q) {

        return {
            createAndResolve: createAndResolve,
            createAndReject: createAndReject
        };

        function createAndResolve(optionalResponse) {
            var deferred = $q.defer();
            deferred.resolve(optionalResponse);
            return deferred.promise;
        }

        function createAndReject(optionalRejection) {
            var deferred = $q.defer();
            deferred.reject(optionalRejection);
            return deferred.promise;
        }

    }

}());