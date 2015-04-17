'use strict';

/**
 * @ngdoc service
 * @name ceviDbExportToolApp.CeviDBService
 * @description
 * # CeviDBService
 * Service in the ceviDbExportToolApp.
 */
angular.module('ceviDbExportToolApp')
  .factory('CeviDBService', function ($http, $q) {
    // AngularJS will instantiate a singleton by calling "new" on this function

    var groups = [
      {"id":"187","group_type":"Ortsgruppe","name":"Embrach-Oberembrach","short_name":"EMB"},
      {"id":"100","group_type":"Ortsgruppe","name":"Illnau","short_name":"ILL"},
      {"id":"101","group_type":"Ortsgruppe","name":"Kloten","short_name":"KLO"},
      {"id":"102","group_type":"Ortsgruppe","name":"Lufingen","short_name":"LUF"},
      {"id":"103","group_type":"Ortsgruppe","name":"Bülach","short_name":"BUL"}
    ];

    function searchAllMyGroups() {
      //use $q.when to simulate Promise based API
      return $q.when(groups);
    }
    function loginUser(username, pw){
      if ( username === "test" ){
        return $q.when("login successfull");
      }else {
        return $q.reject( "loginError");
      }

    }
    function logoutUser(){

    }

    return {
      searchAllMyGroups: searchAllMyGroups,
      loginUser: loginUser,
      logoutUser: logoutUser
    };
  });
