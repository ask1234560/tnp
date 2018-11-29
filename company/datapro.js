calling_co=function (c) {
	co=c;
}
calling_de=function (d) {
	de=d;  

}

calling_so=function (s) {
	so=s;
}

$("document").ready(function(){
	
	$("#btn11").click(function(){
		cg  = $('#ex1')[0].value;
		

	});

	$("#btn22").click(function(){
		nos = $('#ex2')[0].value;

		showUser(co,de,cg,nos,so);	

	});



});




