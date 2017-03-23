 var app= angular.model("cochesControlles",[]);

        
        function cochesController($scope){
            $scope.coche={
                marca:'Audi',
                modelo: 'A5',
               }

                nombreCompleto:function(){
                    var x=$scope.coche;
                    return x.marca + x.modelo;
                }
            }
        
