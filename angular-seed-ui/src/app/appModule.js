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
        'angular-seed.module'

    ])

    .constant('CONFIG', angular.extend(CONFIG, {
        CONST: {
            STATE_CHANGE_START: '$stateChangeStart',
            STATE_CHANGE_SUCCESS: '$stateChangeSuccess',
            STATE_CHANGE_ERROR: '$stateChangeError'
        }
    }))

    .config(uiRouterConfig)
    .config(logConfig)
    .config(httpProviderConfig)
    .config(angularTranslateConfig)
    .config(growlConfig)

    .run(init);

    function uiRouterConfig($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise(function ($injector, $location) {
            $urlRouterProvider.otherwise('/path');
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
            .preferredLanguage(CONFIG.APP_LANGUAGE)
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
        $rootScope, $httpDecorator, $log,
        $state, $translate,
        SecurityService,
        CONFIG) {

        var LOG = $log.getInstance('AppModule');

        $httpDecorator.decorate();

        $rootScope.$state = $state;
        $rootScope.config = CONFIG;

        $rootScope.language = {
            selected: $translate.use() || CONFIG.APP_LANGUAGE,
            change: function () {
                $translate.use($rootScope.language.selected);
            }
        };

        $rootScope.$on(CONFIG.CONST.STATE_CHANGE_START, function (event, toState, toParams, fromState, fromParams) {
            if (toState.resolve) {
                $rootScope.spinner = true;
            }
        });

        $rootScope.$on(CONFIG.CONST.STATE_CHANGE_SUCCESS, function (event, toState, toParams, fromState, fromParams) {
            $rootScope.spinner = false;
            // resolve page title
            SecurityService.authenticate(toState);
        });

        $rootScope.$on(CONFIG.CONST.STATE_CHANGE_ERROR, function(event, toState, toParams, fromState, fromParams, error){
            $rootScope.spinner = false;
            if (error && error.status === 401) {
                return;
            } else {
                LOG.error(stateNameOrUndefined(fromState) + ' -> ' + stateNameOrUndefined(toState) + ' | error: ' + JSON.stringify(error));
            }
            function stateNameOrUndefined(state) {
                return state.name ? state.name : 'undefined';
            }
        });

    }

}());

