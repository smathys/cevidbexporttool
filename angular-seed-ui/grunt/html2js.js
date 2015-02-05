/*
 * html2js
 *
 * https://github.com/karlgoldstein/grunt-html2js
 *
 * Converts AngularJS templates to JavaScript
 */
module.exports.tasks = {
    html2js: {
        app: {
            options: {
                base: '<%= build.dev.src.app.templates.base %>'
            },
            src: [ '<%= build.dev.src.app.templates.src %>' ],
            dest: '<%= build.dev.dir %>/js/templates-app.js'
        }
    }
};