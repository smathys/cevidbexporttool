/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.home', [
            'ui.router'
        ])

        .config(config);

    // @ngInject
    function config($stateProvider) {
        $stateProvider.state('app.home', {
          url: '^/home',
          views:{
            'content@': {
              controller: 'HomeCtrl',
              controllerAs: 'ctrl',
              templateUrl: 'home/home.tpl.html'
            }
          }
        });
    }

}());
