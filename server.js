var http = require('http');

var Pusher = require('pusher');

var pusher = new Pusher({
  appId: '53117',
  key: '504be0f12afa28255aa5',
  secret: 'ec99e461803130e71e98'
});


function setPosition(response, x, y)
{
    
    pusher.trigger('test_channel', 'my_event', {
      "x": x,
      "y": y
    });
    
    response.write('<h1>Moving cursor to (x='+x+'px, y='+y+'px)</h1>');
}

http.createServer(function (req, response) {
    
  response.writeHead(200, {'Content-Type': 'text/html'});
  
  console.log(req.url);
      
      var queryString = req.url;
      
      var left = queryString.split('/?');
      
      queryString = left[1];
      
      if(queryString)
      {
      
      queryString = queryString.split('&');
      
      var x = queryString[0];
      var y = queryString[1];
      
      console.log('queryStringSTART');
      console.log(queryString);
      console.log('queryStringEND');
        x = x.split('=');
        y = y.split('=');
      
      x = x[1]; 
      y = y[1]; 
      
      setPosition(response, x, y);
      }
  
  response.end('Yay!');
  
}).listen(1337, '127.0.0.1');



console.log('Server running at http://127.0.0.1:1337/');