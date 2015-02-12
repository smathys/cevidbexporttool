/* global angular, CONFIG */
(function () {
    "use strict";

    angular.module('angular-seed', [

        'templates-app',

        'ngAnimate',
        'ngCookies',

        'ui.router',
        'ui.bootstrap',
        'ui.utils',

        'angular-growl',
        'pascalprecht.translate',
        'dialogs.main',
        'lr.upload',

        'angular-seed.common',
        'angular-seed.home',
        'angular-seed.pizza',
        'angular-seed.pizza.offer'

    ])

    .constant('CONFIG', CONFIG)

    .constant('EVENT', {
        STATE_CHANGE_START: '$stateChangeStart',
        STATE_CHANGE_SUCCESS: '$stateChangeSuccess',
        STATE_CHANGE_ERROR: '$stateChangeError',

        TRANSLATE_CHANGE_SUCCESS: '$translateChangeSuccess'
    })

    .config(uiRouterConfig)
    .config(logConfig)
    .config(httpProviderConfig)
    .config(angularTranslateConfig)
    .config(growlConfig)

    .run(init);

    function uiRouterConfig($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise(function ($injector, $location) {
            $urlRouterProvider.otherwise('/');
        });
    }

    function logConfig($logProvider) {
        $logProvider.debugEnabled(true);
    }

    function httpProviderConfig($httpProvider, CONFIG) {
        if (CONFIG.DEV_SENDCREDENTIALS) {
            $httpProvider.defaults.withCredentials = CONFIG.DEV_SENDCREDENTIALS;
        }
        $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
        $httpProvider.interceptors.push('HttpInterceptor');
    }

    function angularTranslateConfig($translateProvider) {
        $translateProvider
            .useStaticFilesLoader({
                prefix: 'i18n/locale-',
                suffix: '.json'
            })
            .registerAvailableLanguageKeys(['en', 'de'], {
                'en_US': 'en',
                'en_UK': 'en',
                'de_DE': 'de',
                'de_CH': 'de'
            })
            .determinePreferredLanguage()
            .useCookieStorage();
    }

    function growlConfig(growlProvider) {
        growlProvider.globalTimeToLive({
            info: CONFIG.APP_TIMEOUT_NOTIFICATION_INFO,
            success: CONFIG.APP_TIMEOUT_NOTIFICATION_SUCCESS,
            warning: CONFIG.APP_TIMEOUT_NOTIFICATION_WARNING,
            error: CONFIG.APP_TIMEOUT_NOTIFICATION_ERROR
        });
        growlProvider.globalPosition('top-center');
        growlProvider.onlyUniqueMessages(false);
        growlProvider.globalReversedOrder(true);
        growlProvider.globalDisableCountDown(true);
        growlProvider.globalDisableIcons(true);
    }

    function init(
        $rootScope, $log,
        $state, $translate,
        SecurityService, LoadingService,
        CONFIG, EVENT) {

        var LOG = $log.get('AppModule');

        $rootScope.$state = $state;
        $rootScope.config = CONFIG;
        $rootScope.language = {
            change: function () {
                $translate.use($rootScope.language.selected);
            }
        };

        $rootScope.$on(EVENT.TRANSLATE_CHANGE_SUCCESS, function () {
            $rootScope.language.selected = $translate.use();
        });

        $rootScope.$on(EVENT.STATE_CHANGE_START, function (event, toState, toParams, fromState, fromParams) {
            if (toState.resolve) {
                LoadingService.start(formatStateChange(fromState, toState));
            }
        });

        $rootScope.$on(EVENT.STATE_CHANGE_SUCCESS, function (event, toState, toParams, fromState, fromParams) {
            LoadingService.stop();
            // resolve page title
            SecurityService.authenticate(toState);
        });

        $rootScope.$on(EVENT.STATE_CHANGE_ERROR, function(event, toState, toParams, fromState, fromParams, error){
            LoadingService.stop();
            if (error && error.status === 401) {
                return;
            } else {
                LOG.error(formatStateChangeError(fromState, toState, error));
            }

        });

        function formatStateChange(fromState, toState) {
            return 'State change from "' + stateNameOrUndefined(fromState) + '" -> "' + stateNameOrUndefined(toState) + '"';
            function stateNameOrUndefined(state) {
                return state.name ? state.name : 'undefined';
            }
        }

        function formatStateChangeError(fromState, toState, error) {
            return formatStateChange(fromState, toState) + ' | error: ' + JSON.stringify(error);
        }

    }

}());

