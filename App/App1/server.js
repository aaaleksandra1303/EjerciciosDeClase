//server.js

var express     = require('express');  
var app         = express();  
var mongoose     = require('mongoose');
var port        =8081;

// Conexión con la base de datos
mongoose.connect('mongodb://localhost:27017/productos');

// Configuración
app.configure(function() {  
    // Localización de los ficheros estÃ¡ticos
    app.use(express.static(__dirname + '/public'));
    // Muestra un log de todos los request en la consola        
    app.use(express.logger('dev')); 
    // Permite cambiar el HTML con el método POST                   
    app.use(express.bodyParser());
    // Simula DELETE y PUT                      
    app.use(express.methodOverride());                  
});

var Producto = mongoose.model('Producto',{
    id: String,
    name: String,
    price:String,
    disponible:String

});
 


//homepage
app.get('/', function(request,response){
	Producto.find(function(err,productos){
		if(err){
			response.send(err);
		}
		res.json(productos);
	});

});

//app.get(‘/list’, Devuelve la lista de todos los productos como texto plano

app.get('/list/',function(request,response){
	var message= "lista de los productos:"
	response.send(message);
	response.send(lista);
	var list=[{id:String,name:String,price:String,disponible:String}];
	
});


// POST que crea un TODO y devuelve todos tras la creación
app.post('/add/', function(req, res) {  
    var producto = Producto.create({
        id: req.body.id,
        name:req.body.name,
        price:req.body.price,
        disponible:req.body.disponible
    });

    producto.save(function(err){
    	if(err)
    		res.send(err);
    	res.json({message:"Nuevo producto creado!"});
    });
});

app.delete('/productos/:delete', function(req, res) {  
    Todo.remove({
        _id: req.params.producto
    }, function(err, producto) {
        if(err){
            res.send(err);
        }

        Todo.find(function(err, producto) {
            if(err){
                res.send(err);
            }
            res.json(productos);
        });

    });
});
    
// Carga una vista HTML simple donde irá nuestra Single App Page
// Angular Manejará el Frontend
app.get('*', function(req, res) {  
    res.sendfile('./public/productos.html');                
});




app.post(/addProducto/,function(request,response){
	var id=request.body.id;
	var name=request.body.name;
	var price=request.body.price;
	var disponible = request.body.disponible;

	response.send("Producto nr"+id+", nombre: "+name+" ,price "+price+" ,disponible"+disponible);
});
















// Escucha en el puerto 8080 y corre el server
app.listen(port, function() {  
    console.log('App listening on port '+port);
});