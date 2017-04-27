
$(function(){

	function dbbrequest(page) {
		var request = $.ajax({ 	
			url: "inc/functions.inc.php",
			method: "GET",
			data : {page_id : page}
		});	

		request.done(function( msg ) { 
			msg = JSON.parse(msg);
			$( "#text-box" ).html( msg.story );
			$( "main" ).css( "background-image", msg.background );
			$( "#text-box" ).html( msg.story );
			$( "#choice1" ).html( msg.char1 );
			$( "#choice2" ).html( msg.char2 );
			$( "#choice3" ).html( msg.char3 );		
			$( "#choice1" ).attr( "href", msg.link1 );
			$( "#choice2" ).attr( "href", msg.link2 );
			$( "#choice3" ).attr( "href", msg.link3 );
			console.log(msg);
		});
	 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	}; 

	var page = 1;
	dbbrequest(page);

	$("a").click(function(e) {
		e.preventDefault(); 

		var	page = $(this).attr('href');
		dbbrequest(page);
		
	});

	$("img").click(function(e) {
		var	page = 1;
		dbbrequest(page);

	});

	

});