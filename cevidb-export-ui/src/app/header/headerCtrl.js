/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.header',[])
        .controller('HeaderCtrl', HeaderCtrl);

    // @ngInject
    function HeaderCtrl(HeaderDataService, $log) {

        var LOG = $log.get('HeaderCtrl');

        LOG.debug('Entered');

        var self = this;

        self.words = HeaderDataService.getCeviWords();

    }

}());
