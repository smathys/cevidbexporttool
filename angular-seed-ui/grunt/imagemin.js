/*
 * grunt-contrib-imagemin
 *
 * https://github.com/gruntjs/grunt-contrib-imagemin
 *
 * Minify images
 */
module.exports.tasks = {
    imagemin: {
        dynamic: {
            files: [{
                expand: true,
                cwd: '<%= build.prod.dir %>',
                src: ['images/**/*.{png,jpg,gif}'],
                dest: '<%= build.prod.dir %>'
            }]
        }
    }
};

