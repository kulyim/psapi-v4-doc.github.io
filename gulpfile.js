const gulp = require('gulp');
const cp = require('child_process');

function compileYaml(cb)
{
	cp.exec('./node_modules/.bin/speccy -o compiled.yaml api.yaml');
	cb();
}

function lintYaml(cb)
{
	cp.exec('./node_modules/.bin/speccy lint compiled.yaml', (error, stdout, stderr) => {
		if (error) {
			console.error(`exec error: ${error}`);
			return;
		}
		console.log(`stdout: ${stdout}`);
		console.error(`stderr: ${stderr}`);
	});
	cb();
}

function watch()
{
	return gulp.watch([
		'info/*.yaml',
		'components/*.yaml',
		'paths/*.yaml'
	], gulp.series(compileYaml, lintYaml));
}

exports.watch = watch;
exports.compileYaml = compileYaml;
exports.lintYaml = lintYaml;
