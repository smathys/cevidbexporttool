/* global angular */
(function () {
    "use strict";

    /*
        Reworked from standard decorator which uses $delegate to service which is called during application
        initialization in appModule.js (run method) to prevent circular dependency (3rd party upload service)
     */

    angular.module('angular-seed.common')
        .factory('$httpDecorator', function($http, $q, upload) {

            return {
                decorate: function() {
                    $http.apiHead = useApiUrl($http.head);
                    $http.apiGet = useApiUrl($http.get);
                    $http.apiPost = useApiUrl($http.post);
                    $http.apiPut = useApiUrl($http.put);
                    $http.apiDelete = useApiUrl($http['delete']);
                    $http.apiPatch = useApiUrl($http.patch);
                    $http.apiUpload = apiUpload;
                }
            };

            function useApiUrl(httpFunction) {
                return function () {
                    var args = [].slice.call(arguments);
                    args[0] = CONFIG.url.api + args[0];
                    return httpFunction.apply(null, args);
                };
            }

            function apiUpload(url, file) {
                var options = {
                    url: CONFIG.url.api + url,
                    method: 'POST',
                    forceIFrameUpload: false,
                    data: {}
                };
                options.data['file'] = file;
                return upload(options).then(
                    function (response) {
                    },
                    function (response) {
                        var showGenericUploadError = false;
                        if (response && response.data && response.data.error && response.data.error.errors) {
                            response.data.error.errors.forEach(function(error) {
                               if (!showGenericUploadError && error.messageSeverity === 'error') {
                                   showGenericUploadError = true;
                                   return;
                               }
                            });
                        }
                        if (showGenericUploadError) {
//                            NotificationService.addError('error.other.upload');
                        }
                        return $q.reject(response);
                    }
                );
            }

        });

}());