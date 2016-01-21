var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var browserSync = require('browser-sync').create();

var AUTOPREFIXER_BROWSERS = [
  'ie >= 10',
  'ie_mob >= 10',
  'ff >= 30',
  'chrome >= 34',
  'safari >= 7',
  'opera >= 23',
  'ios >= 7',
  'android >= 4.4',
  'bb >= 10'
];

gulp.task('images', function() {
  return gulp.src('../../../uploads/**/*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}')
    .pipe($.newer('../../../uploads'))
    .pipe($.imagemin())
    .pipe(gulp.dest('../../../uploads'))
    .pipe(browserSync.stream());
});

gulp.task('javascript', function() {
  return gulp.src(['../core/js/*.js', '../js/helper.js', '../js/plugins.js', '../js/acf-google-maps.js', '../js/main.js'])
    .pipe($.concat('main.js', {
      newLine: ';'
    }))
    .pipe(gulp.dest('../js/concat/'))
    .pipe($.uglify(false))
    .pipe($.rename('main.min.js'))
    .pipe(gulp.dest('../js/compiled'))
    .pipe(browserSync.stream());
});

gulp.task('styles', function() {
  return gulp.src(['../scss/master.scss', '../scss/ie.scss', '../scss/login.scss'])
    .pipe($.sourcemaps.init())
    .pipe($.sass())
    .pipe($.autoprefixer({
      browsers: AUTOPREFIXER_BROWSERS
    }))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('../css'))
    .pipe(browserSync.stream());
});

gulp.task('watch', function() {
  gulp.watch(['../*.html', '../*.php', '../layouts/*.php']).on('change', browserSync.reload);
  gulp.watch(['../../../uploads/**/*'], ['images']);
  gulp.watch(['../js/*.js', '../js/vendor/*.js'], ['javascript']);
  gulp.watch(['../scss/**/*.scss'], ['styles']);
});

gulp.task('browserSync', function() {
  browserSync.init({
    proxy: 'localhost:8888', // change this to match your host
    watchTask: true
  });
});

gulp.task('default', ['browserSync', 'watch']);