/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')
        .directive('notification', function (NotificationService) {
            return {
                restrict: 'A',
                replace: true,
                scope: {},
                controller: function() {

                    var ctrl = this;

                    ctrl.alertType = {
                        'default'    :  'alert',
                        info         :  'alert alert-info',
                        success      :  'alert alert-success',
                        warning      :  'alert alert-warning',
                        error        :  'alert alert-danger'
                    };

                    ctrl.notifications = NotificationService.notifications;

                    ctrl.isClosable = function(notification) {
                        return notification.sticky;
                    };

                    ctrl.remove = function(notification) {
                        NotificationService.remove(notification.notificationId);
                    };
                },
                controllerAs: 'notificationCtrl',
                template:
                    '<div class="animationFadeIn animationFadeOut" ng-repeat="notification in notificationCtrl.notifications">' +
                        '<div ng-class="notificationCtrl.alertType[notification.type]">' +
                            '<button ng-click="notificationCtrl.remove(notification)" ' +
                                'ng-show="notificationCtrl.isClosable(notification)" type="button" class="close">' +
                                '&times;' +
                            '</button>' +
                            '<p>' +
                                '{{notification.messageKey | translate:notification.messageParams}}' +
                            '</p>' +
                        '</div>' +
                    '</div>',
                link: function (scope, element, attrs) {
                }
            };
        });

}());