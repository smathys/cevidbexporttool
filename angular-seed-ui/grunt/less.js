/*
 * grunt-contrib-less
 *
 * https://github.com/gruntjs/grunt-contrib-less
 *
 * Compile LESS files to CSS
 */
module.exports.tasks = {
    less: {
        options: {
            paths: ['src']
        },
        app: {
            files: {
                '<%= build.dev.dir %>/styles/main.css': '<%= build.dev.src.app.styles.main %>'
            }
        },
        vendor: {
            files: {
                '<%= build.dev.dir %>/styles/vendor.css': '<%= build.dev.src.app.styles.vendor %>'
            }
        }
    }
};