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