/* global angular, CONFIG */
(function () {
    "use strict";

    angular.module('angular-seed', [
        'templates-app',

        'angular-seed.common',

        'angular-seed.module',

        'ngAnimate',
        'ui.router',
        'ui.bootstrap',
        'ui.utils',

        'lr.upload',
        'pascalprecht.translate',
        'dialogs.main'
    ])

    .constant('CONFIG', CONFIG)

    .config(uiRouterConfig)
    .config(logConfig)
    .config(httpProviderConfig)
    .config(loadingServiceConfig)
    .config(notificationServiceConfig)
    .config(angularTranslateConfig)

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
        if (CONFIG.dev && CONFIG.dev.sendCredentials) {
            $httpProvider.defaults.withCredentials =CONFIG.dev.sendCredentials;
        }
        $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
        $httpProvider.interceptors.push('HttpInterceptor');
    }

    function loadingServiceConfig(LoadingServiceProvider) {
        LoadingServiceProvider.setTimeout(CONFIG.timeout.request);
    }

    function notificationServiceConfig(NotificationServiceProvider) {
        NotificationServiceProvider.setTimeout(CONFIG.timeout.notification);
    }

    function angularTranslateConfig($translateProvider) {
        $translateProvider.useStaticFilesLoader({
            prefix: 'i18n/locale-',
            suffix: '.json'
        });
        $translateProvider.preferredLanguage('de');
    }


    function init($rootScope, $httpDecorator, $log, $state) {

        var LOG = $log.getInstance('AppModule');

        $httpDecorator.decorate();

        $rootScope.$state = $state;
        $rootScope.config = CONFIG;


        $rootScope.$on('$stateChangeStart', function (event, toState, toParams, fromState, fromParams) {
            if (toState.resolve) {
                $rootScope.spinner = true;
            }
        });

        $rootScope.$on('$stateChangeSuccess', function (event, toState, toParams, fromState, fromParams) {
            $rootScope.spinner = false;

//            var stateNameKey = 'state.' + toState.name + '.stateName',
//                appNameKey = 'common.appnameShortcut';
//            $translate([stateNameKey, appNameKey]).then(function(translations) {
//                ctrl.pageTitle = translations[stateNameKey] + ' - ' + translations[appNameKey];
//            });
//
//            AuthService.authenticate(toState);
        });

        $rootScope.$on('$stateChangeError', function(event, toState, toParams, fromState, fromParams, error){
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

