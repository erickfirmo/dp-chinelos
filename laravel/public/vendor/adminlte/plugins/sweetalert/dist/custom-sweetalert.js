/* REMOVER PRODUTO */

$(document).ready(function(){
   $('#product-exclude-button').on('click', function() {
     swal({
       title: "Ops! Tem certeza ?",
       text: "Todas as informações do produto serão pedidas !",
       icon: "warning",
       buttons: true,
       buttons: ["Cancelar", "Sim, desejo excluir este produto"],
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         $('#product-exclude-form').submit();
         
       }
     });
   }); 
 });


  /* SALVAR PRODUTO */

 $(document).ready(function(){
  $('#product-save-button').on('click', function() {

        $('#product-save-form').submit();
        
  }); 
});


/* REMOVER CATEGORIA */


$(document).ready(function(){
  $('#category-exclude-button').on('click', function() {
    swal({
      dangerMode: true,
      title: "Tem certeza ?",
      text: "Todos os produtos com esta categoria serão removidos !",
      icon: "warning",
      buttons: true,
      buttons: ["Cancelar", "Sim, desejo excluir esta categoria"],
      
    })
    .then((willDelete) => {
      if (willDelete) {
        $('#category-exclude-form').submit();
        
      }
    });
  }); 
});

/* SALVAR CATEGORIA */

$(document).ready(function(){
 $('#category-save-button').on('click', function() {
   
       $('#category-save-form').submit();
       
 }); 
});





/* IMAGEM RULES SUBMIT */ 


/*$(document).ready(function(){
  $('#save-image-product-form').submit();
      
});*/

/*$(window).ready(function(){

  var position = 128;

  $('#submit').click(function(){
          $.ajax({
              type:"GET",
              url: "test.php",
              data: { pos : position , ajax:1},
              success: function(response){
              document.getElementById('response').innerHTML ='pos='+response
              //do stuff after the AJAX calls successfully completes
          }
      });
  });
});*/
/*
$(document).ready(function(){

  $('#save-image-product').on('click', function() {

    $('#image-product-form').submit();

  });

 });
 */
