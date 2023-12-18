(function($) {
  $('.icaal-contact-form').on('submit', function (e) {
      var $form = $(this);
      var form_submission = $form.attr('data-form');
      
      var $submit = $form.find('.submit');
      var $response = $form.find('.response');
      var $data = $form.serializeArray();
      var data = new FormData();

      var api_key_name_1 = icaal_options['api_key_name_1'];
      var api_key_name_2 = icaal_options['api_key_name_2'];
      var api_key_name_3 = icaal_options['api_key_name_3'];
      var api_key_name_4 = icaal_options['api_key_name_4'];
      var api_key_name_5 = icaal_options['api_key_name_5'];
      var api_key = '';
      var api_key_found = false;

      switch (form_submission) {
          case api_key_name_1:
              api_key = icaal_options['api_key_1'];
              api_key_found = true;
              break;
          case api_key_name_2:
              api_key = icaal_options['api_key_2'];
              api_key_found = true;
              break;
          case api_key_name_3:
              api_key = icaal_options['api_key_3'];
              api_key_found = true;
              break;
          case api_key_name_4:
              api_key = icaal_options['api_key_4'];
              api_key_found = true;
              break;
          case api_key_name_5:
              api_key = icaal_options['api_key_5'];
              api_key_found = true;
              break;
          default:
              api_key_found = false;
      }

      if (api_key_found) {

          $submit.addClass('btn-loading').prop('disabled', true);
          $response.empty().addClass('hidden');

          $.each($data, function (index, field) {
              data.append(field.name, field.value);
          });

          var icaal_form_attachments = $form.find('[type="file"]');
          if (icaal_form_attachments.length > 0) {
              $.each($form.find('[type="file"]'), function (index, file) {
                  var attachment_name = $(this).attr('name');
                  $.each($(this)[0].files, function (index, file) {
                      data.append(attachment_name, file);
                  });
              });
          }

          data.append('security', nonce);

          $.ajax({
              url: 'https://api.clients.icaal.co.uk/forms/' + api_key,
              method: 'post',
              contentType: false,
              processData: false,
              data: data
          }).done(function (response) {
              if (response.redirect_to) {
                  location.assign(response.redirect_to);
              } else if (response.message) {
                  $response.addAlert('success', response.message);
              }
              $form.find('input').addClass('is-valid').removeClass('is-invalid');
              $form.find('.invalid-feedback').empty();

              $form.trigger('reset');

              $form.trigger('success');
              $form.trigger('complete');

          }).fail(function (response) {
              var errors = response.responseJSON.errors;
              var error = response.responseJSON.error;

              $submit.removeClass('btn-loading').prop('disabled', false);
              if (errors) {
                  $form.find('input').addClass('is-valid').removeClass('is-invalid');
                  $form.find('.invalid-feedback').empty();
                  $.each(errors, function (index, value) {
                      $('[name=' + index + ']').addClass('is-invalid').removeClass('is-valid');
                      $('[name=' + index + ']').next('.invalid-feedback').text(value);
                  });
                  if( $form.data('form') === 'ppc_landing_form')
                    $response.removeClass('hidden').addAlert('danger', 'Validation Errors', errors);
                  $form.trigger('complete');
              } else if (error) {
                  $response.addAlert('danger', error);
                  $form.trigger('complete');
              }
          });

      } else {
          $response.addAlert('danger', 'No / Incorrect API Key Name Set');
      }

      $form.on('success', function () {
        if( $form.data('form') === 'ppc_landing_form' ) {
            if (typeof gtag == 'function') {
                gtag('event', 'ppc_landing_form_submit', {
                    'event_category': 'ppc_landing_form_submit_event'
                });
                console.log('ppc_landing_form_submit');
            }
           $('.formProper').empty().append(`
           <p style="height:100%; margin:auto; display:flex; flex-direction:column; justify-content:center; align-items:center;">
                <span style="color:rgb(107 114 128); font-size:1.5rem; font-weight:700;">Thank you!</span>
                <span style="color:rgb(107 114 128); ">We will contact you shortly</span>
           </p>
           `)
        }

        if($form.data('form') === 'contact' && typeof gtag == 'function') {
            gtag('event', 'Enquiry', {
                'event_category': 'submit'
            });
            console.log('Enquiry');
        }  
            
      });

      $form.on('complete', function () {
          var custom_html = icaal_options['custom_html'];
          $response.append(custom_html);
      });

      // $('html, body').animate({scrollTop: $response.offset().top - 130}, 100);

      return false;
  });

  $.fn.addAlert = function (type, message, items, dismissable) {

      var close = '';

      if (items) {
          var itemsArray = [];
          $.each(items, function (index, value) {
              index = index.replace(/_/g, ' ');
              // var error = index.charAt(0).toUpperCase() + index.substring(1) + ' ' + value;
              if (value == "The g-recaptcha-response field is required.") {
                  value = 'reCAPTCHA needs to confirmed.';
              }
              var error = value;
              if (index == 'base') {
                  error = value;
              }
              itemsArray.push('<li>' + error + '</li>');
          });
          items = itemsArray.join('');
          items = '<p style="font-size: 1em; margin-bottom:.2rem; font-weight: bold;">' + message + '</p>' + '<ul class="mb-0">' + items + '</ul>';
          message = items;
      }

      if (dismissable) {
          close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
      }

      this.append('<div class="alert alert-' + type + '">' + close + message + '</div>');

  };
})(jQuery);
