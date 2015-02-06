module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);

    var buildConfig = grunt.util._.extend({ pkg: grunt.file.readJSON("package.json") }, require('./grunt/variables.js')),
        taskConfig = require('load-grunt-configs')(grunt, buildConfig);
    grunt.initConfig(grunt.util._.extend(buildConfig, taskConfig));

    grunt.registerTask('default', [ 'dev' ]);
    grunt.registerTask('index', [
        'copy:app_index',
        'replace',
        'wiredep'
    ]);
    grunt.registerTask('dev_build', [
        'clean',
        'jshint',
        'copy:app_js',
        'copy:app_i18n',
        'copy:app_config',
        'copy:app_assets',
        'less:vendor',
        'less:app',
        'autoprefixer',
        'html2js',
        'ngAnnotate',
        'index',
        'karma:continuous'
    ]);

    grunt.registerTask('dev', [
        'dev_build',
        'configureProxies:dev',
        'connect:dev_vendor',
        'connect:dev',
        'watch'
    ]);
    grunt.registerTask('prod', [
        'prod_build',
        'connect:prod:keepalive'
    ]);

    grunt.registerTask('prod_build', [
        'dev_build',
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
        'prod_build',
        'angular_architecture_graph'
    ]);

};
