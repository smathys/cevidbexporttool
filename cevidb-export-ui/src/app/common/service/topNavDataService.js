/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.common')
        .factory('TopNavDataService', TopNavDataService);

    // @ngAnnotate
    function TopNavDataService($http, $q, NavDataRestResource, $log) {

        var LOG = $log.get('TopNavDataService');
        var _ceviWords = NavDataRestResource.findAll();

        /* randomize array element order in-place.
         using Fisher-Yates shuffle algoithm
         */
        function shuffle() {
            for (var i = _ceviWords.length - 1; i > 0; i--) {
                var j = Math.floor(Math.random() * (i + 1));
                var temp = _ceviWords[i];
                _ceviWords[i] = _ceviWords[j];
                _ceviWords[j] = temp;
            }
            return _ceviWords;
        }

        return {
            getCeviWords: shuffle
        };

    }

}());