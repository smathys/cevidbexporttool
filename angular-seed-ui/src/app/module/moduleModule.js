/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.module', [
        'ui.router'
    ])

        .config(function config($stateProvider) {
            $stateProvider.state('module', {
                abstract: true,
                url: '/module',
                controller: 'ModuleCtrl',
                controllerAs: 'moduleCtrl',
                templateUrl: 'module/module.tpl.html',
                resolve: {
                }
            });
        });

}());