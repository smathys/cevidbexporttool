/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.pizza.offer', [
            'ui.router'
        ])

        .config(config);

    // @ngInject
    function config($stateProvider) {
        $stateProvider
            .state('pizza.offer', {
                url: '/offer',
                controller: 'OfferCtrl',
                controllerAs: 'ctrl',
                templateUrl: 'pizza/offer/offer.tpl.html',
                resolve: {
                    initPizzaCollection: function(Pizza) {
                        return Pizza.initCollection();
                    }
                }
            });
    }

}());