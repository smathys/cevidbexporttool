/* global angular */
(function () {
  "use strict";

  angular
    .module('cevidb-export.common')
    .factory('HeaderDataService', HeaderDataService);

  // @ngAnnotate
  function HeaderDataService($http, $q, HeaderDataResource, $log) {

    var LOG = $log.get('HeaderDataService');
    var _ceviWords = HeaderDataResource.findAll();

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

    function getWords() {
      return _ceviWords;
    }

    return {
      initCeviWords: shuffle,
      getCeviWords: getWords

    };

  }

}());
