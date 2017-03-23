var app=angular.module("myApp",[]);

app.controller('miControlador', function($scope){
	$scope.total=0;
	$scope.favor=function(){$scope.total++;};
	$scope.contra=function(){$scope.total--;};
})