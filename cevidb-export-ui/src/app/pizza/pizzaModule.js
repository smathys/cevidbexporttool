/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.pizza', [
            'ui.router'
        ])

        .config(config);

    // @ngInject
    function config($stateProvider) {
        $stateProvider.state('pizza', { abstract: true, url: '/pizza', template: '<div ui-view></div>' });
    }

}());