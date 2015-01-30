app.controller('ContrareciboController', ['$scope', '$http', function ($scope, $http) {
	window.scope = $scope;
 
	//$scope.proveedores = window.first.data.proveedores;
	$scope.proveedores = [];

	$scope.message = false;
	$scope.ordenes = [];
	$scope.contrarecibo = {
		proveedor: 0
	};

	var empty_factura = {
		id: '',
		numeroFactura: '',
		fechaFactura: '',
		totalFactura: '',
		error: {
			numeroFactura: false,
			fechaFactura: false,
			totalFactura: false
		}
	};

	if (window.first.data.detalle) {
		$scope.ordenes = [];
		angular.forEach(window.first.data.detalle, function (detalle_item) {
			var orden = {
				id: detalle_item.ordenCompra_did,
				numeroOrdenCompra: detalle_item.numeroOrdenCompra,
				fecha: detalle_item.fechaOrdenCompra_f,
				subtotal: detalle_item.subtotal,
				iva: detalle_item.iva,
				total: detalle_item.total,
				facturas: []
			}

			angular.forEach(detalle_item.facturas, function (factura) {
				var f = angular.copy(empty_factura);
				f.numeroFactura = factura.numeroFactura;
				f.fechaFactura = factura.fechaFactura_f;
				f.totalFactura = factura.totalFactura;
				orden.facturas.push(f);
			});
			$scope.ordenes.push(orden);
		});
	}

	$scope.buscarOrdenesCompra = function () {
		//console.log('bla');
		if ($scope.contrarecibo.proveedor == 0 || $scope.contrarecibo.proveedor == null) return;
		$http.get('/index.php/ordenCompra/getByProveedor', {
			params: {
				proveedor_id: $scope.contrarecibo.proveedor.id
			}
		})
			.success(function (data) {
				$scope.ordenes = data;
				$scope.message = $scope.ordenes.length ? false : true;
			})
			.error(function () {
				console.log('error');
			});
	}

	$scope.addFactura = function (orden, e) {
		e.preventDefault();
		if (orden.facturas == undefined) orden.facturas = [];
		orden.facturas.push(angular.copy(empty_factura));
	}

	$scope.removeFactura = function (orden, factura, e) {
		e.preventDefault();
		var i = orden.facturas.indexOf(factura);
		if (i > -1) {
			orden.facturas.splice(i, 1);
		}
	};

	$scope.proveedoresOptions = {
		//containerCssClass: 'myselect2',
		width: 'copy',
		minimumInputLength: 2,
		ajax: {
			url: '/proveedor/autocompletesearch',
			dataType: 'json',
			data: function (term, page) {
				return {
					term: term
				}
			},
			results: function (data, page) {
				console.log(data);
				var items = [];
				for(var i = 0; i < data.length; i++) {
					items.push({
						id: data[i].id,
						text: data[i].codigo+'-'+data[i].value,
					});
				}
				return {results: items}
			}
		},
		initSelection: function (el, callback) {
			// var id = $(el).val();
   //    if (id !== "") {
   //    	$.ajax({
   //    		url: "/articulo/getajax?id="+id,
   //        dataType: "json"
   //      }).done(function(data) { 
   //      	callback(data); 
   //      	$scope.$apply();
   //     	});
   //    }
		}
	};

	window.validateFacturas = function (form) {
		var error = false;
		if ($scope.ordenes.length == 0) {
			alert('No puedes guardar contrarecibos sin ordenes de compra');
			return false;
		}

		var num_ordenes = 0;
		angular.forEach($scope.ordenes, function (orden) {
			if (orden.facturas != undefined && orden.facturas.length) {
				num_ordenes++;
				angular.forEach(orden.facturas, function (factura) {
					factura.error.numeroFactura = false;
					factura.error.fechaFactura = false;
					factura.error.totalFactura = false;

					if (factura.numeroFactura == '') {
						factura.error.numeroFactura = true;
						error = true;
					}
					if (factura.fechaFactura == '') {
						factura.error.fechaFactura = true;
						error = true;
					}
					if (factura.totalFactura == '' || isNaN(parseFloat(factura.totalFactura))) {
						factura.error.totalFactura = true;
						error = true;
					}
				});
			}
		});
		if (num_ordenes == 0) {
			alert('No puedes guardar contrarecibos sin facturas');
			error = true;
		}
		$scope.$apply();

		if (!error) {
			var con = confirm('¿Está seguro de crear el contrarecibo?');
			if (!con) return false;
		}

		return !error;
	}

}]);
