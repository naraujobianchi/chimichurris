module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Watch task for changes
        watch: {
            scripts: {
                files: ['assets/src/js/**/*.js'],
                tasks: ['jshint', 'uglify', 'concat']
            },
            styles: {
                files: ['assets/src/css/**/*.less'],
                tasks: ['less:production']
            },
            images: {
                files: ['assets/src/images/**/*.{png,jpg,gif}'],
                tasks: ['imagemin:assets']
            },
            webfonts: {
                files: ['assets/src/fonts/**/*.{ttf,otf,woff,eot,svg}'],
                tasks: ['copy:webfonts']
            }
        },

        // JSHint task for app modules
        jshint: {
          files: ['Gruntfile.js', 'src/**/*.js', 'test/**/*.js'],
          options: {
            reporterOutput: '',
            globals: {
              jQuery: true
            }
          }
        },

        // Uglify task to package all JS
        uglify: {

            app_modules: {
                files: [
                    {
                        expand: true,
                        cwd: 'assets/src/js',
                        src: ['**/*.js'],
                        dest: 'assets/dist/js'
                    }
                ]
            },

            vendor_packages: {
                files: [
                    {
                        src: 'node_modules/curl-amd/dist/curl/curl.js',
                        dest: 'assets/dist/vendor/curl/curl.js'
                    },
                    {
                        src: 'node_modules/domready/src/ready.js',
                        dest: 'assets/dist/vendor/domready/ready.js'
                    },
                    {
                        src: 'node_modules/GroundworkJS/dist/groundwork.js',
                        dest: 'assets/dist/vendor/groundwork/groundwork.js'
                    },
                    {
                        src: 'node_modules/jquery/dist/jquery.min.js',
                        dest: 'assets/dist/vendor/jquery/jquery.js'
                    },
                    {
                        src: 'node_modules/slick-carousel/slick/slick.min.js',
                        dest: 'assets/dist/vendor/slick/slick.js'
                    },
                    {
                        src: 'node_modules/scrollreveal/dist/scrollreveal.min.js',
                        dest: 'assets/dist/vendor/scrollreveal/scrollreveal.js'
                    },
                    {
                        src: 'node_modules/readmore-js/readmore.min.js',
                        dest: 'assets/dist/vendor/readmore/readmore.js'
                    }

                ]
            }
        },

        // LESS task
        less: {
            production: {
                options: {
                    compress: true,
                    yuicompress: true
                },
                files: [
                    {
                        expand: true,
                        cwd: 'assets/src/css',                        
                        src: '*.less',
                        dest: 'assets/dist/css',
                        ext: '.css'
                    }
                ]
            }
        },

        // Concat task
        concat: {
            bundle: {
                src: [
                    'assets/dist/vendor/domready/ready.js',
                    'assets/dist/vendor/curl/curl.js',
                    'assets/dist/vendor/groundwork/groundwork.js',
                    'assets/dist/js/app.js'
                ],
                dest: 'assets/dist/js/bundle.js'
            }
        },

        // Copy task
        copy: {
            assets: {
                expand: true,
                cwd: 'assets/src/images',
                src: ['**/*.{jpg,png,gif}'],
                dest: 'assets/dist/images'
            },
            webfonts: {
                expand: true,
                cwd: 'assets/src/fonts',
                src: ['**/*.{ttf,otf,woff,eot,svg}'],
                dest: 'assets/dist/fonts'
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['jshint', 'uglify', 'concat', 'less', 'copy']);
    grunt.registerTask('dev', ['watch', 'jshint', 'uglify', 'concat', 'less', 'copy']);

};
