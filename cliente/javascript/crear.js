$(document).ready(function(){

$('form').submit(function(e){
	e.preventDefault();

	var data= $(this).serializeArray();
        
         /*  function limpiar(){
            document.getElementById("limpiar").reset();
        }*/
     

	$.ajax({
		url:'../server/productos',
		type:'post',
		dataType:'json',
		data: data
	})
        
        
	.done(function(data){
            console.log("success", data);
            alert("registro creado exitosamente");
            $("#limpiar")[0].reset();  
        

	})
	.fail(function(xhr){
		alert("no se registro informacion");

	})
	.always(function(){
		console.log("complete");
	});
        


	return false;
        
      
});  

});