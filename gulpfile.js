const gulp = require('gulp');
const cp = require('child_process');

function createApiYaml(cb)
{
	compileYaml(cb);
	compileJson(cb);
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
