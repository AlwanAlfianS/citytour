var http = require('http');
var fs = require('fs');

var hostname = '127.0.0.1';
var port = 3000;

var server = http.createServer((req, res) => {
    console.log('request was made: ' + req.url);
    
    if(req.url === '/user/1') {
        var data = [{name: 'Alwan', age: 19}];
        res.writeHead(200, {'content-type': 'application/json'});
    res.end(JSON.stringify(data));
    } else if(req.url === '/user/2') {
        var data = [{name: 'Alief', age: 20}];
        res.writeHead(200, {'content-type': 'application/json'});
    res.end(JSON.stringify(data));
    } else {
        res.writeHead(200, {'content-type': 'text/plain'});
        res.end('route undefined');
    }
    
});

server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});