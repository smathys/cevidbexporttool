/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')
        .config(function ($provide, CONFIG) {
            $provide.decorator("$log", function($delegate, $injector) {

                var LOG_LEVEL_PRIORITY = {
                    error: 4,
                    warn:  3,
                    info:  2,
                    log:   1,
                    debug: 0
                };

                $delegate.getInstance = function(context) {
                    return {
                        error:  enhanceLogging('error', context),
                        warn:   enhanceLogging('warn',  context),
                        info:   enhanceLogging('info',  context),
                        log:    enhanceLogging('log',   context),
                        debug:  enhanceLogging('debug', context)
                    };
                };

                function enhanceLogging(level, context) {
                    if (LOG_LEVEL_PRIORITY[CONFIG.log.level] > LOG_LEVEL_PRIORITY[level]) {
                        return function() {};
                    }
                    return function() {
                        var args,
                            header,
                            message,
                            params,
                            logToBackend;

                        args = [].slice.call(arguments);
                        header = $injector.get('moment')().format('YYYY-MM-DD HH:mm:ss:SSS') + ' ' + level.toUpperCase() + ' [ ' + context + ' ] ';
                        message = args[0];
                        params = args[1];
                        logToBackend = typeof args[2] !== 'undefined' ? args[2] : true;

                        if (args[0] && args[0] instanceof Error) {
                            $delegate.error(header + message);
                            $delegate.error(args[0]);
                        } else {
                            if (params) {
                                $delegate[level](header + message, params);
                            } else {
                                $delegate[level](header + message);
                            }
                        }
                        if (logToBackend) {
                            performLogToBackend(level, context, args, message);
                        }
                    };
                }

                function performLogToBackend(level, context, args, message) {
                    // Prevent backend error logging when backend is inaccessible
                    if (isFailedBackendLogRequest(args)) {
                        return;
                    }

                    var backendLogMessage = '[ ' + context + ' ] ';
                    if (args[0]) {
                        if (args[0].hasOwnProperty('status')) {
                            backendLogMessage += args[0].status + ', ' + args[0].config.url;
                        } else if (args[0].hasOwnProperty('message')) {
                            backendLogMessage += args[0].message;
                        } else {
                            backendLogMessage += message;
                        }
                    } else {
                        backendLogMessage += args;
                    }

                    var $http = $injector.get('$http');
                    $http.apiPost('/log/', {level: level, message: backendLogMessage});
                }

                function isFailedBackendLogRequest(args) {
                    if ((args && args.status === 0) || (args[0] && isLogRequest(args[0]))) {
                        return true;
                    }

                    function isLogRequest(requestUrl) {
                        return requestUrl && requestUrl.indexOf && requestUrl.indexOf('log') > -1;
                    }
                }

                return $delegate;
            });
        });

}());

