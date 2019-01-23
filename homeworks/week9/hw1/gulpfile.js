// var gulp = require('gulp'),
// postcss = require('gulp-postcss');
// var autoprefixer = require('autoprefixer');
// var cssnano = require('cssnano');

// gulp.task('css',function(){
// 	return gulp.src('index.css')
// 	.pipe(postcss([
// 		require('autoprefixer')({browswes:['last 2 versionss']}),
// 		require('cssnano')
// 		]))
// 	.pipe(gulp.dest('main.css'));
// })


var postcss = require('gulp-postcss');
var gulp = require('gulp');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');

gulp.task('css', function () {
    var plugins = [
        autoprefixer({browsers: ['last 1 version']}),
        cssnano()
    ];
    return gulp.src('index.css')
        .pipe(postcss(plugins))
        .pipe(gulp.dest('main.css'));
});