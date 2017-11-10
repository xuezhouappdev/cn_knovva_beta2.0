var gulp          = require('gulp');
var browserSync   = require('browser-sync').create();
var connect       = require('gulp-connect-php');
var sass          = require('gulp-sass');
var sourcemaps    = require('gulp-sourcemaps');
var imagemin      = require('gulp-imagemin');

// Static Server + watching scss/html filesgu
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        open: 'external',
        proxy: "http://localhost:8888/cn_knovva_beta2.0/app/",
        port: 8088
    });

    gulp.watch("app/scss/*.scss", ['sass']);
    gulp.watch("app/*/**").on('change', browserSync.reload);
});


// gulp.task('serve', function(){
//
//     browserSync.init({
//         open: 'external',
//         proxy: 'http://localhost:8888/lensworld_wp/',
//         port: 8080
//     });
//



// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("app/scss/*.scss")
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest("app/css"))
        .pipe(browserSync.stream());
});

gulp.task('image', function(){
    gulp.src('app/img/*/*')
        .pipe(imagemin())
        .pipe(gulp.dest('app/img/*/*'));
});



gulp.task('default', ['serve']);