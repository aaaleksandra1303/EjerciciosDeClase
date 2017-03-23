app.controller("testController" ,function($scope) { // scope sirve para que las variables sean visibles en html y no solo aqui
	
	 // $scope.algo = "hola" // esto salidria en html si ponemos {{ algo }}
	// adios = "adios" // esto no saldria en el codigo html aunque pongamos {{ adios }}
	$scope.questions = [
        {
            id : 1,
            text:'Como declaramos en Java un atributo de una clase que solo pueda ser accedido desde la propia clase?',
            validAnswer : 1,
            userAnswer : null,
            status : '',
            answers: [
                {id : 1, text : 'Con "private"'},
                {id : 2, text : 'Con "public"'},
                {id : 3, text : 'Con mucho amor'},
                {id : 4, text : 'Eso no se puede hacer!'}
            ]
        },
        {
            id : 2,
            text:'Que significan las siglas del patron MVC?',
            validAnswer : 2,
            userAnswer : null,
            status : '',
            answers: [
                {id : 1, text : 'Modelo Vista Concurrente'},
                {id : 2, text : 'Modelo Vista Controlador'},
                {id : 3, text : 'Me Voy de Casa'}
            ]
        },
        {
            id : 3,
            text:'Quien es el mejor futbolista del mundo?',
            validAnswer : 4,
            userAnswer : null,
            status : '',
            answers: [
                {id : 1, text : 'Leo Messi (F.C. Barcelona)'},
                {id : 2, text : 'Cristiano Ronaldo (Real Madrid C.F.)'},
                {id : 3, text : 'Koke (Atletico de Madrid)'},
                {id : 4, text : 'No me importa lo más mínimo'}
            ]
        },
        {
            id : 4,
            text:'Hace sol?',
            validAnswer : 2,
            userAnswer : null,
            status : '',
            answers: [
                {id : 1, text : 'No, esta nublado'},
                {id : 2, text : 'Si, bastante'},
                {id : 3, text : 'No sabe'}
            ]
        }
    ];
    function resultado() {
    	var questions = $scope.questions;
    	for (i=0;i>questions.lenght;i++){
    		if(questions.validAnswer == questions.userAnswer.id){
    		total++;
    		}
    	return total;
    	}
    }
});