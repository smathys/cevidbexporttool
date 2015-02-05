/*
 * grunt-autoprefixer
 *
 * https://github.com/nDmitry/grunt-autoprefixer
 *
 * Autoprefixer parses CSS and adds vendor-prefixed CSS properties
 */
module.exports.tasks = {
    autoprefixer: {
        options: {
            browsers: ['> 1%', 'last 2 versions', 'ie >= 9']
        },
        app: {
            src: '<%= build.dev.dir %>/styles/main.css',
            dest: '<%= build.dev.dir %>/styles/main.css'
        }
    }
};