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
    var CEVI_DB_SERVICE_LOGIN_URL = "https://db.cevi.ch/users/sign_in.json";
    var CEVI_DB_SERVICE_DELETE_TOKERN_URL = "https://db.cevi.ch/users/token.json";

    var _groups = [
      {"id": "187", "group_type": "Ortsgruppe", "name": "Embrach-Oberembrach", "short_name": "EMB"},
      {"id": "100", "group_type": "Ortsgruppe", "name": "Illnau", "short_name": "ILL"},
      {"id": "101", "group_type": "Ortsgruppe", "name": "Kloten", "short_name": "KLO"},
      {"id": "102", "group_type": "Ortsgruppe", "name": "Lufingen", "short_name": "LUF"},
      {"id": "103", "group_type": "Ortsgruppe", "name": "Bülach", "short_name": "BUL"}
    ];

    var _isTestUser = false;
    var _user =
      {
        "username": "",
          "pw": "",
          "userToken": ""};
    function searchAllMyGroups(

    ) {
      //if( _isTestUser ){
        //use $q.when to simulate Promise based API
        return $q.when(_groups);
      //} else {
      //  $q.reject("no groups available");
      //}
    }

    function loginUser(username, pw) {
      _user.username = username;
      _user.pw = pw;
      if (username === "test") {
        _isTestUser = true;
        return $q.when("login successfull");
      } else {
          return $http.post(CEVI_DB_SERVICE_LOGIN_URL + "?person[email]=" + _user.username + "&person[password]="+ _user.pw ).then(function (response) {
          //return $http.post(CEVI_DB_SERVICE_LOGIN_URL, {params: {person[email]:  username }, {person[password]: pw}} ).then(function (response) {
          if (response.data.Error) {
            return $q.reject({text: response.data.Error});
          } else {
            _user.userToken = response.data.people[0].authentication_token;

            return response.data;
          }
        }, handleHttpError);
      }

    }

    function logoutUser(){
      return $http.delete(CEVI_DB_SERVICE_DELETE_TOKERN_URL+"?person[email]=" +_user.username + "&person[password]=" + _user.pw).then(function (response){
        if (response.data.Error) {
          return $q.reject({text: response.data.Error});
        } else {
            return response.data;
          }
        }, handleHttpError);
      }


    function handleHttpError(httpError) {
      var error = {};
      if (httpError.statusText) {
        error.text = httpError.statusText;
      } else {
        error.text = 'Connection error';
      }
      return $q.reject(error);
    }

    return {
      searchAllMyGroups: searchAllMyGroups,
      loginUser: loginUser,
      logoutUser: logoutUser
    };
  });
