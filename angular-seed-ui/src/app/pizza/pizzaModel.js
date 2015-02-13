/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.pizza.offer')
        .factory('Pizza', Pizza);

    // @ngInject
    function Pizza(
        _,
        $log,
        PizzaRestResource) {

        var LOG = $log.get('Pizza'),
            models = {
                main: []
            };

        return {
            model: models.main,
            models: models,

            findOne: findOne,
            init: init,
            create: create,
            update: update,
            remove: remove
        };

        function init(modelId) {
            return PizzaRestResource.findAll().then(function (response) {
                angular.copy(response,  getModel(modelId));
                LOG.debug('Model initialized: "', modelId ? modelId : 'main', '"', models);
            });
        }

        function findOne(pizzaId, modelId) {

            LOG.debug('Find one', pizzaId);
            return init(modelId).then(function() {
                return _.find(getModel(modelId), function(pizza) {
                    return pizza.id === pizzaId;
                });
            });
        }

        function create(pizza, modelId) {
            return PizzaRestResource.create(pizza).then(function (pizzaId) {
                init(modelId);
            });
        }

        function update(pizza, modelId) {
            return PizzaRestResource.update(pizza).then(function () {
                init(modelId);
            });
        }

        function remove(pizza, modelId) {
            return PizzaRestResource.remove(pizza.id).then(function () {
                init(modelId);
            });
        }

        function getModel(modelId) {
            modelId = modelId ? modelId : 'main';
            models[modelId] = models[modelId] ? models[modelId] : [];
            return models[modelId];
        }

    }

}());