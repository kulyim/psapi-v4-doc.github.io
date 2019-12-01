const gulp = require('gulp');
//const run = require('gulp-run-command').default;
const cp = require('child_process');

function createApiYaml(cb)
{
	console.log('createApiYaml');
	cb();
}

function compileYaml(cb)
{
	cp.exec('./node_modules/.bin/multi-file-swagger -o yaml api.yaml > compiled.yaml');
	cb();
}

function compileJson(cb)
{
	cp.exec('./node_modules/.bin/multi-file-swagger api.yaml > compiled.json');
	cb();
}

function watch()
{
	return gulp.watch([
		'info/*.yaml',
		'components/*.yaml',
		'paths/*.yaml'
	], compileYaml);
}

exports.default = createApiYaml
exports.watch = watch;
exports.compileYaml = compileYaml;
exports.compileJson = compileJson;
