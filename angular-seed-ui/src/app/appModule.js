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

    .run(function run($httpDecorator) {
        $httpDecorator.decorate();
    });


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

}());

