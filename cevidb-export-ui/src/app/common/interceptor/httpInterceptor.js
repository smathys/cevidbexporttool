/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.common')
        .factory('HttpInterceptor', HttpInterceptor);

    // @ngInject
    function HttpInterceptor(CONFIG, $q, $injector) {

        function request(config) {
            //config.timeout = CONFIG.DEFAULT_REQUEST_TIMEOUT;
            return config;
        }

        function responseError(rejection) {
            if (rejection.data && rejection.data.status) {
                if (rejection.data.status == 401) {
                    alert("Session Expired");
                    $injector.get("$state").go("login");
                }
                if (rejection.data.status == 403) {
                    alert("Access Denied");
                }
            }
            return $q.reject(rejection);
        }

        return {
            request,
            responseError
        };
    }

}());