/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.pizza.offer', [
            'ui.router'
        ])

        .config(config);

    // @ngInject
    function config($stateProvider) {
        $stateProvider
            .state('pizza.offer', {
                url: '/offer',
                controller: 'OfferCtrl',
                controllerAs: 'offerCtrl',
                templateUrl: 'pizza/offer/offer.tpl.html',
                resolve: {
                    test: function(PromiseService) {
                        return PromiseService.createAndResolve('test', 5000);
                    }
                }
            });
    }

}());