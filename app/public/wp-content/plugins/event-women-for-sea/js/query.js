jQuery( document ).ready( function () {
	jQuery( '.select-etat' ).change( function () {
		if ( 'lie' === this.value ) {
			jQuery( 'input[id=' + this.id + ']' ).prop( 'disabled', false );
		} else {
			jQuery( 'input[id=' + this.id + ']' ).prop( 'disabled', true );
		}
	} );

	jQuery( '.save-line' ).click( function () {

		let flux_id = jQuery( this ).attr( 'flux-id' );
		let product_id = jQuery( this ).attr( 'product-id' );
		let id = jQuery( this ).attr( 'id' );
		let product_id_link = jQuery( 'input[id=' + id + ']' ).val();
		let security = jQuery( this ).attr( 'security' );
		let etat = jQuery( 'select#' + id ).val();

		jQuery.ajax( {
						 url: ajaxurl,
						 type: 'POST',
						 data: {
							 'action': 'update_axalys_shopping_product',
							 'flux_id': flux_id,
							 'product_id': product_id,
							 'product_link_id': product_id_link,
							 'etat' : etat,
							 'nonce': security,
						 },
						 success: function ( response ) {
							 console.log(response.data.update);
							 alert( response.data.success_text );
						 },
						 error: function ( data ) {
							 console.log( data );
							 alert( data );
						 }
					 } );
	} );

	jQuery( '.add-product' ).click( function () {

		let flux_id = jQuery( this ).attr( 'flux-id' );
		let product_id = jQuery( this ).attr( 'product-id' );
		let security = jQuery( this ).attr( 'security' );
		jQuery.ajax( {
			url: ajaxurl,
			dataType: 'JSON',
			type: 'POST',

			data: {
				'action': 'create_axalys_product',
				'flux_id': flux_id,
				'product_id': product_id,
				'nonce': security
			},
			success: function ( response ) {
				window.location.href = 'post.php?event=' + response.data + '&action=edit';
			},
			error: function ( data ) {
				console.log( data );
			}
		} );
	} );

} );