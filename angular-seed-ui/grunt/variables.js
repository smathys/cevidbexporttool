/*
 * Paths used in grunt tasks
 */
module.exports = {

    config : {
        src: "grunt/**/*.js"
    },

    build: {
        dev: {
            dir: 'build_dev',
            src: {
                app: {
                    config: {
                        dev: 'src/config/config.dev.js',
                        prod: 'src/config/config.prod.js'
                    },
                    index: 'src/index.html',
                    js: {
                        cwd: 'src',
                        src:['app/**/*.js'],
                        full: 'src/app/**/*.js'
                    },
                    images: {
                        cwd: 'src/images',
                        src:['**/*.*'],
                        full: 'src/images/**/**'
                    },
                    fonts: {
                        cwd: 'src/fonts',
                        src: ['**/*.*'],
                        full: 'src/fonts/**/**'
                    },
                    i18n: {
                        cwd: 'src/i18n',
                        src: ['**/*.*'],
                        full: 'src/i18n/**/**'
                    },
                    styles: {
                        main: 'src/styles/main.less',
                        vendor: 'src/styles/vendor.less',
                        all: 'src/styles/**/*.less'
                    },
                    templates: {
                        base: 'src/app',
                        src: ['src/app/**/*.tpl.html']
                    },
                    test: {
                        vendor:             'vendor/angular-mocks/angular-mocks.js',
                        configAndTempaltes: 'build_dev/js/*.js',
                        modules:            'build_dev/js/app/**/*Module.js',
                        src:                'build_dev/js/app/**/*.js',
                        spec:               'build_dev/js/app/**/*.spec.js'
                    }
                },
                vendor: {
                    js: [
                        'vendor/jquery/dist/jquery.js',
                        'vendor/lodash/dist/lodash.js',
                        'vendor/moment/moment.js',
                        'vendor/oblique-ui/dist/js/oblique-ui.js',
                        'vendor/oblique-ui/dist/js/oblique-ui-all.js',
                        'vendor/bootstrap/js/tooltip.js',
                        'vendor/html5shiv/dist/html5shiv.js',
                        'vendor/respond/src/respond.js',

                        'vendor/angular/angular.js',
                        'vendor/angular-upload/angular-upload.js',
                        'vendor/angular-sanitize/angular-sanitize.js',
                        'vendor/angular-animate/angular-animate.js',
                        'vendor/angular-ui-utils/ui-utils.js',
                        'vendor/angular-ui-router/release/angular-ui-router.js',
                        'vendor/angular-bootstrap/ui-bootstrap-tpls.min.js',
                        'vendor/angular-translate/angular-translate.js',
                        'vendor/angular-translate-loader-static-files/angular-translate-loader-static-files.js',
                        'vendor/angular-translate-storage-local/angular-translate-storage-local.js',
                        'vendor/angular-translate-storage-cookie/angular-translate-storage-cookie.js',
                        'vendor/angular-dialog-service/dialogs.js'
                    ],
                    images: [
                        'vendor/oblique-ui/dist/images/*.*'
                    ],
                    workaround: {
                        obliqueuiFonts: {
                            cwd: 'vendor/oblique-ui/dist/fonts/',
                            src: '**/*.*',
                            full: 'vendor/oblique-ui/dist/fonts/**/**'
                        }
                    }
                }
            }
        },
        prod: {
            dir: 'build_prod'
        }
    }

};
