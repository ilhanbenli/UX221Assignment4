jQuery(document).ready((function(e){function s(s){s||(s=superbaddons_newsletter_form.default_error_message),e("#superbaddons-newsletter-submit-text").css("visibility",""),e("#superbaddons-newsletter-submit-spinner").hide(),e("#superbaddons-newsletter-error").text(s),e("#superbaddons-newsletter-form input").prop("disabled",!1),e("#superbaddons-newsletter-form button").prop("disabled",!1),e("#superbaddons-newsletter-error").show()}e("#superbaddons-newsletter-form").on("submit",(function(r){r.preventDefault(),e("#superbaddons-newsletter-form input").prop("disabled",!0),e("#superbaddons-newsletter-form button").prop("disabled",!0),e("#superbaddons-newsletter-submit-text").css("visibility","hidden"),e("#superbaddons-newsletter-submit-spinner").show(),e("#superbaddons-newsletter-error").hide();const t=e("#superbaddons-newsletter-form input[name=email]").val();e.post(superbaddons_newsletter_form.ajax_url,{_ajax_nonce:superbaddons_newsletter_form.nonce,action:superbaddons_newsletter_form.action,email:t},(function(r){r.success?(e("#superbaddons-newsletter-form").remove(),e("#superbaddons-newsletter-success").show()):s(r?.data?.message)})).fail((function(e){s(e?.data?.message)}))})),e("#superbaddons-newsletter-form input").on("input",(function(){e("#superbaddons-newsletter-error").hide()}))}));