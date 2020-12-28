'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-dart-sass');


gulp.task('sass', function () {
  const opsi = {
  	// outputStyle: 'compressed'
  }
  return gulp.src('./public/sass/**/*.scss')
    .pipe(sass(opsi).on('error', sass.logError))
    .pipe(gulp.dest('./public/css/'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./public/sass/**/*.scss', ['sass']);
});


// copy bootstrap js
