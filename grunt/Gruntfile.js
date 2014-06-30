module.exports = function(grunt) {

    grunt.registerTask('default', [ 'watch' ]);
    
    grunt.initConfig({
        concat: {
            js: {
                options: {
                    separator: ';'
                },
                src: ['../core/js/*.js', '../js/helper.js', '../js/plugins.js', '../js/main.js'], /* add moar js here, but keep main.js last */
                dest: '../js/concat/main.js'
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            js: {
                files: {
                    '../js/compiled/main.min.js' : ['../js/concat/main.js']
                }
            }
        },
        sass: {
            style: {
                options: {
                    style: 'compressed'
                },
                files: {
                    "../css/master.css" : "../scss/master.scss",
                    "../css/ie.css" : "../scss/ie.scss",
                    "../css/login.css" : "../scss/login.scss"
                } /* add moar master files here */
            }
        },
        autoprefixer: {
            options: {
                browsers: ['last 4 versions', 'Firefox ESR', 'Opera 12.1']
            },
            no_dest_multiple: {
                src: '../css/*.css'
            }
        },
        watch: {
            options: {
                livereload: true
            },
            files: ['Gruntfile.js'],
            html: {
                files: ['../*.html']
            },
            php: {
                files: ['../*.php']
            },
            js: {
                files: ['../js/*.js', '../js/vendor/*.js'],
                tasks: ['concat:js', 'uglify:js']
            },
            css: {
                files: ['../scss/**/*.scss'],
                tasks: ['sass:style', 'autoprefixer:no_dest_multiple']
            }
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');

};