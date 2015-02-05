/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed')
        .controller('AppCtrl', function AppCtrl(
            $scope, $rootScope, $location, $state, $log, $translate, $modal,
            LoadingService, AuthService, UserService, I18nFormatService, ResolveService,
            CONFIG) {

            $scope.$state = $state;

            var ctrl = this,
                LOG = $log.getInstance('AppCtrl - $stateChangeError');

            ctrl.config = CONFIG;
            ctrl.UserService = UserService;
            ctrl.currentUser = UserService.currentUser;
            ctrl.spinner = LoadingService.loading;
            ctrl.i18nFormat = I18nFormatService.format;
            ctrl.datepickers = {};
            ctrl.toggleDatepicker = function($event, datepickerName) {
                $event.preventDefault();
                $event.stopPropagation();
                ctrl.datepickers[datepickerName] = ctrl.datepickers[datepickerName] ? false : true;
            };

            ctrl.scrollTop = function() {
                scrollTop();
            };


            $rootScope.$on('$stateChangeStart', function (event, toState, toParams, fromState, fromParams) {
                if (toState.resolve) {
                    ctrl.spinner.active = true;
                }
            });

            $rootScope.$on('$stateChangeSuccess', function (event, toState, toParams, fromState, fromParams) {
                // show top of page on state change
                scrollTop();

                if (toState.data && toState.data.layout) {
                    ctrl.layout = toState.data.layout;
                } else {
                    ctrl.layout = 'default';
                }
                ctrl.spinner.active = false;

                var stateNameKey = 'state.' + toState.name + '.stateName',
                    appNameKey = 'common.appnameShortcut';
                $translate([stateNameKey, appNameKey]).then(function(translations) {
                    ctrl.pageTitle = translations[stateNameKey] + ' - ' + translations[appNameKey];
                });

                AuthService.authenticate(toState);
                PendenteeinladungenService.initEinladungen();
            });

            $rootScope.$on('$stateChangeError', function(event, toState, toParams, fromState, fromParams, error){
                ctrl.spinner.active = false;
                if (error && error.status === 401) {
                    return;
                } else {
                    LOG.error(stateNameOrUndefined(fromState) + ' -> ' + stateNameOrUndefined(toState) + ' | error: ' + JSON.stringify(error));
                }

                function stateNameOrUndefined(state) {
                    return state.name ? state.name : 'undefined';
                }
            });

            function scrollTop() {
                $("html, body").animate({ scrollTop: 0 }, 0);
            }

        });

}());