var express = require('express');
var app = express();
var fs= require("fs");
var bodyParser = require('body-parser');
var urlencodedParser = bodyParser.
   urlencoded({extended: false });

var port =8081;

app.get('/', function(req,res){
   res.sendFile(__dirname + "/index.html")
});

app.get('/list', function(req, res){
 res.sendfile(__dirname + "/supermercado.json");
});

app.post('/add',urlencodedParser,function(req,res){
   var id = parseInt(req.body.identificador);
   var name = req.body.nombre;
   var price = parseFloat(req.body.precio);
   var avaliable = req.body.disponible;
       if(avaliable=='on'){
           avaliable= true;
       }else{
           avaliable= false;
       }
 //leer el archivo json
   fs.readFile(__dirname + "/supermercado.json",'utf8',function(err,data){
   		//convertir string json en objeto
       var object = JSON.parse(data);

       //añadir una nueva propiedad al objeto
       object['producto'+id] = {
           "id": id,
           "nombre": name,
           "precio": price,
           "disponible": avaliable,
       }

       //volvemos a convertir el objeto en un string json
       var json=JSON.stringify(object,null,2);

       //sobreescribimos el archivo .json con el nuevo string json
       fs.writeFile(__dirname + "/supermercado.json",json);
       res.end(json);
   });
});

app.get('/delete/:id', urlencodedParser, function (req, res) {
	//leer archivo json
	fs.readFile(__dirname + "/supermercado.json",'utf8',function(err,data){
		//convertir string Json en objeto
		var object = JSON.parse(data);

		//eliminaos la proiedad "productoX"
		delete object['producto' + req.params.id]

		//volvemos a convertir el objeto en un string json
		var json = JSON.stringify(object, null, 2);

		//sobreescribimos el archivo .json con el nuevo string json
		fs.writeFile( __dirname + "/" +"supermercado.json", json);
	});


});

app.get('/seleccion/:id', urlencodedParser,function(req,res) {
  

      });



app.get('*', function(req, res) {  
    res.sendfile('./public/index.html');                
});

app.listen(port, function(){
       console.log('App listening on port '+port);
});