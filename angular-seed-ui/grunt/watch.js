/*
 * grunt-contrib-watch
 *
 * https://github.com/gruntjs/grunt-contrib-watch
 *
 * Run predefined tasks whenever watched file patterns are added, changed or deleted
 */
module.exports.tasks = {
    watch: {
        config: {
            options: { livereload: true },
            files: ['<%= build.dev.src.app.config.dev %>'],
            tasks: ['jshint', 'copy:app_src']
        },
        less: {
            options: { livereload: true },
            files: ['<%= build.dev.src.app.styles.all %>'],
            tasks: ['less:app', 'autoprefixer']
        },
        'copy:vendor': {
            options: { livereload: true },
            files: [
                '<%= build.dev.src.vendor.workaround.obliqueuiFonts.full %>',
                '<%= build.dev.src.vendor.js %>',
                '<%= build.dev.src.vendor.images %>'
            ],
            tasks: ['copy:vendor']
        },
        'copy:app_src': {
            options: { livereload: true },
            files: [
                '<%= build.dev.src.app.js.full %>',
                '<%= build.dev.src.app.i18n.full %>',
                '<%= build.dev.src.app.index %>'
            ],
            tasks: ['jshint', 'copy:app_src']
        },
        'copy:app_assets': {
            options: { livereload: true },
            files: [
                '<%= build.dev.src.app.images.full %>',
                '<%= build.dev.src.app.fonts.full %>'
            ],
            tasks: ['copy:app_assets']
        },
        html2js: {
            options: { livereload: true },
            files: ['<%= build.dev.src.app.templates.src %>'],
            tasks: ['html2js']
        }
    }
};