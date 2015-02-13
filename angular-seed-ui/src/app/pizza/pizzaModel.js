/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.pizza.offer')
        .factory('Pizza', Pizza);

    // @ngInject
    function Pizza(
        $log,
        PizzaRestResource) {

        var LOG = $log.get('Pizza'),
            models = {
                main: []
            };

        return {
            model: models.main,
            models: models,

            init: init,
            create: create,
            update: update,
            remove: remove
        };

        function init(modelId) {
            return PizzaRestResource.findAll().then(function (response) {
                angular.copy(response,  models[modelId ? modelId : 'main']);
                LOG.debug('Model initialized', models);
            });
        }

        function create(pizza, modelId) {

        }

        function update(pizza, modelId) {

        }

        function remove(pizza, modelId) {

        }

    }

}());