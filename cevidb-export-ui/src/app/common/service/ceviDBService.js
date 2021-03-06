/* global angular */
(function () {
  "use strict";

  angular
    .module('cevidb-export.common')
    .factory('CeviDBService', CeviDBService);

  // @ngAnnotate
  function CeviDBService($http, $q) {

    var DB_SERVICE_LOGIN_URL = "https://db.cevi.ch/users/sign_in.json";
    var DB_SERVICE_DELETE_TOKERN_URL = "https://db.cevi.ch/users/token.json";
    var DB_SERVICE_PERSON_DETAILS_URL = "https://db.cevi.ch/groups/1/people/";  //"group 1" is Cevi Schweiz
    var DB_SERVICE_PERSON_IN_GROUP_URL = "https://db.cevi.ch/groups/";


    var _isTestUser = false;
    var _user =
    {};
    var _groups;
    var _keys;

    return {
      searchAllMyGroups: searchAllMyGroups,
      getAllMembersIDsOfGroup: getAllMembersIDsOfGroup,
      getMemberDetails: getMemberDetails,
      getMemberProperties: getDetailKeys,
      loginUser: loginUser,
      logoutUser: logoutUser
    };


    /*
     TODO: evtl. bei group_type=Mitglieder
     die Gruppe in der hierarchie eins oberhalb suchen und diesen Namen anzeigen, wegen Mitglier, Mitglieder in der Gruppen-Selection-List
     */
    function searchAllMyGroups() {

      return getMemberDetails(_user.id).then(function (response) {
        _groups = response.linked.groups;
        var personObj = response.people[0];
        _keys = Object.keys(response.people[0]).filter(function (e) {
          return e !== "links" && e !== "joined" && e != "href" && e !== "created_at" && e !== "updated_at" && e !== "type";
        });

        angular.forEach(response.linked.phone_numbers, function (phone_number) {
          _keys.push("phone " + phone_number.label);
        });

        angular.forEach(response.linked.additional_emails, function (mail) {
          _keys.push("email " + mail.label);
        });

        angular.forEach(response.linked.social_accounts, function (account) {
          _keys.push(account.label.toLowerCase());
        });

        _keys.sort();

        return _groups;
      }, function (error) {
        $q.reject(error);
      });
    }

    function getAllMembersIDsOfGroup(groupID) {
      return $http.get(DB_SERVICE_PERSON_IN_GROUP_URL + groupID + "/people.json?user_email=" + _user.username + "&user_token=" + _user.userToken).then(function (response) {
        if (response.data.Error) {
          return $q.reject({text: response.data.Error});
        } else {
          var _IDs = [];
          angular.forEach(response.data.people, function (person) {
            _IDs.push(person.id);
          });
          return _IDs;
        }
      }, handleHttpError);
    }

    function getMemberDetails(memberID) {

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

    function logoutUser() {

      return $http.delete(DB_SERVICE_DELETE_TOKERN_URL + "?person[email]=" + _user.username + "&person[password]=" + _user.pw).then(function (response) {
        if (response.data.Error) {
          return $q.reject({text: response.data.Error});
        } else {
          return response.data;
        }
      }, handleHttpError);
    }

    function getDetailKeys() {
      return _keys;
    }

    function handleHttpError(httpError) {

      var error = {};
      if (httpError.statusText) {
        error.text = httpError.statusText;
      } else {
        error.text = 'Connection error, please try later';
      }
      return $q.reject(error);
    }

  }

}());
