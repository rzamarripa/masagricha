function cargarlote(data){
	if(data.semana==25 && data.acum == 1){
		$("#presupuesto_semana").get(0).selectedIndex = 0;
		console.log("Entró");
	}else if(data.semana == 25){
		$("#presupuesto_semana").val(25);
		console.log("solo 25");
	}
	
	console.log(data);
		
	$.ajax({
	    url : ["actualizalotes"],
	    type: "POST",
	    data : data,
	    dataType: "json",
	    beforeSend:function() {
									$("#myModal").modal("show");
								},
	    success:function(data, textStatus, jqXHR){
  							$("#lotes").html(data.lotes);
  							$("#presupuestoAcumulado").html(data.acum);
  							$("#grafica").html(data.grafica);
							},
			complete:function() {
									$("#myModal").modal("hide");
								},
	    error: function (jqXHR, textStatus, errorThrown)
	    {
				console.log('mensaje ' + errorThrown);
	    }
	});
	event.preventDefault();
}

function cargarcultivo(data){
	if(data.acum == 1){
		$("#presupuesto_semana").get(0).selectedIndex = 0;
		console.log("Entró");
	}else if(data.semana == 25){
		$("#presupuesto_semana").val(25);
		console.log("solo 25");
	}
	$.ajax({
	    url : ["actualizacultivos"],
	    type: "POST",
	    data : data,
	    dataType: "json",
	    beforeSend:function() {
									$("#myModal").modal("show");
								},
	    success:function(data, textStatus, jqXHR){
  							$("#cultivos").html(data.cultivos);
  							$("#presupuestoAcumulado").html(data.acum);
  							$("#grafica").html(data.grafica);
							},
			complete:function() {
								$("#myModal").modal("hide");
							},
	    error: function (jqXHR, textStatus, errorThrown){
								console.log('mensaje ' + errorThrown);
					    }
	});
	event.preventDefault();
}