app.controller('RequisicionFormCtrl', ['$scope', function ($scope) {
	window.scope = $scope;

	$scope.unidades = window.first.data.unidades;

	var empty_item = {
		cantidad: '',
		unidad: null,
		articulo: null,
		observaciones: '',
		editing: true,
		error: {
			cantidad: false,
			articulo: false
		}
	}

	if (window.first.data.detalle) {
		$scope.items = [];
		angular.forEach(window.first.data.detalle, function (detalle_item) {
			var item = angular.copy(empty_item);
			item.cantidad = detalle_item.cantidad;
			//item.unidad = detalle_item.unidad_did;
			item.articulo = detalle_item.articulo_aid;
			item.observaciones = detalle_item.observaciones;
			$scope.items.push(item);
		});
	} else {
		$scope.items = [angular.copy(empty_item)];
	}

	$scope.articulosOptions = {
		containerCssClass: 'myselect2',
		width: 'copy',
		minimumInputLength: 2,
		ajax: {
			url: '/articulo/autocompletesearch',
			dataType: 'json',
			data: function (term, page) {
				return {
					term: term
				}
			},
			results: function (data, page) {
				//console.log(data);
				var items = [];
				for(var i = 0; i < data.length; i++) {
					items.push({
						id: data[i].id,
						text: data[i].value,
						unidad: data[i].unidad
					});
				}
				return {results: items}
			}
		},
		initSelection: function (el, callback) {
			var id = $(el).val();
      if (id !== "") {
      	$.ajax({
      		url: "/articulo/getajax?id="+id,
          dataType: "json"
        }).done(function(data) { 
        	callback(data); 
        	$scope.$apply();
       	});
      }
		}
	};

	/*$scope.items = [
		{cantidad: 34, articulo: 1, error: {cantidad: false, articulo: false}},
		{cantidad: 334, articulo: 2, error: {cantidad: false, articulo: false}},
		{cantidad: 34345, articulo: 3, error: {cantidad: false, articulo: false}},
	]*/

	$scope.validate = function (item) {
		var error = false;
		item.error.cantidad = false;
		item.error.articulo = false;
		if (isNaN(parseInt(item.cantidad)) || item.cantidad <= 0) {
			item.error.cantidad = true;
			error = true;
		}
		if (item.articulo == null) {
			item.error.articulo = true;
			error = true;
		}
		return !error;
	}

	$scope.enter = function (item, e) {
		if (e.which != 13) return;
		if ($scope.validate(item) === false) return;
		$scope.items.push(angular.copy(empty_item));
		setTimeout(function() {
			var index = parseInt($scope.items.indexOf(item)) + 1;
			$('#item_'+index).focus();
		}, 100);		
	}

	$scope.agregar = function () {
		$scope.items.push(angular.copy(empty_item));
	}

	$scope.cancelar = function (item, e) {
		e.preventDefault();
		var c = confirm('¿Está seguro de remover este artículo?');
		if (!c) return;
		var i = $scope.items.indexOf(item);
		if (i >= 0) $scope.items.splice(i, 1);
	}


	// Esto se debe cambiar para que sea mas angular.js
	validateDetalle = function (form) {
		var error = false;
		angular.forEach($scope.items, function (item) {
			error = !$scope.validate(item);
		});
		$scope.$apply();
		return !error;
	}
	
}]);

// function validateDetalle(form) {
// 	console.log(form);
// 	return true;
// }

// function RequisicionFormCtrl($scope) {
// 	window.scope = $scope;
	
// 	$scope.items = [{
// 		cantidad: '',
// 		unidad: '',
// 		descripcion: '',
// 		observaciones: '',
// 		editing: true
// 	}]
// }