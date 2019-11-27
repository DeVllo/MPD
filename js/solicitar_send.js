$(function() {

  $("#solicitarForm input,#solicitarForm select").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var nombre = $("input#nombre").val();
      var apellido = $("input#apellido").val();
      var dni = $("input#dni").val();
      var correo = $("input#correo").val();
      var telefono = $("input#telefono").val();
      var monto = $("input#monto").val();
      var cuotas = $("select#cuotas").val();
      var tarjeta = $("select#tarjeta").val();
      var banco = $("input#banco").val();
      var cbu = $("input#cbu").val();
      var nrotarjeta = $("input#nrotarjeta").val();
      var firstName = nombre; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      $this = $("#solicitarBoton");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "././mail/mandar_solicitud.php",
        type: "POST",
        data: {
          nombre: nombre,
          apellido: apellido,
          dni: dni,
          correo: correo,
          telefono: telefono,
          monto: monto,
          cuotas: cuotas,
          tarjeta: tarjeta,
          banco: banco,
          cbu: cbu,
          nrotarjeta: nrotarjeta
        },
        cache: false,
        success : function(){
          // Success message
          $('#success_1').html("<div class='alert alert-success'>");
          $('#success_1 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success_1 > .alert-success')
            .append("<strong>Mensaje enviado correctamente. </strong>");
          $('#success_1 > .alert-success')
            .append('</div>');
          $('#solicitarForm').trigger("reset");
        },
        error: function(){
          $('#success_1').html("<div class='alert alert-danger'>");
          $('#success_1 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success_1 > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
          $('#success_1 > .alert-danger').append('</div>');
          //clear all fields
          $('#solicitarForm').trigger("reset");
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
$('#nombre').focus(function() {
  $('#success_1').html('');
});