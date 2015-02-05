/*
 * grunt-contrib-copy
 *
 * https://github.com/gruntjs/grunt-contrib-copy
 *
 * Copy files and folders
 */
module.exports.tasks = {
    copy: {
        vendor: {
            files: [
                {src: ['<%= build.dev.src.vendor.js %>'], dest: '<%= build.dev.dir %>/js/vendor', expand: true, flatten: true },
                {src: ['<%= build.dev.src.vendor.images %>'], dest: '<%= build.dev.dir %>/images', expand: true, flatten: true },
                {cwd: '<%= build.dev.src.vendor.workaround.obliqueuiFonts.cwd %>', src: ['<%= build.dev.src.vendor.workaround.obliqueuiFonts.src %>'], dest: '<%= build.dev.dir %>/fonts', expand: true, flatten: false }
            ]
        },
        app_assets: {
            files: [
                {cwd: '<%= build.dev.src.app.images.cwd %>', src: ['<%= build.dev.src.app.images.src %>'], dest: '<%= build.dev.dir %>/images', expand: true },
                {cwd: '<%= build.dev.src.app.fonts.cwd %>', src: ['<%= build.dev.src.app.fonts.src %>'], dest: '<%= build.dev.dir %>/fonts', expand: true }
            ]
        },
        app_src: {
            files: [
                {cwd: '<%= build.dev.src.app.js.cwd %>', src: ['<%= build.dev.src.app.js.src %>'], dest: '<%= build.dev.dir %>/js', expand: true },
                {cwd: '<%= build.dev.src.app.i18n.cwd %>', src: ['<%= build.dev.src.app.i18n.src %>'], dest: '<%= build.dev.dir %>/i18n', expand: true },
                {src: ['<%= build.dev.src.app.index %>'], dest: '<%= build.dev.dir %>', expand: true, flatten: true },
                {src: ['<%= build.dev.src.app.config.dev %>'], dest: '<%= build.dev.dir %>/js/', expand: true, flatten: true, rename: function(dest, src) {
                    return dest + src.replace(/dev\.js/, "js");
                }}
            ]
        },
        prod: {
            files: [
                {src: ['<%= build.dev.src.app.index %>'], dest: '<%= build.prod.dir %>', expand: true, flatten: true},
                {cwd: '<%= build.dev.dir %>', src: ['fonts/**/*.*'], dest: '<%= build.prod.dir %>', expand: true },
                {cwd: '<%= build.dev.dir %>', src: ['i18n/**/*.*'], dest: '<%= build.prod.dir %>', expand: true },
                {cwd: '<%= build.dev.dir %>', src: ['images/**/*.*'], dest: '<%= build.prod.dir %>', expand: true },
                {src: ['<%= build.dev.src.app.config.prod %>'], dest: '<%= build.dev.dir %>/js/', expand: true, flatten: true, rename: function(dest, src) {
                    return dest + src.replace(/prod\.js/, "js");
                }}
            ]
        }
    }
};
