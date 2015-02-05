/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')

        .directive('confirmAction', function ($compile, $translate, dialogs) {
            return {
                restrict: 'A',
                scope: {
                    confirmAction: '&',
                    confirmCancel: '&'
                },
                link: function (scope, element, attrs) {
                    var headerKey = attrs.confirmHeader ? attrs.confirmHeader : 'dialog.action.header',
                        messageKey = attrs.confirmMessage ? attrs.confirmMessage : 'dialog.action.message';

                    $translate([headerKey, messageKey]).then(function(translations) {
                        element.bind('click', function(event) {
                            dialogs.confirm(translations[headerKey], translations[messageKey],
                                {
                                    size:'sm',
                                    backdrop: 'static'
                                }
                            ).result.then(function(){
                                if (scope.confirmAction && angular.isFunction(scope.confirmAction)) {
                                    scope.confirmAction();
                                }
                            }, function(){
                                if (scope.confirmCancel && angular.isFunction(scope.confirmCancel)) {
                                    scope.confirmCancel();
                                }
                            });
                        });
                    });
                }
            };
        });

}());
