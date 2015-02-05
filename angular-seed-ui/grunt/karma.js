/*
 * grunt-karma
 *
 * https://github.com/karma-runner/grunt-karma
 *
 * Grunt plugin for Karma test runner
 */
module.exports.tasks = {
    karma: {
        options: {
            files: [
                '<%= build.dev.src.vendor.js %>',
                '<%= build.dev.src.app.test.vendor %>',
                '<%= build.dev.src.app.test.configAndTempaltes %>',
                '<%= build.dev.src.app.test.modules %>',
                '<%= build.dev.src.app.test.src %>',
                '<%= build.dev.src.app.test.spec %>'
            ],
            frameworks: ['jasmine'],
            reporters: ['spec'],
            plugins: [
                'karma-jasmine',
                'karma-spec-reporter',
                'karma-chrome-launcher',
                'karma-phantomjs-launcher'
            ]
        },
        unit: {
            browsers: ['Chrome'],
            logLevel: 'info',
            background: true
        },
        continuous: {
            browsers: ['PhantomJS'],
            logLevel: 'info',
            singleRun: true
        }
    }
};