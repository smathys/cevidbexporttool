/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')
        .factory('FileService', function () {

            return {
                getFormatedFileSize: getFormatedFileSize
            };

            function getFormatedFileSize(fileSizeInBytes) {
                var KBs = (fileSizeInBytes / 1024).toFixed(2),
                    MBs = (KBs / 1024).toFixed(2),
                    GBs = (MBs / 1024).toFixed(2);
                return GBs > 1 ? GBs +  ' GBs' : MBs > 1 ? MBs + ' MBs' : KBs + ' KBs';
            }

        });

}());