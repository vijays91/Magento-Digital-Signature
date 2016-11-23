jQuery = jQuery.noConflict();

/*
 * 
 * Init Signature
 */

function signaturePad_activate() {
	jQuery('.sigPad').signaturePad();
}

/*
 * 
 * Validation
 */

function validationSign(form_id = "checkout-agreements", field_name_1 = "name", field_name_2 = "output") {
	var form 	= $(form_id);
	var field_1 = form[field_name_1];
	var field_2 = form[field_name_2];

	/*- Reset the error block -*/
	
	if($('sign_error_1')) {
		$('sign_error_1').remove();
	}
	
	if($('sign_error_2')) {
		$('sign_error_2').remove();
	}

	$(field_2).up(0).removeClassName('input-text validation-failed');
	$(field_1).removeClassName('validation-failed');

	if($(field_1).getValue() == "") {
		$(field_1).addClassName('validation-failed');
		$(field_1).insert({after:'<div id="sign_error_1" class="validation-advice">This is a required field.</div>'});
		return false;
	} else {
		$(field_1).removeClassName('validation-failed');
	}
	
	if($(field_2).getValue() == "") {
		$(field_2).up(0).addClassName('input-text validation-failed');
		$(field_2).up(1).insert('<div id="sign_error_2" class="validation-advice">This is a required field.</div>');
		jQuery(".drawIt a").click();
		return false;
	} else {
		$(field_2).up(0).removeClassName('input-text validation-failed');
	}

	return review.save();
}