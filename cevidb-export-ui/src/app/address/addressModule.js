/* global angular */
(function () {
  "use strict";

  angular
    .module('cevidb-export.address', [
      'ui.router'
    ])

    .config(config);

  // @ngInject
  function config($stateProvider) {

    $stateProvider.state('app.address', {
      url: '^/address',
      views: {
        'content@': {
          controller: 'AddressCtrl',
          controllerAs: 'ctrl',
          templateUrl: 'address/address.tpl.html'
        }
      }
    });
  }

}());
