/*
 * grunt-usemin
 *
 * https://github.com/yeoman/grunt-usemin
 *
 * Replaces references from non-optimized scripts, stylesheets and other assets
 * to their optimized version within a set of HTML files (or any templates/views).
 */
module.exports.tasks = {
    useminPrepare: {
        html: '<%= build.dev.dir %>/index.html',
        options: {
            dest: '<%= build.prod.dir %>',
            staging: '<%= build.dev.dir %>/usemin',
            flow: {
                steps: {
                    js: ['concat', 'uglifyjs'],
                    css: ['cssmin']
                },
                post: {
                    js: [{
                            name: 'uglify',
                            createConfig: function (context, block) {
                                var generated = context.options.generated;
                                generated.options = {
                                    preserveComments: 'some'
                                };
                            }
                    }]
                }
            }
        }
    },

    usemin: {
        html: '<%= build.prod.dir %>/index.html',
        options: {
            assetsDirs: ['<%= build.prod.dir %>']
        }
    },

    filerev: {
        options: {
            encoding: 'utf8',
            algorithm: 'md5',
            length: 8
        },
        js: {
            src: '<%= build.prod.dir %>/js/*.*'
        },
        styles: {
            src: '<%= build.prod.dir %>/styles/*.*'
        }
    }
};