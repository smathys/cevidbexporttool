/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.home')
        .controller('HomeCtrl', HomeCtrl);

    // @ngInject
    function HomeCtrl($log,
                      $location,
                      CeviDBService) {

        var LOG = $log.get('HomeCtrl');

        LOG.debug('Entered');


        var self = this;

        self.login = function () {
            CeviDBService.loginUser(self.username, self.password).then(function (res) {

                $location.path('/address');
            }, function (error) {
                LOG.error('An error occurred!', error);
                self.isErrorOccured = true;
                self.errorMsg = error.text;
            });

        };
        self.reset = function(){
            self.password="";
            self.username = "";
            self.isErrorOccured = false;
            self.errorMsg = "";
            $location.path('/home');

        };
    }

}());