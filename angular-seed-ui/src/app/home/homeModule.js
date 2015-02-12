/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.home', [
            'ui.router'
        ])

        .config(config);

    // @ngInject
    function config($stateProvider) {
        $stateProvider.state('home', {
            url: '/',
            templateUrl: 'home/home.tpl.html'
        });
    }

}());