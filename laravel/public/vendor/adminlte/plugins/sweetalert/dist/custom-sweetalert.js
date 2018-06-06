$(document).ready(function(){
   $('#product-exclude-button').on('click', function() {
     swal({
       title: "Tem certeza ?",
       text: "Todas as informações do produto serão pedidas",
       icon: "warning",
       buttons: true,
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         $('#product-exclude-form').submit();
         
       }
     });
   }); 
 });

 $(document).ready(function(){
  $('#product-save-button').on('click', function() {

        $('#product-save-form').submit();
        
  }); 
});


$(document).ready(function(){
  $('#category-exclude-button').on('click', function() {
    swal({
      title: "Tem certeza ?",
      text: "Todas os produtos com esta categoria serão alterados.",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $('#category-exclude-form').submit();
        
      }
    });
  }); 
});

$(document).ready(function(){
 $('#category-save-button').on('click', function() {
   
       $('#category-save-form').submit();
       
 }); 
});


function newImageProduct()
{
  var new_image_product = document.createElement('img');
  new_image_product.src = '#';
  new_image_product.alt = 'nova imagem do produto';



}


$(document).ready(function(){
  $('#upload-image-product').on('click', function() {
    swal({
      title: "Escolher imagem",
      text: "Todas os produtos com esta categoria serão alterados.",
      icon: "warning",
      buttons: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $('#').submit();
        
      }
    });




  }); 
});




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