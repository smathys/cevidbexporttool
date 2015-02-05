/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')
        .factory('AuthService', function (
            $state,
            NotificationService, UserService) {

            return {
                authenticate: authenticate
            };

            function authenticate(destinationState){

                var unauthorized = false;

                // Redirect to default state for user role if user tries to access to access state for which he doesn't have role
                if(UserService.isSupporter() && UserService.isPruefer() &&
                    (destinationStateDoesntContain(destinationState, 'support') &&
                        destinationStateDoesntContain(destinationState, 'pruefer'))) {
                    unauthorized = true;
                    $state.go('support.unternehmungen.search');
                } else if (UserService.isSupporter() && !UserService.isPruefer() && destinationStateDoesntContain(destinationState, 'support')) {
                    unauthorized = true;
                    $state.go('support.unternehmungen.search');

                } else if (UserService.isPruefer() && !UserService.isSupporter() && destinationStateDoesntContain(destinationState, 'pruefer')) {
                    unauthorized = true;
                    $state.go('pruefer.pendenzuebersicht');

                } else if (UserService.isBenutzer() && destinationStateDoesntContain(destinationState, 'module')) {
                    unauthorized = true;
                    $state.go('module.submodule.overview');
                }

                if (unauthorized) {
                    NotificationService.addWarning('notification.common.state.accessDenied');
                }

            }

            function destinationStateDoesntContain(destinationState, stateName) {
                return !destinationState || destinationState.name && destinationState.name.indexOf(stateName) === -1;
            }

        });

}());