$(document).ready(function() {

  $("#contact-form").validate({
    submitHandler: function(form) {
      var formData = $('#contact-form').serialize();

      $("#submit-button").text('Enviando...');
      $("#submit-button").prop('disabled', true);

      $.ajax({
        type: 'POST',
        url: 'send_form.php',
        data: formData,
      });

      form.submit();
    }
  });

});
