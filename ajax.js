$(document).ready(function(){
   
   $('#tabla').submit(e => {
   	  e.preventDefault();
   	  const postData = {
   	  	medicamento: $('#medicamento').val(),
   	  	lote: $('#lote').val(),
   	  	vencimiento: $('#vencimiento').val(),
   	  	restante: $('#restante').val(),
   	  	total: $('#total').val(),
   	  	ubicacion: $('#ubicacion').val()
   	  }

   	  $.ajax({
        url: "SC2.php",
        data: postData,
        type: "POST",
        success: function(response){
        	if(!response.error){
        		$('#tabla').trigger("reset")
        	}
        }
   	  })

   	  console.log(postData)
   })

   $(document).on("click", ".delete", ()=>{
        
        if(confirm('¿Seguro que quiere eliminar este medicamento?')){
           const element = $(this)[0].activeElement.parentElement.parentElement;
           console.log(element)
        }
   })
})