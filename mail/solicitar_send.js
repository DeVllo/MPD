$(document).ready(function(){
  var form = $('#solicitarForm');

  $(".solicitarForm").bind("submit", function(){
    $.ajax({
      type: $(this).attr("method"),
      url: "mail/mandar_solicitud.php",
      data: $(this).serialize(),
      success: function(respuesta) {
        if(respuesta == "ok"){
          $('#success_1').html("<div class='alert alert-success'>");
          $('#success_1 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success_1 > .alert-success')
            .append("<strong>Mensaje enviado correctamente. </strong>");
          $('#success_1 > .alert-success')
            .append('</div>');
        }
        else {
        $('#success_1').html("<div class='alert alert-danger'>");
          $('#success_1 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success_1 > .alert-danger').append($("<strong>").text("Disculpa " + nombre + ", it seems that my mail server is not responding. Please try again later!"));
          $('#success_1 > .alert-danger').append('</div>');
          //clear all fields
          $('#solicitarForm').trigger("reset");  
        }  
      },

      error: function(){
          $('#success_1').html("<div class='alert alert-danger'>");
          $('#success_1 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success_1 > .alert-danger').append($("<strong>").text("Disculpa " + nombre + ", it seems that my mail server is not responding. Please try again later!"));
          $('#success_1 > .alert-danger').append('</div>');
          //clear all fields
          $('#solicitarForm').trigger("reset");

      }
    });
    return false;
  });

});