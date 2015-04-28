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
    var DB_SERVICE_LOGIN_URL = "https://db.cevi.ch/users/sign_in.json";
    var DB_SERVICE_DELETE_TOKERN_URL = "https://db.cevi.ch/users/token.json";
    //"group 1" is Cevi Schweiz
    var DB_SERVICE_PERSON_DETAILS_URL = "https://db.cevi.ch/groups/1/people/";

    var _testGroups = [
      {"id": "187", "group_type": "Ortsgruppe", "name": "Embrach-Oberembrach", "short_name": "EMB"},
      {"id": "100", "group_type": "Ortsgruppe", "name": "Illnau", "short_name": "ILL"},
      {"id": "101", "group_type": "Ortsgruppe", "name": "Kloten", "short_name": "KLO"},
      {"id": "102", "group_type": "Ortsgruppe", "name": "Lufingen", "short_name": "LUF"},
      {"id": "103", "group_type": "Ortsgruppe", "name": "Bülach", "short_name": "BUL"}
    ];

    var _isTestUser = false;
    var _user =
      { };
    var _groups;

    function searchAllMyGroups() {
      return $http.get( DB_SERVICE_PERSON_DETAILS_URL +_user.id + ".json?user_email=" +_user.username+"&user_token=" +_user.userToken
      ).then( function (response){
        if (response.data.Error){
          return $q.reject({test: response.data.Error});
        }else {
          _groups = response.data.linked.groups;
          return _groups;
        }

      }, handleHttpError);
    }

    function loginUser(username, pw) {
      _user.username = username;
      _user.pw = pw;
      if (username === "test") {
        _isTestUser = true;
        return $q.when("login successfull");
      } else {
          return $http.post(DB_SERVICE_LOGIN_URL + "?person[email]=" + _user.username + "&person[password]="+ _user.pw ).then(function (response) {
          if (response.data.Error) {
            return $q.reject({text: response.data.Error});
          } else {
            _user.userToken = response.data.people[0].authentication_token;
            _user.id = response.data.people[0].id;
            return response.data;
          }
        }, handleHttpError);
      }

    }

    function logoutUser(){
      return $http.delete(DB_SERVICE_DELETE_TOKERN_URL+"?person[email]=" +_user.username + "&person[password]=" + _user.pw).then(function (response){
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
