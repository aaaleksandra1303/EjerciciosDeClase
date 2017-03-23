var app=angular.module('angularProducto',[]);

app.Controller("mainController", function($scope,$http) {

	$scope.fromData{};


    // Cuando se cargue la página, pide del API todos los TODOs
    $http.get('/')
        .success(function(data) {
            $scope.productos = data;
            console.log(data)
        })
        .error(function(data) {
            console.log('Error: ' + data);
        });

         // Cuando se añade un nuevo TODO, manda el texto a la API
    $scope.create = function(){
        $http.post('/productos', $scope.formData)
            .success(function(data) {
                $scope.formData = {};
                $scope.productos = data;
                console.log(data);
            })
            .error(function(data) {
                console.log('Error:' + data);
            });
    };

     // Borra un TODO despues de checkearlo como acabado
    $scope.delete = function(id) {
        $http.delete('/productos/' + id)
            .success(function(data) {
                $scope.productos = data;
                console.log(data);
            })
            .error(function(data) {
                console.log('Error:' + data);
            });
    };
}


})

