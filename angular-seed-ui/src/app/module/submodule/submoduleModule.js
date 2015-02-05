/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.module.submodule', [
        'ui.router'
    ])

        .config(function config($stateProvider) {

            $stateProvider
                .state('module.submodule', {abstract: true, url: '', template: '<ui-view/>' })

                .state('module.submodule.overview', {
                    url: '/submodule',
                    controller: 'SubmoduleCtrl',
                    controllerAs: 'submoduleCtrl',
                    templateUrl: 'module/submodule/submodule.tpl.html',
                    resolve: {
                    }
                })

                .state('module.submodule.subsubmodule1', {
                    url: '/:submoduleId/subsubmodule1',
                    controller: 'SubmoduleCtrl',
                    controllerAs: 'submoduleCtrl',
                    templateUrl: 'module/submodule/subsubmodule1/subsubmodule1.tpl.html',
                    resolve: {
                    }
                });

        });

}());