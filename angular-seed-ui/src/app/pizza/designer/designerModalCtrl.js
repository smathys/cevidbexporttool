
    /* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.pizza.designer')
        .controller('DesignerModalCtrl', DesignerModalCtrl);

    // @ngInject
    function DesignerModalCtrl(
        $log,
        $modalInstance,
        pizza) {

        var LOG = $log.get('DesignerModalCtrl'),
            ctrl = this;

        LOG.debug('Entered');
        LOG.debug('pizza: ', ctrl.pizza);

        ctrl.pizza = pizza || {};
        ctrl.modalClose = modalClose;


        function modalClose() {
            $modalInstance.close();
        }

    }

}());