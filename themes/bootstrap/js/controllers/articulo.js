app.controller('ArticuloFormCtrl', ['$scope', function ($scope) {
	window.scope = $scope;

	$scope.unidades = window.inoxica.data.unidades;
	
	$scope.totales = {
		subtotal: 0.00,
		tieneIVA: 0,
		iva: 0.00,
		total: 0.00
	}
//hola
	var empty_item = {
		cantidad: '',
		unidad: null,
		material: null,
		precioUnitario: '',
		editing: true,
		error: {
			cantidad: false,
			material: false,
			precioUnitario: false
		}
	}
	
	if (window.inoxica.data.detalle) {
		$scope.items = [];
		angular.forEach(window.inoxica.data.detalle, function (detalle_item) {
			var item = angular.copy(empty_item);
			console.log(detalle_item);
			item.cantidad = detalle_item.cantidad;
			//item.unidad = detalle_item.unidad_did;
			item.material = detalle_item.material_aid;			
			item.material.precioUnitario = detalle_item.precioUnitario;
			item.importe = detalle_item.precioUnitario * detalle_item.cantidad;
			$scope.items.push(item);
			console.log(item);
		});
	} else {
		$scope.items = [angular.copy(empty_item)];
	}
	
	$scope.calcularImporte = function (item) {		
		item.importe = (item.material.precioUnitario * item.cantidad).toFixed(2);
		$scope.calcularTotales();
	}
	
	$scope.calcularTotales = function () {
		//console.log("Totales");
		var subtotal = 0.00;
		angular.forEach($scope.items, function (item) {
			if (!item.importe) return;
			subtotal += parseFloat(item.importe);
		});
		console.log($scope.items);
		iva = subtotal * 0.16;
		total = parseFloat(subtotal) + parseFloat(iva);
		$scope.totales.subtotal = subtotal.toFixed(2);
		$scope.totales.iva = iva.toFixed(2);
		$scope.totales.total = total.toFixed(2);
		//console.log($scope);
	}

	$scope.materialsOptions = {		
		containerCssClass: 'myselect2',
		width: 'copy',
		minimumInputLength: 2,
		ajax: {
			url: '/material/autocompletesearch',
			dataType: 'json',
			data: function (term, page) {
				return {
					term: term
				}
			},
			results: function (data, page) {
				//console.log(data[0]);
				var items = [];
				for(var i = 0; i < data.length; i++) {
					items.push({
						id: data[i].id,
						text: data[i].value,
						unidad: data[i].unidad,
						precioUnitario: data[i].precioUnitario
					});
				}
				return {results: items}
			}
		},
		initSelection: function (el, callback) {
			var id = $(el).val();
			//console.log(id);
			if (id !== "") {
	      		$.ajax({
	      			url: "/material/getajax?id="+id,
		  			dataType: "json"
		  		})
		  		.done(function(data) { 
	        		callback(data); 
					$scope.$apply();
				});
			}
		}
	};

	$scope.validate = function (item) {
		var error = false;
		item.error.cantidad = false;
		item.error.material = false;
		item.error.precioUnitario = false;
		if (isNaN(parseInt(item.cantidad)) || item.cantidad <= 0) {
			item.error.cantidad = true;
			error = true;
		}
		if (item.material == null) {
			item.error.material = true;
			error = true;
		}
		if (item.material.precioUnitario == null) {
			item.error.precioUnitario = true;
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
	
	if (window.inoxica.data.detalle_articulo) {
		$scope.calcularTotales();
	}
	
}]);