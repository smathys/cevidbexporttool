/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.common')
        .config(exceptionHandlerDecorator);

    // @ngInject
    function exceptionHandlerDecorator($provide) {
        $provide.decorator("$exceptionHandler", function($delegate, $injector) {
            return function (exception, cause) {
                $injector.get('$log').get('$exceptionHandler').error(exception, cause);
            };
        });
    }

}());