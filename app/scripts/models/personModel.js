(function () {
  "use strict";

  angular.module('ceviDbExportToolApp')
    .factory('Person', Person);

  var Person = function Person( ){

    this.id = '';
    this.first_name = '';
    this.last_name = '';
    this.nickname = '';
    this.company_name = '';
    this.company = '';
    this.email = '';
    this.address = '';
    this.zip_code = '';
    this.town = '';
    this.country = '';
    this.picture = '';
    this.birthday = '';
    this.gender = '';
    this.additional_information = '';
    this.title = '';
    this.profession = '';
    this.j_s_number = '';
    this.ahv_number = '';
    this.ahv_number_old = '';
    this.salutation_parents = '';
    this.name_parents = '';
    this.member_card_number = '';
    this.nationality = '';
    this.salutation = '';
    this.correspondence_language = '';
    this.canton = '';
    this.confession = '';
    this.phone_arbeit = '';
    this.phone_fax = '';
    this.phone_mobil = '';
    this.phone_privat = '';
    this.phone_vater = '';
    this.phone_mutter = '';
    this.phone_andere = '';

    /*email Arbeit
    email Cevi
    email Privat
    skype
    twitter
    webseite*/
  };

  Person.prototype = {
    transformToModel: function(jsonResult){
      var personObj = jsonResult.people[0];
      this.additional_information = personObj.additional_information;
      this.address = personObj.address;
      this.ahv_number = personObj.ahv_number;
      this.ahv_number_old = personObj.ahv_number_old;
      this.birthday = personObj.birthday;
      this.canton = personObj.canton;
      this.company = personObj.company;
      this.company_name = personObj.company_name;
      this.confession = personObj.confession;
      this.correspondence_language = personObj.correspondence_language;
      this.country = personObj.country;
      this.email = personObj.email;
      this.first_name = personObj.first_name;
      this.gender = personObj.gender;
      this.id = personObj.id;
      this.j_s_number = personObj.j_s_number;
      this.last_name = personObj.last_name;
      this.member_card_number = personObj.member_card_number;
      this.name_parents = personObj.name_parents;
      this.nationality = personObj.nationality;
      this.nickname = personObj.nickname;

      /*angular.forEach(personObj.linked.phone_numbers, function (phone_number) {
        if (phone_number.label)
      };*/


    }
  };

}());
