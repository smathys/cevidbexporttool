'use strict';

/**
 * @ngdoc overview
 * @name ceviDbExportToolApp
 * @description
 * # ceviDbExportToolApp
 *
 * Main module of the application.
 */
angular
  .module('ceviDbExportToolApp', [
    'ngRoute'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/login.html',
        controller: 'LoginCtrl as loginCtrl'
      })
      .when('/address-list', {
        templateUrl: 'views/address-list.html',
        controller: 'MainCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
