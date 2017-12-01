var gulp = require('gulp'),
	plumber = require('gulp-plumber'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	cssmin = require('gulp-cssmin'),
    imagemin = require('gulp-imagemin'),
    imageminPngquant = require('imagemin-pngquant'),
    rename = require("gulp-rename");


// Watch tasks

gulp.task('cssCompile', function () {
	gulp.src('./dist/css/sass/**/*.scss')
		.pipe(plumber())
		.pipe(sass())
		.pipe(rename('style.css'))
		.pipe(gulp.dest('./'));
});


gulp.task('watch', function(){
	gulp.watch('./dist/css/sass/**/*.scss', ['cssCompile']);
});

gulp.task('default', ['cssCompile', 'watch']);




// Prod tasks

gulp.task('cssMin', function () {
	gulp.src('./dist/css/sass/**/*.scss')
		.pipe(plumber())
		.pipe(sass())
        .pipe(autoprefixer({
            browsers: ['> 0.1% in FR'],
            remove: false
        }))
		.pipe(cssmin())
		.pipe(rename('style.css'))
		.pipe(gulp.dest('./'));
});


gulp.task('imgMin', function () {
    gulp.src('./dist/img/**/*.*')
        .pipe(imagemin({
            progressive: true,
            use: [imageminPngquant()]
        }))
        .pipe(gulp.dest('./dist/img'));
});

gulp.task('imagesMin', function () {
    gulp.src('./dist/images/**/*.*')
        .pipe(imagemin({
            progressive: true,
            use: [imageminPngquant()]
        }))
        .pipe(gulp.dest('./dist/images'));
});