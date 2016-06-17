module.exports = function(grunt) {

	grunt.registerTask('default', ['browserSync', 'watch']);
	grunt.registerTask('test', ['newer:imagemin', 'concat:js', 'uglify:js', 'sass:style', 'postcss:no_dest_multiple']);

	grunt.initConfig({
		imagemin: {
			dynamic: {
				files: [{
					expand: true,
					cwd: '../../../../uploads',
					src: '**/*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}',
					dest: '../../../../uploads'
				}]
			}
		},
		concat: {
			js: {
				options: {
					separator: ';'
				},
				src: ['../core/js/*.js', '../js/plugins.js', '../js/acf-google-maps.js', '../js/main.js'], // add moar js here, but keep main.js last
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
					"../css/login.css": "../scss/login.scss" // add moar master files here
				}
			}
		},
		postcss: {
			options: {
				map: true,
				processors: [
					require('autoprefixer')({
						browsers: ['last 4 versions', 'Firefox ESR', 'Opera 12.1']
					})
				]
			},
			no_dest_multiple: {
				src: '../css/*.css'
			}
		},
		watch: {
			files: ['Gruntfile.js'],
			html: {
				files: ['../../**/*.html']
			},
			php: {
				files: ['../../**/*.php']
			},
			images: {
				files: ['../../../../uploads/**/*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}'],
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
				tasks: ['sass:style', 'postcss:no_dest_multiple'],
				options: {
					interrupt: true
				}
			}
		},
		browserSync: {
			files: ['Gruntfile.js', '../../**/*.html', '../../**/*.php', '../../../../uploads/**/*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}', '../js/concat/main.js', '../css/*.css'],
			options: {
				proxy: "localhost:8888", // change this to match your host
				watchTask: true
			}
		}
	});

	require('jit-grunt')(grunt);

};
