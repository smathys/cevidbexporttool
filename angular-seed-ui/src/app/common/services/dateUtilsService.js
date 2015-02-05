/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')

        .factory('DateTimeUtils', function(
            moment, _) {

            var FORMAT_LOCAL_DATE = 'YYYY-MM-DD',
                FORMAT_LOCAL_DATE_TIME = 'YYYY-MM-DDTHH:mm:ss.SSS';

            return {
                toLocalDate: toLocalDate,
                toLocalDateTime: toLocalDateTime,

                propertiesToLocalDate: propertiesToLocalDate,
                propertiesToLocalDateTime: propertiesToLocalDateTime
            };

            function propertiesToLocalDate(object, properties) {
                return formatDateForProperties(object, properties, FORMAT_LOCAL_DATE);
            }

            function propertiesToLocalDateTime(object, properties) {
                return formatDateForProperties(object, properties, FORMAT_LOCAL_DATE_TIME);
            }

            function formatDateForProperties(object, properties, format) {
                properties.forEach(function(property) {

                    if (!_.isUndefined(object[property]) && object[property] !== null) {
                        object[property] = formatDate(object[property], format);

                    } else if (_.isArray(object)) {
                        object.forEach(function(value, index) {
                            value[property] = formatDate(value[property], format);
                        });
                    }

                });
                return object;
            }

            function toLocalDate(date) {
                return formatDate(date, FORMAT_LOCAL_DATE);
            }

            function toLocalDateTime(date) {
                return formatDate(date, FORMAT_LOCAL_DATE_TIME);
            }

            function formatDate(date, format) {
                if (date) {
                    return moment(date).format(format);
                }
            }

        })

        .factory('MonthDayService', function () {

            return {
                getMonth: getMonth,
                getDay: getDay,
                createMonthDayString: createMonthDayString,
                formatMonthDay: formatMonthDay,
                getLastOccuredDateForMonthDay: getLastOccuredDateForMonthDay
            };

            function getMonth(monthDayString) {
                return parseInt(monthDayString.slice(2).split('-')[0], 10);
            }

            function getDay(monthDayString) {
                return parseInt(monthDayString.slice(2).split('-')[1], 10);
            }

            function formatMonthDay(monthDayString) {
                return getDay(monthDayString) + '. ' + getMonth(monthDayString) + '.';
            }

            function createMonthDayString(month, day) {
                if (!month || !day) {
                    return;
                }
                function prependSingleDigitDate(date) {
                    return date.toString().length > 1 ? date : '0' + date;
                }
                return '--' + prependSingleDigitDate(month) + '-' + prependSingleDigitDate(day);
            }

            function getLastOccuredDateForMonthDay(monthDayString) {
                var now = new Date(),
                    nowYear = now.getFullYear(),
                    nowMonth = now.getMonth() + 1,
                    nowDate = now.getDate();

                // occured previous year
                if (nowMonth < getMonth(monthDayString)) {
                    return createDate(nowYear - 1);

                // occured this year
                } else if(nowMonth > getMonth(monthDayString)) {
                    return createDate(nowYear);

                // occured this or previous year based on specific date
                } else {

                    // occured previous year
                    if (nowDate <= getDay(monthDayString)) {
                        return createDate(nowYear - 1);

                    // occured this year
                    } else {
                        return createDate(nowYear);
                    }
                }

                function createDate(year) {
                    return new Date(year, getMonth(monthDayString) - 1, getDay(monthDayString), 0, 0, 0, 0);
                }

            }
        });

}());