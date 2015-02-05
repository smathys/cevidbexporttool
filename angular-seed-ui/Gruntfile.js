module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);

    var buildConfig = {
        pkg: grunt.file.readJSON("package.json")
    };
    buildConfig = grunt.util._.extend(buildConfig, require('./grunt/variables.js'));
    var taskConfig = require('load-grunt-configs')(grunt, buildConfig);


    grunt.initConfig(grunt.util._.extend(taskConfig, buildConfig));

    grunt.registerTask('default', [ 'serve' ]);
    grunt.registerTask('dev', [
        'clean',
        'jshint',
        'copy:vendor',
        'copy:app_src',
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
        // 'imagemin',          disabled until GLIBC_2.14 is available in CI environment
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
