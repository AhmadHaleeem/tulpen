var config = {
    browserUri: 'http://tulpen.beeldr',
    browserOpen: true,
};

// This shows a full config file!
module.exports = function (grunt) {

    require('time-grunt')(grunt);
    grunt.initConfig({

        watch: {
            sass: {
                files: 'scss/*.scss',
                tasks: ['sass', 'postcss'],
            },
            jsdev: {
                files: ['js/*'],
                tasks: ['concat']
            },

            jsprod: {
                files: ['js/min/*'],
                tasks: ['uglify']
            }

        },

        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')({
                        browsers: 'last 2 versions'
                    }),
                    require('lost'),
                    require('cssnano')({
                        options: {
                            sourcemap: true
                        },
                    }),

                ]
            },

            dist: {
                files: {
                    'css/style.min.css': 'css/style.css'
                },
                src: 'css/*.css'
            },


        },

        sass: {
            dev: {
                options: {
                    outputStyle: 'nested',
                    sourceMap: true
                },
                files: [{
                    expand: true,
                    cwd: 'scss',
                    src: ['*.scss'],
                    dest: 'css',
                    ext: '.css'
                }]
            },
        },

        concat: {
            js: {
                src: [
                    'js/*.js',
                    '!js/main.js',
                    'js/main.js'
                ],
                dest: 'js/min/main.js'
            }
        },

        uglify: {
            js: {
                files: {
                    'js/min/main.min.js': ['js/min/main.js']
                }
            }
        },

        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'css/*.css',
                        '../pages/*.htm',
                        '../pages/*/*.htm',
			'../layouts/*.htm',
			'../partials/*.htm'
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: config.browserUri,
                    browserOpen: config.browserOpen
                }
            }
        }
    });

    // load npm tasks

    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-stylelint');
    grunt.registerTask('default', ['browserSync', 'watch']);

};

