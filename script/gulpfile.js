var gulp = require('gulp');
var imageResize = require('gulp-image-resize');


gulp.task('resize', function() {
	gulp.src('big_logo/*.png')
		.pipe(imageResize({
			format: 'gif',
			width: 150,
			height: 150
		}))
		.pipe(gulp.dest('small_logo'));
});