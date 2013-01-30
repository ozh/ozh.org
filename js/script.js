// object holding the parameters for the hover:on hover:off animation
var params_anim = {};

// object for display filter state
var filter_states = {};

$( document ).ready(function(){
	// Teh fun stuff !!1!
	$( ".slidebox" ).hover(
		function(){
			var rnd       = Math.round( Math.random() ); // 0 or 1
			var slidedir  = [ 'top', 'left' ][ rnd ]; // top or left
			var wh        = [ 'height', 'width' ][ rnd ];
			var size      = - parseInt( $(this).css( wh ) ); // width or height of element, depending its slidedir
			var direction = [ 1, -1 ][ Math.round( Math.random() ) ];
			params_anim   = {};
			params_anim[slidedir] = size * direction;
			$( this ).find( ".slide" ).stop()
					.animate( params_anim, 300 );
		},
		function(){
			$( this ).find( ".slide" ).stop()
				.animate( {top:0, left:0}, 200 );
		}
	);
	
	// Teh filter stuff !!1!
	$( "#display_controls span" ).click( function(i,e) {
		var filter = $( this ).text();
		var effect = [ "drop", "scale", "explode", "fade" ];
		effect = effect[Math.floor(Math.random()*effect.length)];
		if( filter_states[filter] == 'hidden' ) {
			$( 'div.' + filter ).show( effect, {}, 1500 );
			filter_states[filter] = 'shown';
			$( this ).addClass('shown').removeClass('hidden');
		} else {
			$( 'div.' + filter ).hide( effect, {}, 900 );
			filter_states[filter] = 'hidden';
			$( this ).addClass('hidden').removeClass('shown');
		}
	});

});