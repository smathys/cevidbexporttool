/* global angular, CONFIG */
(function () {
    "use strict";

    angular.module('cevidb-export', [

        'templates-app',

        'ngMessages',
        'ngCookies',
        'ngAnimate',

        'ui.router',
        'ui.bootstrap',

        'pascalprecht.translate',
        'tmh.dynamicLocale',
        'cevidb-export.common',
        'cevidb-export.home',
        'cevidb-export.header',
        'cevidb-export.address'
      ])

      .constant('CONFIG', CONFIG)

      .constant('EVENT', {
        // ui-router
        STATE_CHANGE_START: '$stateChangeStart',
        STATE_CHANGE_SUCCESS: '$stateChangeSuccess',
        STATE_CHANGE_ERROR: '$stateChangeError',
        VIEW_CONTENT_LOADED: '$viewContentLoaded',

        // angular-translate
        TRANSLATE_CHANGE_SUCCESS: '$translateChangeSuccess'
      })

      .config(uiRouterConfig)
      .config(logConfig)
      .config(httpProviderConfig)
      .config(angularTranslateConfig)
      .config(dynamicLocaleProviderConfig)
      .config(stateConfig)

      .run(init);

    function uiRouterConfig($urlRouterProvider) {

      $urlRouterProvider.otherwise('/home');
    }

    function stateConfig($stateProvider) {
      $stateProvider.state('app', {
        url: '/',
        views: {
          'header': {
            templateUrl: 'header/header.tpl.html',
            controller: 'HeaderCtrl',
            controllerAs: 'ctrl'
          },
          'content':{ template: "<p>Welcome</p>"}
        },
        resolve: {
          headerDataPromise: function (HeaderDataService) {
            return HeaderDataService.initCeviWords();
          }
        }
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
                    prefix: 'i18n/locale_',
                    suffix: '.json'
                })
                .registerAvailableLanguageKeys(['en-us', 'de-ch'], {
                    'en_US': 'en-us',
                    'en_UK': 'en-us',
                    'de_DE': 'de-ch',
                    'de_CH': 'de-ch'
                })
                .determinePreferredLanguage()
                .useCookieStorage();
        }

        function dynamicLocaleProviderConfig(tmhDynamicLocaleProvider) {
            tmhDynamicLocaleProvider.localeLocationPattern('i18n/angular-locale_{{locale}}.js');
        }

        function init($rootScope, $log, $timeout,
                      $state, $translate,
                      tmhDynamicLocale,
                      CONFIG, EVENT) {

            var LOG = $log.get('AppModule');

            $rootScope.$state = $state;
            $rootScope.config = CONFIG;
            $rootScope.language = {
                change: function () {
                    $translate.use($rootScope.language.selected);
                    tmhDynamicLocale.set($rootScope.language.selected);
                }
            };

            $rootScope.$on(EVENT.TRANSLATE_CHANGE_SUCCESS, function () {
                $rootScope.language.selected = $translate.use();
                tmhDynamicLocale.set($rootScope.language.selected);
            });

            $rootScope.$on(EVENT.STATE_CHANGE_START, function (event, toState, toParams, fromState, fromParams) {
                LOG.debug(formatStateChange(fromState, toState));
            });

            $rootScope.$on(EVENT.STATE_CHANGE_SUCCESS, function (event, toState, toParams, fromState, fromParams) {
                LOG.debug(formatStateSuccess(fromState, toState));
            });

            //$rootScope.$on(EVENT.VIEW_CONTENT_LOADED, function (event) {
            //    // Init bootstrap-material-design effects
            //    $timeout(function () {
            //        $.material.init();
            //    });
            //});

            $rootScope.$on(EVENT.STATE_CHANGE_ERROR, function (event, toState, toParams, fromState, fromParams, error) {
                LOG.error(formatStateChangeError(fromState, toState, error));
            });

            function formatStateChange(fromState, toState) {
                return 'State change from "' + extractStateNameOrUndefined(fromState) + '" -> "' + extractStateNameOrUndefined(toState) + '"';
            }

            function formatStateSuccess(fromState, toState) {
                return 'State changed from "' + extractStateNameOrUndefined(fromState) + '" -> "' + extractStateNameOrUndefined(toState) + '"';
            }

            function extractStateNameOrUndefined(state) {
                return state.name ? state.name : 'undefined';
            }

            function formatStateChangeError(fromState, toState, error) {
                return formatStateChange(fromState, toState) + ' | error: ' + JSON.stringify(error);
            }
        }

    }

    ()
    )
    ;

