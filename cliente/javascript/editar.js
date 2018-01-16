$(document).ready(function(){

    var queryString = location.search.split("=");
	$('#id_producto').val(queryString[1]);
	var id = $('#id_producto').val();


	$.ajax({
		url:'../server/productos/' + id,
		type:'get',
		dataType:'json'
	})
	.done(function(data){
		
		//$('#id_producto').val(data[0][0]);
		$('#nombre_producto').val(data[0][1]);
		$('#descripcion').val(data[0][2]);
		$('#costo').val(data[0][3]);

		
      
	})
	.fail(function(xhr){
		alert("error al cargar los datos");

	})
	.always(function(){
		console.log("complete");
	});

         $('form').submit(function(e){
	  e.preventDefault();

	var data= $(this).serializeArray();
    var id = $('#id_producto').val();


	$.ajax({
		url:'../server/productos/' + id,
		type:'put',
		dataType:'json',
		data: data
	})
	.done(function(data){
		console.log("success", data);
        alert("registro actualizado exitosamente");
                $("#limpiar2")[0].reset();  

      
	})
	.fail(function(xhr){
			alert("error al actualizar los datos");

	})
	.always(function(){
		console.log("complete");
	});

	return false;
});

   

})