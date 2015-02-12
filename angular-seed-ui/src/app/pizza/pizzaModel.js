/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.pizza.offer')
        .factory('Pizza', Pizza);

    // @ngInject
    function Pizza() {

        var pizzaModel = [];

        return {
            model: pizzaModel,

            init: init,
            create: create,
            update: update,
            remove: remove
        };

        function init() {
            // rest
            pizzaModel.push(
                { name: 'Salami',    weight: 350, price: 15,    ingredient: ['salami', 'cheese']},
                { name: 'Proschuto', weight: 370, price: 16,    ingredient: ['ham', 'cheese', 'oregano']},
                { name: 'Tunani',    weight: 320, price: 17.50, ingredient: ['tuna', 'cheese', 'olives']},
                { name: 'Diabloni',  weight: 450, price: 18.50, ingredient: ['salami', 'chilly', 'cheese']},
                { name: 'Sedlackis', weight: 500, price: 22,    ingredient: ['salami', 'bacon', 'cheese', 'eggs']}
            );
        }

        function create() {

        }

        function update() {

        }

        function remove() {

        }

    }

}());