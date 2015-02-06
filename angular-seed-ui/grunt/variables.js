/*
 * Paths used in grunt tasks
 */
module.exports = {

    config: {
        gruntfile: 'Gruntfile.js',
        src: "grunt/**/*.js",

        usemin: 'usemin'
    },

    build: {
        dir: {
            dev: 'build_dev/',
            prod: 'build_prod/'
        },
        js: {
            dir: '/js/',
            files: 'js/app/**/*.js',
            filerev: 'js/*.*'
        },
        index: 'index.html',
        config: 'config.js',
        images: '/images/',
        imagesFiltered: 'images/**/*.{png,jpg,gif}',
        fonts: '/fonts/',
        i18n: '/i18n/',
        assets: ['fonts/**/*.*', 'i18n/**/*.*', 'images/**/*.*'],
        vendor: '/js/vendor/',
        styles: {
            main: 'styles/main.css',
            vendor: 'styles/vendor.css',
            filerev: '/styles/*.*'
        },
        templates: '/js/templates-app.js'
    },

    src: {
        index: 'src/index.html',
        config: {
            dev: 'src/config/config.dev.js',
            prod: 'src/config/config.prod.js'
        },
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
        }
    },

    vendor: {
        js: [
            'vendor/jquery/dist/jquery.js',
            'vendor/lodash/lodash.min.js',
            'vendor/moment/moment.js',
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
            'vendor/angular-dialog-service/dist/dialogs.min.js'
        ]
    },

    test: {
        vendor:     'vendor/angular-mocks/angular-mocks.js',
        config:     'build_dev/config.js',
        templates:  'build_dev/js/templates-app.js',
        modules:    'build_dev/js/app/**/*Module.js',
        src:        'build_dev/js/app/**/*.js',
        spec:       'build_dev/js/app/**/*.spec.js'
    }

};
