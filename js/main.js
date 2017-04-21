
$(function(){

function page_load(page){
	
}

	var page = 1;
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

	$("a").click(function(e) {
		e.preventDefault(); 

		var	page = $(this).attr('href');

		var request2 = $.ajax({ 	
			url: "inc/functions.inc.php",
			method: "GET",
			data : {page_id : page}
		});	

		request2.done(function( msg2 ) {
			msg2 = JSON.parse(msg2);
			$( "#text-box" ).html( msg2.story );
			$( "main" ).css( "background-image", msg2.background );	
			$( "#text-box" ).html( msg2.story );
			$( "#choice1" ).html( msg2.char1 );
			$( "#choice2" ).html( msg2.char2 );
			$( "#choice3" ).html( msg2.char3 );		
			$( "#choice1" ).attr( "href", msg2.link1 );
			$( "#choice2" ).attr( "href", msg2.link2 );
			$( "#choice3" ).attr( "href", msg2.link3 );
			console.log(msg2);			
		});
	});

	$("img").click(function(e) {
		var	page = 1;
		var request2 = $.ajax({ 	
			url: "inc/functions.inc.php",
			method: "GET",
			data : {page_id : page}
		});	

		request2.done(function( msg2 ) {
			msg2 = JSON.parse(msg2);
			$( "#text-box" ).html( msg2.story );
			$( "main" ).css( "background-image", msg2.background );	
			$( "#text-box" ).html( msg2.story );
			$( "#choice1" ).html( msg2.char1 );
			$( "#choice2" ).html( msg2.char2 );
			$( "#choice3" ).html( msg2.char3 );		
			$( "#choice1" ).attr( "href", msg2.link1 );
			$( "#choice2" ).attr( "href", msg2.link2 );
			$( "#choice3" ).attr( "href", msg2.link3 );
			console.log(msg2);			
		});

	});

	

});