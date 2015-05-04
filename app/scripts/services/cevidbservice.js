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
    var DB_SERVICE_PERSON_IN_GROUP_URL = "https://db.cevi.ch/groups/";


    var _testGroups = [
      {"id": "187", "group_type": "Ortsgruppe", "name": "Embrach-Oberembrach", "short_name": "EMB"},
      {"id": "100", "group_type": "Ortsgruppe", "name": "Illnau", "short_name": "ILL"},
      {"id": "101", "group_type": "Ortsgruppe", "name": "Kloten", "short_name": "KLO"},
      {"id": "102", "group_type": "Ortsgruppe", "name": "Lufingen", "short_name": "LUF"},
      {"id": "103", "group_type": "Ortsgruppe", "name": "Bülach", "short_name": "BUL"}
    ];

    var _isTestUser = false;
    var _user =
    {};
    var _groups;
    var _keys;

    /*
     TODO: evtl. bei groups mit group_type=Mitglierder
     die Gruppe in der hierarchie eins oberhalb suchen und diesen Namen anzeigen, wegen Mitglier, Mitglieder in der Gruppen-Selection-List
     */
    function searchAllMyGroups() {

      return getAllMemberDetails(_user.id).then(function (response) {
        _groups = response.linked.groups;
        _keys = Object.keys(response.people[0]).filter(function (e) {
          return e !== "links" && e !== "joined" && e !== "created_at" && e !== "updated_at" && e !== "type"
        });
        _keys.sort();
        return _groups;
      }, function (error) {
        $q.reject(error);
      });
    }


    /*$http.get('/my-first-url').then(function (results) {
      return $http.get('/my-second-url')
    }).then(function (results) {
      // results here are the results of the GET to /my-second-url
    });*/

    function getAllMembersOfGroup(groupID) {
      $http.get(DB_SERVICE_PERSON_IN_GROUP_URL + groupID + "/people.json?user_email=" + _user.username + "&user_token=" + _user.userToken).then(function (response) {
        if (response.data.Error) {
          return $q.reject({test: response.data.Error});
        } else {
          var _people = [];
          var promises = [];
          angular.forEach(response.data.people, function (member) {
            promises.push(getAllMemberDetails(member.id));
          });
          $q.all(promises).then(function (response) {
            angular.forEach(response, function (res) {
              _people.push(res.people[0]);
            });
            return _people;
          }).then(function (result) {
            return result;
          });

        }
      });
    }

    function getAllMemberDetails(memberID) {

      return $http.get(DB_SERVICE_PERSON_DETAILS_URL + memberID + ".json?user_email=" + _user.username + "&user_token=" + _user.userToken).then(function (response) {
        if (response.data.Error) {
          return $q.reject({text: response.data.Error});
        } else {
          return response.data;
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
        return $http.post(DB_SERVICE_LOGIN_URL + "?person[email]=" + _user.username + "&person[password]=" + _user.pw).then(function (response) {
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

    function logoutUser() {

      return $http.delete(DB_SERVICE_DELETE_TOKERN_URL + "?person[email]=" + _user.username + "&person[password]=" + _user.pw).then(function (response) {
        if (response.data.Error) {
          return $q.reject({text: response.data.Error});
        } else {
          return response.data;
        }
      }, handleHttpError);
    }

    function getKeys() {
      return _keys;
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
      getAllMembersOfGroup: getAllMembersOfGroup,
      getMemberProperties: getKeys,
      loginUser: loginUser,
      logoutUser: logoutUser

    };
  }
)
;
