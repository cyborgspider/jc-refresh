var gulp        = require('gulp');
var $           = require('gulp-load-plugins')({lazy:true});
var browserSync = require('browser-sync');
var nib         = require('nib');
var jeet        = require('jeet');
var clean       = require('del');

gulp.task('server', function(){
	 browserSync({
		  server:{
			   baseDir: "./build/"
		  }
	 })
});

gulp.task('style', function(){
	 return gulp
		  .src('./styles/styles.styl')
		  .pipe($.stylus({
			   compress:true,
			   use: [nib(), jeet()]
		  }))
		  .pipe(gulp.dest('./build/css'))
});

gulp.task('jade', function(){
	 return gulp
		  .src(!'./inc.*.jade', './*.jade')
		  .pipe($.jade())
		  .pipe(gulp.dest('./build'))
});

gulp.task('clean', function(){
	 return gulp
		  .clean('./build', {read:false})
});

gulp.task('copy', function(){
	gulp
		.src('./scripts/scripts.js')
		.pipe(gulp.dest('./build/js/'));
	gulp
		.src('./images/*')
		.pipe(gulp.dest('./build/img/'));
});

gulp.task('default', ['jade', 'style', 'copy'], function(){
	 console.log('Cleaning and building...');
});
gulp.task('watch', function(){
	gulp.watch('./index.jade', ['jade']);
	gulp.watch('./styles/*.styl', ['style']);
	gulp.watch('./scripts/**/*.js', ['copy']);
});