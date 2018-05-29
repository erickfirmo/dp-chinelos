$(document).ready(function(){
   $('#exclude-button').on('click', function() {
     swal({
       title: "Tem certeza?",
       text: "Todas as informações do produto serão pedidas",
       icon: "warning",
       buttons: true,
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         $('#exclude-form').submit();
         
       }
     });
   }); 
 });