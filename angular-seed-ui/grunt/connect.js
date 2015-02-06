/*
 * grunt-contrib-connect
 *
 * https://github.com/gruntjs/grunt-contrib-connect
 *
 * Start a connect web server
 */
module.exports.tasks = {
    connect: {
        dev: {
            options: {
                port: 9000,
                base: '<%= build.dir.dev %>/',
                hostname: 'localhost',
                index: 'index.html'
            }
        },
        prod: {
            options: {
                port: 9000,
                base: '<%= build.dir.prod %>/',
                hostname: 'localhost',
                index: 'index.html'
            }
        }
    }
};
