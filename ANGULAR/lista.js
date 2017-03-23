var app=angular.module('lista',[]);

app.controller('miControlador',function($scope){
	$scope.personas=[
	{nombre:'Aleksandra',edad:27},
	{nombre:'Paco',edad:28},
	{nombre:'Krystyna',edad:27}
	]
});