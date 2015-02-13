/* global angular */
(function () {
    "use strict";

    angular
        .module('angular-seed.pizza.designer', [
            'ui.router'
        ])

        .config(config);

    // @ngInject
    function config($stateProvider) {
        $stateProvider
            .state('pizza.designer', {
                url: '/designer',
                controller: 'DesignerCtrl',
                controllerAs: 'ctrl',
                templateUrl: 'pizza/designer/designer.tpl.html',
                resolve: {
                    initPizza: function(Pizza) {
                        return Pizza.init();
                    }
                }
            })

            .state('pizza.designer.add', createModalStateConfig('/add'))
            .state('pizza.designer.edit', createModalStateConfig('/:pizzaId/edit'));

        function createModalStateConfig(url) {
            return {
                url: url,
                onEnter: /* @ngInject */ function($stateParams, $state, $modal, Pizza) {
                    var modalInstance = $modal.open({
                        backdrop: 'static',
                        size: 'lg',
                        controller: 'DesignerModalCtrl as ctrl',
                        templateUrl: 'pizza/designer/designer-modal.tpl.html',
                        resolve: {
                            pizza: function() {
                                return Pizza.findOne($stateParams.pizzaId);
                            }.bind($stateParams)
                        }
                    }).result.then(function() {
                            $state.go('pizza.designer');
                        });

                }
            };
        }

    }

}());