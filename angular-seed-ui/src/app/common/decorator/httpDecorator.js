/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.common')
        .config(httpDecorator);

    // @ngInject
    function httpDecorator(CONFIG, $provide) {

        $provide.decorator("$http", function ($delegate, $injector) {

            $delegate.apiHead = useApiUrl($delegate.head);
            $delegate.apiGet = useApiUrl($delegate.get);
            $delegate.apiPost = useApiUrl($delegate.post);
            $delegate.apiPut = useApiUrl($delegate.put);
            $delegate.apiDelete = useApiUrl($delegate['delete']);
            $delegate.apiPatch = useApiUrl($delegate.patch);

            return $delegate;

            function useApiUrl(httpFunction) {
                return function () {
                    var args = [].slice.call(arguments);
                    args[0] = CONFIG.APP_URL_API + args[0];
                    return httpFunction.apply(null, args);
                };
            }

        });

    }

})();