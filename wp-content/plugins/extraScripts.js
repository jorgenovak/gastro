jQuery(document).ready(function($) {

	// Uploading files
	var file_frame;

	jQuery.fn.upload_listing_image = function( button ) {
		var button_id = button.attr('id');
		var field_id = button_id.replace( '_button', '' );

		// If the media frame already exists, reopen it.
		if ( file_frame ) {
		  file_frame.open();
		  return;
		}

		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
		  title: jQuery( this ).data( 'uploader_title' ),
		  button: {
		    text: jQuery( this ).data( 'uploader_button_text' ),
		  },
		  multiple: false
		});

		// When an image is selected, run a callback.
		file_frame.on( 'select', function() {
		  var attachment = file_frame.state().get('selection').first().toJSON();
		  jQuery("#"+field_id).val(attachment.id);
		  jQuery("#listingimagediv img").attr('src',attachment.url);
		  jQuery( '#listingimagediv img' ).show();
		  jQuery( '#' + button_id ).attr( 'id', 'remove_listing_image_button' );
		  jQuery( '#remove_listing_image_button' ).text( 'Remove listing image' );
		});

		// Finally, open the modal
		file_frame.open();
	};

	jQuery('#listingimagediv').on( 'click', '#upload_listing_image_button', function( event ) {
		event.preventDefault();
		jQuery.fn.upload_listing_image( jQuery(this) );
	});

	jQuery('#listingimagediv').on( 'click', '#remove_listing_image_button', function( event ) {
		event.preventDefault();
		jQuery( '#upload_listing_image' ).val( '' );
		jQuery( '#listingimagediv img' ).attr( 'src', '' );
		jQuery( '#listingimagediv img' ).hide();
		jQuery( this ).attr( 'id', 'upload_listing_image_button' );
		jQuery( '#upload_listing_image_button' ).text( 'Set listing image' );
	});
  console.log("js extraa");

});





jQuery(document).ready(function($) {

	var mediaUploader = [];
	jQuery('input[id^="featured_image"]').each(function(index, element) {
		var i = index + 1;

		$('.featured_image' + i).click(function(e) {
		  e.preventDefault();

		  // If the uploader object has already been created, reopen the dialog
			if (mediaUploader[i]) {
			mediaUploader[i].open();
			return;
		  }

		  // Extend the wp.media object
		  mediaUploader[i] = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
			button: {
			text: 'Choose Image'
		  }, multiple: true });

		  // When a file is selected, grab the URL and set it as the text field's value
		  mediaUploader[i].on('select', function() {
			attachment = mediaUploader[i].state().get('selection').first().toJSON();
			$('#featured_image' + i).val(attachment.url);
			$('#featured_image_id' + i).val(attachment.id);
			$('.featured_img' + i).attr("src",attachment.url).show();
			$('.featured_image' + i).hide();
			$('.remove_featured_image' + i).show();
		  });

		  // Open the uploader dialog
		  mediaUploader[i].open();
		});

		// Remove file
		$('.remove_featured_image' + i).click( function() {
			$('#featured_image' + i).val('');
			$('.featured_img' + i).attr("src","").hide();
			$('.featured_image' + i).show();
			$(this).hide();
		});

    });

});
