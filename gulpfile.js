let gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    del = require('del'),
    autoprefixer = require('gulp-autoprefixer');





gulp.task('browser-sync', function() {
    browserSync({
        proxy: "http://localhost/svg_project_sunmoon/app/",
        options: {
            reloadDelay: 250
        },
        open: true,
        baseDir: "app/",
        notify: false
    });
});


/*
gulp.task('sass', function() {
    return gulp.src('app/sass/**.sass')
    .pipe(sass())
    .pipe(gulp.dest('app/css/*.css'))

}); */

gulp.task('clean', function() {
    return del.sync('dist');
});

gulp.task('watch', ['browser-sync'], function() {

    gulp.watch('app/sass/**/*.sass', ['sass']);
    gulp.watch("app/*.php").on("change", browserSync.reload)
    gulp.watch('app/css/*.css').on("change", browserSync.reload);
    gulp.watch('app/js/*.js', browserSync.reload);
});

gulp.task('build', ['clean'], function() {
    
    let buildCss = gulp.src('app/css/main.css')
    .pipe(gulp.dest('dist/css'));

    let buildJs = gulp.src('app/js/common.js')
    .pipe(gulp.dest('dist/js'));

    let buildFonts = gulp.src('app/fonts/**/*')
    .pipe(gulp.dest('dist/fonts'));

    let buildPhp = gulp.src('app/*.php')
    .pipe(gulp.dest('dist'));
});

gulp.task("default", ["build"]);