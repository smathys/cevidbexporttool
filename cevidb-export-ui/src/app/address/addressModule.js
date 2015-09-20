/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.address', [
            'ui.router'
        ])

        .config(config);

    // @ngInject
    function config($stateProvider) {
        $stateProvider.state('address', {
            url: '/address',
            controller: 'AddressCtrl',
            controllerAs: 'ctrl',
            templateUrl: 'address/address.tpl.html'
        });
    }

}());