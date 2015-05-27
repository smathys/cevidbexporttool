/* global angular */
(function () {
    "use strict";

    class PromiseService {
        constructor($log, $q, $timeout) {
            this.LOG = $log.get('SecurityService');
            this.$q = $q;
            this.$timeout = $timeout;
        }

        createAndResolve(optionalResponse, timeout = 0) {
            var deferred = this.$q.defer();
            this.$timeout(function () {
                deferred.resolve(optionalResponse);
            }, timeout);
            return deferred.promise;
        }

        createAndReject(optionalRejection, timeout = 0) {
            var deferred = this.$q.defer();
            this.$timeout(function () {
                deferred.reject(optionalRejection);
            }, timeout);
            return deferred.promise;
        }
    }

    angular
        .module('angular-seed.common')
        .service('PromiseService', PromiseService);

}());