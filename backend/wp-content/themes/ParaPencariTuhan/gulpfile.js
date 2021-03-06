var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var stripCssComments = require('gulp-strip-css-comments');

/* path to custom theme */
var path = 'backend/wp-content/themes/ParaPencariTuhan';

/* ========================================================
 * Tasks with Browser Sync
 * ======================================================== */
gulp.task('browserSync', function() {

    var files = [
        './style.css',
        './*.php',
        './template-parts/*.php'
    ];

    browserSync.init(files, {
        proxy: "http://localhost:8888/ppt/",
        notify: 'false'
    });
});

gulp.task('sass', function() {
    gulp.src('./inc/sass/*.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(rename({basename: 'style'}))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./')) //output the file at root (app/)
        .pipe(reload({ stream: true }));
});

gulp.task('js', function() {
    return gulp.src([
            './node_modules/jquery/dist/jquery.min.js',
            './node_modules/slick-carousel/slick/slick.min.js',
            './inc/js/vendor/*.js',
            './inc/js/main.js'
        ])
        .pipe(concat('main.js'))
        .pipe(gulp.dest('./')) .pipe(reload({ stream: true }));
});


gulp.task('default', ['sass', 'js', 'browserSync'], function() {
    gulp.watch('**/*.scss', {'cwd': './inc/sass/'}, ['sass']);
    gulp.watch('*.scss', {'cwd': './inc/sass/'}, ['sass']);
    gulp.watch('*.js', {'cwd': './inc/js/'}, ['js']);
});
