var gulp = require('gulp');

var uglify = require('gulp-uglify');

var uglifycss = require('gulp-uglifycss');

var imagemin = require('gulp-imagemin');

gulp.task('default', function () {

	gulp.src('./javascripts/*.js')

	.pipe(uglify())

	.pipe(gulp.dest('./javascripts/min'));

	gulp.src('./stylesheets/*.css')

	.pipe(uglifycss())

	.pipe(gulp.dest('./stylesheets/min'));

	gulp.src('./images/*')

	.pipe(imagemin())

	.pipe(gulp.dest('./images'));
});