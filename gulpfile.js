/*jslint node: true */
'use strict';


// Define dependencies
var gulp = require('gulp'),
    compile = require('gulp-sass'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    cleancss = require('gulp-clean-css'),
    connect = require('gulp-connect');


// Define paths
var paths = {
  js: [
    './js/lib/jquery-1.12.4.min.js',
    './js/lib/conditionizr-4.3.0.min.js',
    './js/lib/modernizr-2.7.1.min.js',
    './js/lib/bootstrap.min.js',
    './js/lib/jquery.nivo.slider.pack.js',
    './js/lib/endlessRiver.js',
    './js/custom.js'
  ],
  scss:  ['./scss/**/*.scss'],
  img:   ['./img/**/*.{jpg,png,gif,svg}'],
  fonts: ['./fonts/**/*.{ttf,svg,eot,woff,woff2}'],
  php:   ['./**/*.php'],
};


// Connect to server
gulp.task('connect', function() {
  connect.server({
    livereload: true
  });
});


// Compile SASS & minify resulting CSS
gulp.task('sass', function () {
  return gulp.src(paths.scss)
    .pipe(compile().on('error', compile.logError))

    // Turn these on to minify resulting CSS & append '.min' to filename

    // .pipe(cleancss({
      // keepSpecialComments: '0'
    // }))
    // .pipe(rename({
      // suffix: '.min',
    // }))

    .pipe(gulp.dest('./'))
    .pipe(connect.reload())
});


// Concat JS
gulp.task('scripts', function() {
  return gulp.src(paths.js)
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./js/'))
    .pipe(connect.reload());
});


// Manual reload task when PHP changes
gulp.task('reload', function() {
  return gulp.src(paths.php)
  .pipe(connect.reload());
});


// Watch stream paths & re-run task if changes detected
gulp.task('watch', function () {
  gulp.watch(paths.scss, ['sass']);
  gulp.watch(paths.js, ['scripts']);
  gulp.watch(paths.php, ['reload']);
});


// Run default task
gulp.task('default', ['connect', 'sass', 'scripts', 'watch']);
