$(document).ready(function(){

	$('.error').hide();
    $("#submitForm").click(function() {
      
      var error = false;
      //Get form variables
  	  var banner_size = $("input[type=radio]:checked").val();
  	  var banner_line1 = $("input#banner_line1").val();	
  	  var banner_line2 = $("input#banner_line2").val();

  	  $('.error').hide();
      //If string length is greater than 22 output error
  	  if(banner_line1.length > 22){
  	  	$("label#banner_line1_error").show();
  	  	$("input#banner_line1").focus();
  	  	error = true;
  	  }
  	  if(banner_line2.length > 22){
  	  	$("label#banner_line2_error").show();
  	  	$("input#banner_line2").focus();
  	  	error = true;
  	  }

  	   if (!error) {
         // escape special characters
         banner_size = escape(banner_size);
         banner_line1 = escape(banner_line1);
         banner_line2 = escape(banner_line2);
         // Output image data
  	   	 var url = './image.php?banner_size=' + banner_size + '&banner_line1=' + banner_line1 + '&banner_line2=' + banner_line2;
  	  	 $('#response').html('<p>To save the image right-click on it and select <strong>\'Save Image As\'</strong>.</p><p><a href="' + url + '"><img src="' + url + '"/></p>');
	   }

  	  return false;
  	});

});
