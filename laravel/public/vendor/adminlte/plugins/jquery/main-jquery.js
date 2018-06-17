$(document).ready(function(){
   $('#imagem_principal').change(function() {
     const file = $(this)[0].files[0];
     const fileReader = new FileReader()
     fileReader.onloadend = function(){


          $('#img1').attr('src', fileReader.result)

     }
     
     fileReader.readAsDataURL(file)
     
   }); 

   $('#imagem_2').change(function() {
    const file = $(this)[0].files[0];
    const fileReader = new FileReader()
    fileReader.onloadend = function(){


         $('#img2').attr('src', fileReader.result)

    }
    
    fileReader.readAsDataURL(file)
    
  }); 

  $('#imagem_3').change(function() {
    const file = $(this)[0].files[0];
    const fileReader = new FileReader()
    fileReader.onloadend = function(){


         $('#img3').attr('src', fileReader.result)

    }
    
    fileReader.readAsDataURL(file)
    
  }); 
 });