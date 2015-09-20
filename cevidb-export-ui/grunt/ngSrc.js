/*
 * html2js
 *
 * https://github.com/karlgoldstein/grunt-html2js
 *
 * Converts AngularJS templates to JavaScript
 */
module.exports.tasks = {
    ngsrc: {
        options: {
            moduleDiscriminator: 'Module.js',
            path: 'js/'
        },
        target: {
            cwd: 'src',
            src: ['app/**/*.js', '!app/**/*.spec.js'],
            dest: ['<%= build.dir.dev %><%= build.index %>']
        }
    }
};