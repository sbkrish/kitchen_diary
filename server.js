// server.js
// where your node app starts

// init project
var express = require('express');
var app = express();
var requestPromise=require('request-promise');

// we've started you off with Express, 
// but feel free to use whatever libs or frameworks you'd like through `package.json`.

// http://expressjs.com/en/starter/static-files.html
app.use(express.static('public'));

// http://expressjs.com/en/starter/basic-routing.html
app.get("/", function (request, response) {
  response.sendFile(__dirname + '/views/index.html');
});

app.get("/getsql", function (request, response) {
 const requestOptions={
 uri:'https://hungers.epizy.com/data.json',
   json:true
 };
  
  requestPromise(requestOptions)
  .then(function(data){
    console.log(data);
    response.json({
 
 "messages": [
   {"text": data[0].messenger_id},
   {"text": data[0].first_name},
   {"text": data[0].last_name},
   {"text": data[0].email_address},
      {"text": data[0].phone_number}


   
 ]
         


      


      
    });
  });
});
        


// listen for requests :)
var listener = app.listen(process.env.PORT, function () {
  console.log('Your app is listening on port ' + listener.address().port);
});


