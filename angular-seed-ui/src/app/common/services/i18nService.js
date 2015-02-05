/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')

        .factory('I18nFormatService', function() {

            var dateFormat = 'dd.MM.yyyy',
                dateTimeFormat = 'dd.MM.yyyy  -  HH:mm',
                dateTimeLongFormat = 'dd.MM.yyyy  -  HH:mm:ss';

            return {
                format: {
                    date: dateFormat,
                    dateTime: dateTimeFormat,
                    dateTimeLong: dateTimeLongFormat
                }
            };

        });

}());