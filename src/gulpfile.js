
// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    babel = require('gulp-babel');

var buildPath = 'resources';
var targetPath = '../web/build';

// error handling
function handleError(err) {
    console.log('ERROR HANDLER: ', err.toString());
    this.emit('end');
}

gulp.task('styles:vendor', function () {
    return gulp.src([
        buildPath + '/sass/vendor/normalize-3.0.2.scss',
        buildPath + '/sass/vendor/foundation/foundation.scss',
        buildPath + '/sass/vendor/foundation/foundation-icons-3.scss',
    ])
        .pipe(sass().on('error', sass.logError))
        .on('error', handleError)

        .pipe(autoprefixer({
            browserslist: [
                'last 2 version',
                'BlackBerry'
            ]
        }))
        .on('error', handleError)

        .pipe(cssnano({
            reduceIdents: false
        }))
        .on('error', handleError)

        .pipe(gulp.dest(targetPath + '/css'))
        .on('error', handleError);
});

gulp.task('styles:build', function () {
    return gulp.src([
        '!' + buildPath + '/sass/vendor/**/*.scss',
        buildPath + '/sass/*.scss',
    ])
        .pipe(sass().on('error', sass.logError))
        .on('error', handleError)

        .pipe(autoprefixer({
            browserslist: [
                'last 2 version',
                'BlackBerry'
            ]
        }))
        .on('error', handleError)

        .pipe(cssnano({
            reduceIdents: false
        }))
        .on('error', handleError)

        .pipe(gulp.dest(targetPath + '/css'))
        .on('error', handleError);
});

gulp.task('scripts:vendor', function () {
    return gulp.src([
        buildPath + '/js/vendor/modernizr-2.8.2.js',
        buildPath + '/js/vendor/jquery-1.12.4.js',
        buildPath + '/js/vendor/jquery-migrate-1.2.1.js',
        buildPath + '/js/vendor/fastclick.js',
        buildPath + '/js/vendor/foundation/*.js',
    ])
        .pipe(uglify())
        .on('error', handleError)

        .pipe(gulp.dest(targetPath + '/js'))
        .on('error', handleError);
});

gulp.task('scripts:build', function () {
    return gulp.src([
        '!' + buildPath + '/js/vendor/**/*.js',
        buildPath + '/js/app.js',
    ])
        .pipe(babel({
            presets: ['es2015']
        }))
        .on('error', handleError)

        .pipe(concat('app.js'))
        .on('error', handleError)

        .pipe(uglify())
        .on('error', handleError)

        .pipe(gulp.dest(targetPath + '/js'))
        .on('error', handleError);
});

gulp.task('fonts', function () {
    return gulp
        .src([
            './' + buildPath + '/fonts/*'
        ])
        .pipe(gulp.dest(targetPath + '/fonts/'))
        .on('error', handleError.bind(this))
});

gulp.task('images', function () {
    return gulp
        .src([
            './' + buildPath + '/images/*'
        ])
        .pipe(gulp.dest(targetPath + '/images/'))
        .on('error', handleError.bind(this))
});

gulp.task('default', function () {
    gulp.start('fonts', 'images', 'styles:vendor', 'styles:build', 'scripts:vendor', 'scripts:build');
});
