var gulp = require('gulp');
var nunjucksRender = require('gulp-nunjucks-render');
var data = require('gulp-data');

gulp.task('default', function () {
  return gulp.src('pages/*.nunjucks')
    // Adding data to Nunjucks
    .pipe(data(function() {
      return require('./data.json')
    }))
    .pipe(nunjucksRender({
      path: ['templates/'] // String or Array 
    }))
    .pipe(gulp.dest('./'));
});