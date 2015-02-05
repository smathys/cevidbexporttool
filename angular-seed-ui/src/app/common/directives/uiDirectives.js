/* global angular */
(function () {
    "use strict";

    angular.module('angular-seed.common')

        .directive('emptyMessage', function ($compile) {
            return {
                restrict: 'A',
                transclude: true,
                scope: {
                  emptyMessageIcon: '@'
                },
                template:
                    '<span class="text-muted">' +
                        '<i class="fa fa-margin-right {{iconName}}"></i>' +
                        '<span ng-transclude></span>' +
                    '</span>',
                link: function (scope, element, attrs) {
                    if (scope.emptyMessageIcon && scope.emptyMessageIcon.length !== 0 ) {
                        scope.iconName = scope.emptyMessageIcon;
                    } else {
                        scope.iconName = 'fa-times';
                    }
                }
            };
        });

}());
