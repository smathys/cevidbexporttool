/*
 * grunt-contrib-jshint
 *
 * https://github.com/gruntjs/grunt-contrib-jshint
 *
 * Validate files with JSHint
 */
module.exports.tasks = {
    jshint: {
        all: ['Gruntfile.js', 'src/**/*.js', 'grunt/**/*.js'],
        options: {
            sub:true
        }
    }
};