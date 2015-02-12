/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')

        .directive('orderByControls', function ($compile) {
            return {
                restrict: 'A',
                scope: {
                    orderByControls: '=',
                    orderByProperty: '@'
                },
                link: function (scope, element, attrs) {

                    element.addClass("pointer unselectable");

                    var tempalteCaretDown = '<i ng-show="orderByControls.sort.predicate === \'' + scope.orderByProperty +
                        '\' && showCaret(\'down\')" class="fa fa-caret-down opacity-40"></i>';

                    var tempalteCaretUp = '<i ng-show="orderByControls.sort.predicate === \'' + scope.orderByProperty +
                        '\' && showCaret(\'up\')" class="fa fa-caret-up opacity-40"></i>';

                    var tempalteCaretNeutral = '<i ng-show="showCaret(\'neutral\')" class="fa fa-sort opacity-40"></i>';

                    element.append(tempalteCaretDown);
                    element.append(tempalteCaretUp);
                    element.append(tempalteCaretNeutral);
                    $compile(element.contents())(scope);

                    element.bind('click', function() {
                        scope.$apply(function() {
                            scope.orderByControls.sort.predicate = scope.orderByProperty;
                            if (scope.orderByControls.sort.reverse === '') {
                                scope.orderByControls.sort.reverse = false;
                                return;
                            }
                            if (scope.orderByControls.sort.reverse === false) {
                                scope.orderByControls.sort.reverse = true;
                                return;
                            }
                            if (scope.orderByControls.sort.reverse === true) {
                                scope.orderByControls.sort.reverse = '';
                                scope.orderByControls.sort.predicate = '';
                                return;
                            }
                        });
                    });

                    scope.showCaret = function(type) {
                        var isDown = type === 'down';
                        if (type === 'neutral') {
                            return scope.orderByControls.sort.reverse === '' || scope.orderByControls.sort.predicate !== scope.orderByProperty ;
                        } else {
                            if (scope.orderByControls.sort.reverse === '') {
                                return false;
                            }
                            return scope.orderByControls.sort.reverse === false ? !isDown : isDown;
                        }

                    };

                }
            };
        })
        .directive('pagingControls', function () {
            return {
                restrict: 'A',
                controllerAs: 'pagingCtrl',
                scope: {
                    pagingControls: '='
                },
                template:
                    '<div class="row">' +
                        '<div class="col-xs-4">' +
                        '</div>' +
                        '<div class="col-xs-4">' +
                            '<button type="button" class="btn btn-default" ng-disabled="pagingCtrl.prevDisabled()" ng-click="pagingCtrl.prev()">' +
                                '<i class="fa fa-chevron-left"></i>' +
                            '</button> ' +
                            '<button type="button" class="btn btn-default disabled">' +
                                '{{pagingControls.page.current + 1}} / {{pagingControls.page.count}}' +
                            '</button> ' +
                            '<button type="button" class="btn btn-default" ng-disabled="pagingCtrl.nextDisabled()" ng-click="pagingCtrl.next()">' +
                                '<i class="fa fa-chevron-right"></i>' +
                            '</button>' +
                        '</div>' +
                        '<div class="col-xs-4">' +
                            '<select style="width: 80px;" class="form-control pull-right" ng-model="pagingControls.page.size" ng-change="pagingCtrl.updatePageCount()">' +
                                '<option value="1">1</option>' +
                                '<option value="2">2</option>' +
                                '<option value="5">5</option>' +
                                '<option value="10">10</option>' +
                                '<option value="20">20</option>' +
                                '<option value="50">50</option>' +
                                '<option value="100">100</option>' +
                            '</select>' +
                            '<span class="pull-right" style="text-align: right; padding-top: 8px; padding-right: 10px;">' +
                                '{{"common.paging.itemsPerPage" | translate}}' +
                            '</span>' +
                        '</div>' +
                    '</div>',
                controller: function($scope) {

                    var ctrl = this;

                    ctrl.prev = function() {
                        $scope.pagingControls.page.current--;
                    };

                    ctrl.next = function() {
                        $scope.pagingControls.page.current++;
                    };

                    ctrl.prevDisabled = function() {
                        return $scope.pagingControls.page.current === 0;
                    };

                    ctrl.nextDisabled = function() {
                        return $scope.pagingControls.page.current >= $scope.pagingControls.page.count - 1;
                    };

                    ctrl.updatePageCount = function() {
                        $scope.pagingControls.page.current = 0;
                        $scope.pagingControls.page.count = Math.ceil($scope.pagingControls.data.length / $scope.pagingControls.page.size);
                    };

                    $scope.$watchCollection(function() {
                        return $scope.pagingControls.data;
                    }, function(value) {
                        $scope.pagingControls.page.count = Math.ceil(value.length / $scope.pagingControls.page.size);
                        if ($scope.pagingControls.page.current > $scope.pagingControls.page.count) {
                            $scope.pagingControls.page.current--;
                        }
                    });

                }
            };
        })

        .filter('startFrom', function() {
            return function(array, startIndex) {
                startIndex = +startIndex;
                return array.slice(startIndex);
            };
        })

        .directive('pagingControlsBackend', function ($compile) {
            return {
                restrict: 'A',
                controllerAs: 'pagingCtrl',
                scope: {
                    pagingControlsBackend: '=',
                    pagingControlsBackendChange: '&'
                },
                template:
                    '<div class="row">' +
                        '<div class="col-xs-2">' +
                        '</div>' +
                        '<div class="col-xs-8">' +
                            '<button type="button" class="btn btn-default" ng-disabled="pagingCtrl.prevDisabled()" ng-click="pagingCtrl.prev()">' +
                                '<i class="fa fa-chevron-left"></i>' +
                            '</button> ' +
                            '<button type="button" class="btn btn-default disabled">' +
                                '{{pagingCtrl.getCurrentPage() + 1}} / {{pagingControlsBackend.totalPages}}' +
                            '</button> ' +
                            '<button type="button" class="btn btn-default" ng-disabled="pagingCtrl.nextDisabled()" ng-click="pagingCtrl.next()">' +
                                '<i class="fa fa-chevron-right"></i>' +
                            '</button>' +
                        '</div>' +
                        '<div class="col-xs-2">' +
                            '<select style="width: 80px;" class="form-control pull-right" ng-model="pagingControlsBackend.size" ' +
                                'ng-change="pagingCtrl.resolvePageSizeChange()">' +
                                '<option value="1">1</option>' +
                                '<option value="2">2</option>' +
                                '<option value="5">5</option>' +
                                '<option value="10">10</option>' +
                                '<option value="20">20</option>' +
                                '<option value="50">50</option>' +
                                '<option value="100">100</option>' +
                            '</select>' +
                        '</div>' +
                    '</div>',
                controller: function($scope) {

                    var ctrl = this;

                    ctrl.prev = function() {
                        $scope.pagingControlsBackendChange({ page: getCurrentPage() - 1, size: getCurrentSize() });
                    };

                    ctrl.next = function() {
                        $scope.pagingControlsBackendChange({ page: getCurrentPage() + 1, size: getCurrentSize() });
                    };

                    ctrl.prevDisabled = function() {
                        return $scope.pagingControlsBackend.first;
                    };

                    ctrl.nextDisabled = function() {
                        return $scope.pagingControlsBackend.last;
                    };

                    ctrl.resolvePageSizeChange = function() {
                        $scope.pagingControlsBackendChange({ page: getCurrentPage(), size: getCurrentSize() });
                    };

                    ctrl.getCurrentPage = getCurrentPage;

                    function getCurrentPage() {
                        return parseInt($scope.pagingControlsBackend.number, 10);
                    }

                    function getCurrentSize() {
                        return parseInt($scope.pagingControlsBackend.size, 10);
                    }

                }
            };
        });


}());
