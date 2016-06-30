/**	CONTACT FORM
*************************************************** **/
	jQuery("#contact_submit").bind("click", function(e) {
		e.preventDefault();

        var response = {
            contact_first_name: jQuery("#contact_first_name").val(),			// required
            contact_last_name: jQuery("#contact_last_name").val(),			// required
            contact_country: jQuery("#contact_country option:selected").text(),                  // required
            contact_company: jQuery("#contact_company").val(),                  // required
            contact_email: jQuery("#contact_email").val(),			// required
            contact_phone: jQuery("#contact_phone").val(),			// optional
            contact_subject: jQuery("#contact_subject").val(),			// optional
            contact_message: jQuery("#contact_message").val(),			// required
            contact_captcha: jQuery("#contact_captcha").val(),			// required
            agreement_checkbox: jQuery("#agreement_checkbox").is(':checked'),   // spam if checked
            _action: jQuery("#contactForm").attr('action'),	// form action URL
            _method: jQuery("#contactForm").attr('method'),	// form method
            _err: false								// status
        };

		jQuery("input, textarea, select").removeClass('err');

        function provideAlertText(res, m) {
            if (res._err === false) {
                res._err = true;
                jQuery("#_required_field_").text(m);
                jQuery("#_required_field_").removeClass('hide');
            }
        }

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        }

		if(response.contact_first_name == '') {
			jQuery("#contact_first_name").addClass('err');
            provideAlertText(response, "Please let us know your first name.");
		}

        if(response.contact_last_name == '') {
            jQuery("#contact_last_name").addClass('err');
            provideAlertText(response, "Please let us know your last name.");
        }

        if(response.contact_country == '') {
            jQuery("#contact_country").addClass('err');
            provideAlertText(response, "Please select a country from the list.");
        }

        if(response.contact_company == '') {
            jQuery("#contact_company").addClass('err');
            provideAlertText(response, "Please fill in your company.");
        }

		if(response.contact_email == '') {
			jQuery("#contact_email").addClass('err');
            provideAlertText(response, "Please provide your email to receive our response.");
		}

        if( !isValidEmailAddress(response.contact_email) ) {
            jQuery("#contact_email").addClass('err');
            provideAlertText(response, "Please provide a valid email address.");
        }

        if(response.contact_message == '') {
			jQuery("#contact_message").addClass('err');
            provideAlertText(response, "Message cannot be blank.");
		}

        if(response.contact_captcha == '') {
            jQuery("#contact_captcha").addClass('err');
            provideAlertText(response, "Please enter the anti-spam code.");
        }

		if(response._err === true) {
			return false;
		} else {
            jQuery("#_required_field_").addClass('hide');
            jQuery("#contact_submit").addClass("disabled");
            jQuery("#contact_submit").val("Sending Message...");
        }

        $.ajax({
			url: 	response._action,
			data: 	jQuery.extend(response, {ajax:"true", action:'email_send'}),
			type: 	response._method,
			error: 	function(XMLHttpRequest, textStatus, errorThrown) {
				alert('Server Internal Error'); // usually 404
			},
			success: function(data) {
				data = data.trim();

				// PHP RETURN: INVALID CAPTCHA
				if(data == '_invalid_captcha_') {
					jQuery("#contact_captcha").addClass('err');
                    provideAlertText(response, "The anti-spam code you entered is invalid.");
                    jQuery("#contact_submit").removeClass("disabled");
                    jQuery("#contact_submit").val("Send Message");
                }
				// VALID
                else if(data == '_sent_ok_') {
					jQuery("#_sent_ok_").removeClass('hide');
					//jQuery("#contact_first_name, #contact_last_name, #contact_email, #contact_country, #contact_company, #contact_subject, #contact_message, #contact_phone, #contact_captcha").val('');
                    jQuery("#contact_captcha").val('');
                    jQuery("#contact_submit").val("Message Sent");
				} else {
					// ERROR
					alert(data);
                    jQuery("#contact_submit").removeClass("disabled");
                    jQuery("#contact_submit").val("Send Message");
                }
			}
		});

	});