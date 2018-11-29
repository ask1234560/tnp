$(document).ready(function(){
	
	$('.questionForm2').hide();
	$('.questionForm3').hide();
    $('#q1 #submit').onclick(myfunction1(){
    	
    	 
    		$('questionForm1').fadeIn(1000);
  
    	return false;
  }); 
   $('#q2 #submit').onclick(myfunction2(){
    	$('.questionForm1').hide();
    		$('#questionForm2').fadeIn(1000);
  
    	return false;
  });  
    $('#q3 #submit').onclick(myfunction3(){
    	$('.questionForm1').hide();
    	$('.questionForm2').hide();
    		$('#questionForm3').fadeIn(1000);
  
    	return false;
  }); 

});
