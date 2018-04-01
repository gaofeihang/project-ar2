( function( $ ) {

$( document ).ready( function( $ ) {

	$( '.menu' ).tinyNav( { active : 'current-menu-item' } );
	
	<?php do_action( 'ar2_custom_scripts' ) ?>
	
} );

} )( jQuery );