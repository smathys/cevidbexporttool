/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.pizza.offer')
        .controller('OfferCtrl', OfferCtrl);

    // @ngInject
    function OfferCtrl(
        $log, $state,
        Pizza) {

        var LOG = $log.get('OfferCtrl');

        var ctrl = this;

        ctrl.pizza = Pizza.model;
    }

}());