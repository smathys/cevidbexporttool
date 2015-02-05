/*
 * grunt-ngmin
 *
 * https://github.com/btford/grunt-ngmin
 *
 * Grunt plugin for pre-minifying Angular apps. Learn why this is awesome by reading up on the ngmin cli tool
 */
module.exports.tasks = {
    ngAnnotate: {
        build: {
            files: [
                {
                    src:    'js/app/**/*.js',
                    dest:   '<%= build.dev.dir %>',
                    cwd:    '<%= build.dev.dir %>',
                    expand: true
                }
            ]
        }
    }
};