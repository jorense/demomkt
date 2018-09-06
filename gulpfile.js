// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifyCss = require('gulp-minify-css');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var autoprefixer = require('gulp-autoprefixer');

//Compile & Minify CSS
gulp.task('sass', function () {
    gulp.src(['scss/*.scss', 'scss/**/*.scss'])
    .pipe(concat('all.scss'))
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(minifyCss())
    .pipe(concat('style.css'))
    .pipe(rename({
        basename: 'style',
        extname: '.min.css'
    }))
    .pipe(gulp.dest('dist/css'));
});

// Lint Task
gulp.task('lint', function() {
    return gulp.src('js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('js/*.js')
      .pipe(concat('all.js'))
      .pipe(rename('all.min.js'))
      .pipe(uglify())
      .pipe(gulp.dest('dist/js'));
});

// Optimize Images
gulp.task('image', function() {
    return gulp.src('dist/images/**/*')
    .pipe(imagemin({
      progressive: true,
      optimizationLevel: 5,
      use: [pngquant()],
      svgoPlugins: [{removeViewBox: true}]
    }))
    .pipe(gulp.dest('dist/images'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('scss/*.scss', ['sass']);
    gulp.watch('js/*.js', ['lint', 'scripts']);
    // gulp.watch('dist/images/**/*', ['image']);
});

// Default Task
gulp.task('default', ['sass', 'lint', 'scripts', 'watch']);
