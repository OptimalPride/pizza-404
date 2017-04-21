
$(function(){

	var test = "ceci est un test 2";
	var request = $.ajax({ 	
		url: "inc/functions.inc.php",
		method: "GET",
		data : {test : test}
	});	

	request.done(function( msg ) { 

		$("a").click(function(e) {
			e.preventDefault(); 
			msg = JSON.parse(msg);
			$( "#text-box" ).html( msg.test );
		});
	});
 
	request.fail(function( jqXHR, textStatus ) {
	  alert( "Request failed: " + textStatus );
	});


});
