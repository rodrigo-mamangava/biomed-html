var myNameSpace = angular.module('myApp', []);

myNameSpace.controller(
		"produtoController", 
		function produtoController($scope, $http) {

		var page = "http://127.0.0.1/biomed-html/model/listaProdutos.php";
	
		$http.get(page).success(function(response) {
			$scope.produtos = response;	
		});

});


myNameSpace.controller(
		"menuController", 
		function menuController($scope, $http) {

		var page = "http://127.0.0.1/biomed-admin/index.php/api/exames";
	
		$http.get(page).success(function(response) {
			$scope.menu = response;	
		});

});

