$(function() {

  $("#solicitar10milform input").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var name = $("input#name").val();
      var number = $("input#number").val();
      var CBU = $("input#CBU").val();
      var DNI = $("input#DNI").val();
      var emailCard = $("input#emailCard").val();
      var telCard = $("input#telCard").val();
      // Check for white space in name for Success/Fail message
      $this = $("#solicitarBoton10");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "././mail/mandar_solicitud10.php",
        type: "POST",
        data: {
          name: name,
          DNI: DNI,
          number: number,
          telCard: telCard,
          emailCard: emailCard,
          CBU: CBU
        },
        cache: false,
        success : function(){
          // Success message
          $('#success_10').html("<div class='alert alert-success'>");
          $('#success_10 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success_10 > .alert-success')
            .append("<strong>Mensaje enviado correctamente. </strong>");
          $('#success_10 > .alert-success')
            .append('</div>');
          $('#solicitarForm').trigger("reset");
        },
        error: function(){
          $('#success_10').html("<div class='alert alert-danger'>");
          $('#success_10 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success_10 > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
          $('#success_10 > .alert-danger').append('</div>');
          //clear all fields
          $('#solicitarForm10').trigger("reset");
        },
        complete: function() {
          setTimeout(function() {
            $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
  $('#success_10').html('');
});