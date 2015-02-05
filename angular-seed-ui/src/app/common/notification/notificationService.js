/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')
        .provider('NotificationService', function() {

            var timeout = 1500;
            var notifications = [];

            return {
                setTimeout: function (value) {
                    timeout = value;
                },
                $get: function($timeout) {
                    var notificationId = 0;

                    return {
                        notifications: notifications,


                        addDefault: addDefault,
                        addInfo: addInfo,
                        addSuccess: addSuccess,
                        addWarning: addWarning,
                        addError: addError,

                        remove: remove
                    };

                    /**
                     *
                     * Private function used to add notification to be displayed in the application.
                     * For adding notifications use specific add functions (addDefault, addInfo ...)
                     *
                     * @param type Type of notification, string value, possible values: 'debug', 'info', 'success', 'warning', 'error'
                     * @param message Message to be displayed, strings are looked up in dictionary and translated, can also be object with 'key', 'params' and optional 'isArray' properties, key is translated and params are provided for placeholders in translation string (isArray signifies that params is array and is converted to object literal with structure { param0: params[0], param1: param[1], ... } )
                     * @param sticky Boolean flag to decide if notification will be hiden automaticaly after delay or user has to close it manualy (error is sticky by default, but can be made unsticky by setting sticky = false)
                     *
                     */
                    function add(type, message, sticky) {

                        if(!sticky && type === 'error') {
                            sticky = true;
                        }

                        var notification = {
                            notificationId: notificationId,
                            type: type,
                            messageKey: typeof message === 'string' ? message : message.key,
                            messageParams: typeof message === 'string' ? {} : message.isArray  ? messageParamsToOjectLiteral(message.params) : message.params,
                            sticky: sticky
                        };
                        notifications.unshift(notification);
                        notifications.sort(sortNotifications);

                        if (!sticky) {
                            $timeout(removeWithTimeout(notificationId), timeout);
                        }

                        notificationId++;
                    }

                    function messageParamsToOjectLiteral(messageParams) {
                        var result = {};
                        messageParams.forEach(function(value, key) {
                            result['param' + key] = value;
                        });
                        return result;
                    }

                    function addDefault(message, sticky) {
                        add('default', message, sticky);
                    }

                    function addInfo(message, sticky) {
                        add('info', message, sticky);
                    }

                    function addSuccess(message, sticky) {
                        add('success', message, sticky);
                    }

                    function addWarning(message, sticky) {
                        add('warning', message, sticky);
                    }

                    function addError(message, sticky) {
                        add('error', message, sticky);
                    }

                    function remove(notificationId) {
                        notifications.forEach(function (displayedNotification, index) {
                            if (notificationId === displayedNotification.notificationId) {
                                notifications.splice(index, 1);
                            }
                        });
                    }

                    function removeWithTimeout(notificationId) {
                        var id = notificationId;
                        return function() {
                            notifications.forEach(function (displayedNotification, index) {
                                if (id === displayedNotification.notificationId) {
                                    notifications.splice(index, 1);
                                }
                            });
                        };
                    }

                    function sortNotifications(a, b){
                        function getTypeValue(type) {
                            if (type === 'default') { return 0; }
                            if (type === 'info') { return 1; }
                            if (type === 'success') { return 2; }
                            if (type === 'warning') { return 3; }
                            if (type === 'error') { return 4; }
                        }
                        return getTypeValue(a.type) < getTypeValue(b.type);
                    }
                }
            };
        });

}());