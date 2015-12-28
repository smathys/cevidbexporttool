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
      },
      resolve: {
        groupeDataObj: function (CeviDBService) {
          return CeviDBService.searchAllMyGroups().then(function (res){
            return res;
          });
        },
        memberPropertiesObj: function(CeviDBService){
          var properties = [];
          angular.forEach(CeviDBService.getMemberProperties(), function (key) {
            properties.push({'key': key, isShown: false});
          });
          return properties;
        }
      }
    });
  }

}());
