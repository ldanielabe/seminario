$(document).ready(function(){
	 
$("#buscador2").change(function(event){
	console.log('entro');
	
	var dato=$("#buscador2").val();
	var route="cant";
	var token=$("#_token").val();
	console.log(dato);
	$.ajax({
		url: route,
		headers: { 'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'text',
	
		data:{genre: dato},

		success:function(respuesta){
			console.log('entro');
		},
		
	});
	
});
});