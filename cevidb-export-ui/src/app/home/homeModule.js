/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.home', [
            'ui.router'
        ])

        .config(config);

    // @ngInject
    function config($stateProvider) {
        $stateProvider.state('home', {
            url: '/home',
            controller: 'HomeCtrl',
            controllerAs: 'ctrl',
            templateUrl: 'home/home.tpl.html',
        });
    }

}());