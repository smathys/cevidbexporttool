/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.pizza.designer')
        .controller('DesignerCtrl', DesignerCtrl);

    // @ngInject
    function DesignerCtrl(
        $log,
        Pizza) {

        var LOG = $log.get('DesignerCtrl'),
            ctrl = this;

        LOG.debug('Entered');

        ctrl.pizzas = Pizza.model;

        ctrl.remove = remove;

        function remove(pizza) {
            Pizza.remove(pizza);
        }

    }

}());