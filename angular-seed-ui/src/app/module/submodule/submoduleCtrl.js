/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.module.submodule')
        .controller('SubmoduleCtrl', function (
            $log, $state) {

            var LOG = $log.getInstance('SubmoduleCtrl');

            var ctrl = this;

            ctrl.moduleControls = {
                data: ctrl.data ,
                sort: {
                    predicate: '',
                    reverse: false
                },
                page: {
                    current: 0,
                    size: CONFIG.APP_UI_PAGING_PAGESIZE
                }
            };


        });

}());