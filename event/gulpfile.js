var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    minifyCss = require('gulp-minify-css'),
    browserSync = require('browser-sync'),
    connect = require('gulp-connect-php'),
    imagemin = require('gulp-imagemin'),
    watchify = require('watchify'),
    source = require("vinyl-source-stream"),
    browserify = require('browserify');

var reload = browserSync.reload;

gulp.task('server', ['scripts', 'styles'], function() {
    connect.server({
        ini: '/Applications/MAMP/bin/php/php5.6.2/conf/php.ini' // custom php.ini 
    }, function() {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });
    gulp.watch(['**/*.html', '**/*.php', '_js/*.js', '_css/*.css']).on('change', reload);
    gulp.watch('_assets/js/*.js', ['scripts']);
    gulp.watch('_assets/scss/*.scss', ['styles']);
});

// Script Task
// Uglifies
gulp.task('scripts', function() {
    gulp.src('_assets/js/*.js')
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('_js'));
});

// Styles Task
// Scss
gulp.task('styles', function() {
    gulp.src("_assets/scss/*.scss")
        .pipe(plumber())
        .pipe(sass())
        // .pipe(concatCss("main.css"))
        .pipe(minifyCss({ compatibility: 'ie8' }))
        .pipe(gulp.dest("_css"));
});

// Image Task
// Compress
gulp.task('image', function() {
    gulp.src('_assets/images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('_images'));
});

gulp.task('default', ['server']);
