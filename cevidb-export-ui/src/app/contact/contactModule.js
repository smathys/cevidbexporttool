/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.contact', [
            'ui.router'
        ])

        .config(config);

    // @ngInject
    function config($stateProvider) {
        $stateProvider.state('contact', {
            url: '/',
            templateUrl: 'contact/contact.tpl.html'
        });
    }

}());