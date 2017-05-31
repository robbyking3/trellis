/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
        
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS

		var stripe = Stripe('pk_test_hSZaRfj1CBXE5vKnOEyYKm84');

		// Create an instance of Elements
		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
		  base: {
		    color: '#32325d',
		    lineHeight: '24px',
		    fontWeight: 'bold',
		    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
		    fontSmoothing: 'antialiased',
		    fontSize: '18px',
		    '::placeholder': {
		      color: '#9c9c9c',
		      fontWeight: 'normal'
		    }
		  },
		  invalid: {
		    color: '#fa755a',
		    iconColor: '#fa755a'
		  }
		};

		// Create an instance of the card Element
		var card = elements.create('card', {style: style});

		// Add an instance of the card Element into the `card-element` <div>
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		card.addEventListener('change', function(event) {
		  var displayError = document.getElementById('card-errors');
		  if (event.error) {
		    displayError.textContent = event.error.message;
		  } else {
		    displayError.textContent = '';
		  }
		});

		// Handle form submission
		var form = document.getElementById('payment-form');
		form.addEventListener('submit', function(event) {
		  event.preventDefault();

		  stripe.createToken(card).then(function(result) {
		    if (result.error) {
		      // Inform the user if there was an error
		      var errorElement = document.getElementById('card-errors');
		      errorElement.textContent = result.error.message;
		    } else {
		      // Send the token to your server
		      stripeTokenHandler(result.token);
		    }
		  });
		});

		function stripeTokenHandler(token) {
		  // Insert the token ID into the form so it gets submitted to the server
		  var form = document.getElementById('payment-form');
		  var hiddenInput = document.createElement('input');
		  hiddenInput.setAttribute('type', 'hidden');
		  hiddenInput.setAttribute('name', 'stripeToken');
		  hiddenInput.setAttribute('value', token.id);
		  form.appendChild(hiddenInput);

		  // Submit the form
		  form.submit();
		}


		$('[data-numeric]').payment('restrictNumeric');
        var $donation = $('#donation');
        var $cc = $('#cc-number');
        var $exp = $('#cc-exp');
        var $cvc = $('#cc-cvc');
        $cc.payment('formatCardNumber');
        $exp.payment('formatCardExpiry');
        $cvc.payment('formatCardCVC');

        $.fn.toggleInputError = function(erred) {
          this.parent('.form-group').toggleClass('has-error', erred);
          this.toggleClass(' form-control-danger', erred);
          return this;
        };

        $.fn.toggleInputValid = function(valid) {
          this.parent('.form-group').toggleClass('has-success', valid);
          return this;
        };
        
        $cc.on("keyup", function(){
          var cardType = $.payment.cardType($cc.val());
          if(cardType != null){
            $('.cc-brand').text(cardType);
          } else {
            $('.cc-brand').text('');
          }
        });

		var options = {
        	errorElement: 'span',
		    errorClass: 'form-control-danger',
		    validClass: 'form-control-success',
		    errorPlacement: function(el) {
		        $(el).parent('div').addClass('form-control-danger');
		    },
		    highlight: function(el) {
		        $(el).parent('div').addClass('has-danger');
		        $(el).addClass('form-control-danger');
		    },
		    unhighlight: function(el) {
		        $(el).parent('div').removeClass('has-danger');
		        $(el).removeClass('form-control-danger');
		    }
		}

        $('form').validate(options);

		$('#presetAmount label').on('click', function(e) {
			$('#donation').val(e.target.control.value);
			$('#donation').trigger('change');
		});

        $('#isOrg').on('change', function(e){
			if( $('#isOrg').is(':checked') ) {
				$('#isOrgGroup').show();
			} else {
				$('#isOrgGroup').hide();
			}
        });

        $('#donation').on('change', function(e) {
			$('#btnAmount').text(' $' + e.target.value);
        });
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
