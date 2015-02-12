/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.pizza.offer')
        .controller('OfferCtrl', OfferCtrl);

    // @ngInject
    function OfferCtrl(
        $log,
        Pizza,
        test) {

        var LOG = $log.get('OfferCtrl'),
            ctrl = this;

        ctrl.pizza = Pizza.model;
    }

}());