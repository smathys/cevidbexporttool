/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.home')
        .controller('TopNavDataCtrl', TopNavDataCtrl);

    // @ngInject
    function TopNavDataCtrl(TopNavDataService, $log) {

        var LOG = $log.get('TopNavDataCtrl');

        LOG.debug('Entered');


        var self = this;
        self.words = TopNavDataService.getCeviWords();


    }

}());