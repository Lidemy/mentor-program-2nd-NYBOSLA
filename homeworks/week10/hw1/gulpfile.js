var gulp = require('gulp');
var babel = require('gulp-babel');
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");
var sass = require("gulp-sass");
var uglify = require("gulp-uglify");



// 測試是否成功的語法
// gulp.task('default',function(){
// 	console.log("hello gulp");
// })



// js用babel轉成es5
gulp.task('babel',function(){
	return gulp.src('js/all.js')
	.pipe(babel('all.js'))
	.pipe(gulp.dest('build/js'))
})

// sass轉成css的task
gulp.task('css',function(){
	return gulp.src('css/style.scss')
	.pipe(sass().on('error',sass.logError))
	.pipe(gulp.dest('build/css'));

})
// 壓縮css檔案
// 建立minify-css任務，然後rename 壓縮檔案
gulp.task('minify-css',['css'],function(){
	return gulp.src('build/css/style.css')
	.pipe(cleanCSS({
		compatibility:'ie8'
	}))
	.pipe(rename(function(path){
		path.basename +=".min";
		path.extname =".css";

	}))
	.pipe(gulp.dest('build/css'));
});

// 壓縮js檔案
gulp.task('uglify',function(){
	return gulp.src('js/all.js')
	.pipe(uglify())
	.pipe(rename(function(path){
		path.basename +=".min";
		path.extname = ".js";
	}))
	.pipe(gulp.dest('build/js/'));
})


gulp.task('default',['babel','css','minify-css','uglify']);