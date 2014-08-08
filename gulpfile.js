var	gulp      = require('gulp'),
	minifyCSS = require('gulp-minify-css'),
	less      = require('gulp-less'),
	path      = require('path'),
	concat    = require('gulp-concat'),
	uglify    = require('gulp-uglify'),
	notify    = require('gulp-notify');

gulp.task('concat', function() {
  gulp.src([
  	'./bower_components/angular/angular.js',
  	'./bower_components/angular-bootstrap/ui-bootstrap.js',
  	'./bower_components/angular-bootstrap/ui-bootstrap-tpls.js',
  	'./app/assets/scripts/*.js'])
    .pipe(concat('built.js'))
    .pipe(gulp.dest('./public/assets/scripts'))
    .pipe(notify('Concat complete'))
});

gulp.task('uglify', function(){
  gulp.src('./public/assets/scripts/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('./public/assets/scripts/compress'))
    .pipe(notify('Uglify complete'));
});

gulp.task('less', function () {
  gulp.src('./app/assets/styles/styles.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest('./public/assets/styles'))
    .pipe(notify('LESS complete'));
});

gulp.task('compress', function(){
	gulp.src('./public/assets/styles/styles.css')
		.pipe(minifyCSS())
		.pipe(gulp.dest('./public/assets/styles/compress'))
		.pipe(notify('MinifyCSS complete'));
});

gulp.task('prod', ['concat','less','uglify','compress']);

gulp.task('watch', function(){
	gulp.watch('./app/assets/styles/*.less', ['less']);
	gulp.watch('./app/assets/scripts/extra.js', ['concat']);
});

gulp.task('default', ['watch']);