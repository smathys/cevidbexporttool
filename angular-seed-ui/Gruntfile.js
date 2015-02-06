module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);

    var buildConfig = grunt.util._.extend({ pkg: grunt.file.readJSON("package.json") }, require('./grunt/variables.js')),
        taskConfig = require('load-grunt-configs')(grunt, buildConfig);

    grunt.initConfig(grunt.util._.extend(buildConfig, taskConfig));

    grunt.registerTask('default', [ 'serve' ]);
    grunt.registerTask('dev', [
        'clean',
        'jshint',
        'copy:vendor',
        'copy:app_index',
        'copy:app_js',
        'copy:app_i18n',
        'copy:app_config',
        'copy:app_assets',
        'less:vendor',
        'less:app',
        'autoprefixer',
        'html2js',
        'ngAnnotate',
        'karma:continuous'
    ]);

    grunt.registerTask('serve', [
        'dev',
        'connect:dev',
        'watch'
    ]);
    grunt.registerTask('serveprod', [
        'prod',
        'connect:prod:keepalive'
    ]);

    grunt.registerTask('prod', [
        'dev',
        'copy:prod',
        'imagemin',
        'useminPrepare',
        'concat:generated',
        'cssmin:generated',
        'uglify:generated',
        'filerev',
        'usemin',
        'jsbeautifier:config'
    ]);

    grunt.registerTask('architecture', [
        'prod',
        'angular_architecture_graph'
    ]);

};
