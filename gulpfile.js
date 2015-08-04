var gulp = require('gulp'),
	browserSync = require('browser-sync').create(),
	sass  = require('gulp-sass'),
	prefix = require('gulp-autoprefixer'),
	plumber = require('gulp-plumber');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

		browserSync.init({
				proxy: "localhost/learningomnivores"
		});

		gulp.watch("sass/**/*.scss", ['sass']);
		gulp.watch("*.php").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
		return gulp.src("sass/**/*.scss")
				.pipe(plumber())
				.pipe(sass())
				.pipe(prefix("last 1 version", "> 1%", "ie 8", "ie 7"))
				.pipe(gulp.dest(""))
				.pipe(browserSync.stream());
});

gulp.task('default', ['serve']);