const http = require('http');
const url = require('url');
const fs = require('fs');
const port = 8888;

const server = http.createServer(onRequest).listen(port);

function onRequest(request, response) {
	const path = url.parse(request.url).path;

	switch (path) {
		case '/home':
			home({response: response});
			break;
		case '/getData':
			getData({response: response});
			break;
		default:
			defaultResponse({response: response});
			break;
	}
}

function home(param) {
	let response = param.response;
	const html = fs.readFileSync('test.html').toString();
	response.writeHead(200, {'Content-Type': 'text/html'});
	response.end(html);
	console.log('/home');
}

function getData(param) {
	let response = param.response;
	const json = '{"name": "Nick Palmer", "class": "cs313"}';
	response.writeHead(200, {'Content-Type': 'application/json'});
	response.end(json);
	console.log('/getData');
}

function defaultResponse(param) {
	let response = param.response;
	response.writeHead(404, {'Content-Type': 'text/plain'});
	response.end();
	console.log('Page not found');
}

console.log('Server running at http://localhost:8888/');