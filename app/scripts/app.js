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
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
