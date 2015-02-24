module.exports = function(grunt) {

  grunt.registerTask('default', ['browserSync', 'watch']);
  grunt.registerTask('test', ['newer:imagemin', 'concat:js', 'uglify:js', 'sass:style', 'autoprefixer:no_dest_multiple', 'criticalcss:custom']);

  grunt.initConfig({
    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: '../../../uploads',
          src: '**/*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}',
          dest: '../../../uploads'
        }]
      }
    },
    concat: {
      js: {
        options: {
          separator: ';'
        },
        src: ['../core/js/*.js', '../js/helper.js', '../js/plugins.js', '../js/acf-google-maps.js', '../js/main.js'],
        /* add moar js here, but keep main.js last */
        dest: '../js/concat/main.js'
      }
    },
    uglify: {
      options: {
        mangle: false
      },
      js: {
        files: {
          '../js/compiled/main.min.js': ['../js/concat/main.js']
        }
      }
    },
    sass: {
      style: {
        options: {
          outputStyle: 'compressed',
          sourceMap: true
        },
        files: {
          "../css/master.css": "../scss/master.scss",
          "../css/ie.css": "../scss/ie.scss",
          "../css/login.css": "../scss/login.scss"
        } /* add moar master files here */
      }
    },
    autoprefixer: {
      options: {
        browsers: ['last 4 versions', 'Firefox ESR', 'Opera 12.1'],
        map: true
      },
      no_dest_multiple: {
        src: '../css/*.css'
      }
    },
    criticalcss: {
      custom: {
        options: {
          url: "http://localhost:3000",
          width: 1200,
          height: 900,
          outputfile: "../css/critical.css",
          filename: "../css/master.css",
          buffer: 800 * 1024,
          ignoreConsole: false
        }
      }
    },
    watch: {
      files: ['Gruntfile.js'],
      html: {
        files: ['../*.html']
      },
      php: {
        files: ['../*.php']
      },
      images: {
        files: ['../../../uploads/**/*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}'],
        options: {
          debounceDelay: 15000
        },
        tasks: ['newer:imagemin']
      },
      js: {
        files: ['../js/*.js', '../js/vendor/*.js'],
        tasks: ['concat:js', 'uglify:js'],
        options: {
          interrupt: true
        }
      },
      css: {
        files: ['../scss/**/*.scss'],
        tasks: ['sass:style', 'autoprefixer:no_dest_multiple', 'criticalcss:custom'],
        options: {
          interrupt: true
        }
      }
    },
    browserSync: {
      files: ['../*.html', '../*.php', '../../../uploads/**/*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}', '../js/concat/main.js', '../css/*.css'],
      options: {
        proxy: "localhost:7888",
        watchTask: true,
        tunnel: true,
        ghostMode: false
      }
    }
  });

  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-criticalcss');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');

};