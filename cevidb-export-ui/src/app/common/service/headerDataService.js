/* global angular */
(function () {
  "use strict";

  angular
    .module('cevidb-export.common')
    .factory('HeaderDataService', HeaderDataService);

  // @ngAnnotate
  function HeaderDataService($http, $q, HeaderDataResource, $log, PromiseService) {

    var LOG = $log.get('HeaderDataService');

    function initWords() {
      return HeaderDataResource.findAll();
    }

    return {
      initCeviWords: initWords
    };

  }

}());
