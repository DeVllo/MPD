<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MePrestasDinero - Inicio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- SweetAlert.js -->
    <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142152555-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-142152555-2');
    </script>
 

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/cargador.css" rel="stylesheet">

  </head>

  <body id="page-top">
    
    <div id="contenedor_carga">
      <div id="carga"></div>
    </div>
  <script>
   window.onload = function(){
    var contenedorr = document.getElementById('contenedor_carga');

    contenedorr.style.visibility = 'hidden';
    contenedorr.style.opacity = '0';
   } 
  </script>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Prestamos en el acto</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">+</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#solicitar">Solicitar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#comisiones">Requisitos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#faq">Preguntas frecuentes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in" style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">¿Necesitas un prestamo seguro?</div>
          <div class="intro-heading text-uppercase"><font color="#FFF" style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Pide el tuyo aquí</font></div>
          <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="#solicitar">¡Solicitalo ahora mismo!</a><br/>
          <a class="btn btn-warning btn-l text-uppercase js-scroll-trigger" href="#faq"> ¿Dudas? ¡Información! </a>
        </div>
      </div>
    </header>

        <!-- Portfolio Grid -->
  
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Ofertas disponibles</h2>
            <h3 class="section-subheading text-muted">¡Optá por las 12 cuotas!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#solicitar10mil">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Préstamo de $10.000</h4>
              <p class="text-muted">Paga 12 cuotas mensuales fijas y en pesos de $2333,33</p>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#solicitar15mil">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Préstamo de $15.000</h4>
              <p class="text-muted">Paga 12 cuotas mensuales fijas y en pesos de $3500,00</p>
            </div>
          </div>
          <br/>
        </div>
      </div>
    </section>
        <section id="solicitar">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Solicita tu préstamo aquí</h2>
            <h3 class="section-subheading text-muted">Rellene el formulario y estaremos en contacto a la brevedad</h3>
          </div>
        </div>
        <form id="solicitarForm" name="solicitarForm" novalidate="novalidate">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="nombre">Nombre <font color="red">*</font></label>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    </div>
    <div class="form-group col-md-3">
      <label for="apellido">Apellido <font color="red">*</font></label>
      <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido">
    </div>
    <div class="form-group col-md-6">
      <label for="dni">DNI <font color="red">*</font></label>
      <input type="text" name="dni" class="form-control" id="dni" placeholder="">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="correo">Email <font color="red">*</font></label>
    <input type="text" name="correo" class="form-control" id="correo" placeholder="ejemplo@correo.com">
  </div>
  <div class="form-group col-md-6">
    <label for="telefono">Celular <font color="red">*</font></label>
    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="">
  </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="monto">Monto <font color="red">*</font></label>
      <input type="text" name="monto" class="form-control" id="monto" placeholder="MÁXIMO $10.000">
    </div>
    <div class="form-group col-md-3">
      <label for="cuotas">Cuotas <font color="red">*</font></label>
      <select id="cuotas" name="cuotas" class="form-control">
        <option selected>12</option>
        <option>3</option>
        <option>6</option>
        <option>9</option>
        <option>12</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="tarjeta">Tarjeta <font color="red">*</font></label>
      <select id="tarjeta" name="tarjeta" class="form-control">
        <option selected>Visa</option>
        <option>Visa</option>
        <option>American Express</option>
        <option>MasterCard</option>
        <option>Cabal</option>
        <option>Diners</option>
        <option>ArgenCard</option>
        <option>Naranja</option>
        <option>Nativa</option>
        <option>Tarjeta Shopping</option>
        <option>Cencosud</option>
        <option>Cordobesa</option>  
        <option>CMR Falabella</option>
        <option>Cordial</option>
      </select>
    </div>
      <div class="form-group col-md-3">
      <label for="banco">Banco emisor <font color="red">*</font></label>
      <input type="text" class="form-control" name="banco" id="banco" placeholder="Ej: Banco nación">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
       <label for="cbu">CBU <font color="red">*</font></label>
      <input type="text" class="form-control" name="cbu" id="cbu" placeholder="">
      </div>
      <div class="form-group col-md-6">
          <label for="nrotarjeta">Numero de Tarjeta <font color="red">*</font></label>
          <input type="text" class="form-control" name="nrotarjeta" id="nrotarjeta" placeholder="">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group form-check-inline col-md-6">
          <label class="form-check-label" for="check1">
            <input type="checkbox" class="form-check-input" id="terminos" name="terminos" value="">He leido y acepto los <a target="_blank" href="/content/privacy.pdf"> Términos y condiciones </a>
          </label>
    </div>
  </div>
<div class="form-row">
    <div class="form-group col-md-12">
      <br>
  <div id="success_1"></div>
  <button type="submit" id="solicitarBoton" name="solicitaBoton" class="btn btn-info col-md-12">Solicitar</button>
  </div>
</div>
</form>

        
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p></p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">¿Cómo funciona?</h2>
            <h3 class="section-subheading text-muted">Sencillo, te lo explicamos en 4 pasos:</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading"><b>1°</b> Te contactas con nosotros</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Como primer paso, te contactas con nosotros rellenando el formulario de <a class="js-scroll-trigger" href="#solicitar">solicitud de crédito</a> que se encuentra arriba.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">2° Compruebas tu correo</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Te llegará un correo electrónico o WhatsApp mediante el cual te informaremos si es posible tu crédito.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">3° Confirmación de la operación</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Una vez aceptadas las cuotas a abonar te enviaremos un link para que ingreses y confirmes la operación. </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">4° ¡Todo finalizado!</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">¡En breve tendrías tu dinero en tu cuenta bancaria!</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Comisiones -->
    <section class="bg-light" id="comisiones">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Requisitos básicos</h2><br>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="card-columns">
    <div class="card bg-warning">
      <div class="card-body text-center">
        <p class="card-text"><i class="fa fa-university"></i>Cuenta bancaria y CBU</p>
      </div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-center">
        <p class="card-text"><i class="fa fa-credit-card"></i> Tarjeta de crédito con saldo disponible</p>
      </div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-center">
        <p class="card-text"><i class="fa fa-id-card" style="color:#000; opacity: .9;"></i> DNI Argentino</p>
      </div>
    </div>  
  </div>
  <br><br>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
          </div>
        </div>
      </div>
    </section>
    <section class="accordion-section clearfix mt-3" aria-label="Question Accordions" id="faq">
  <div class="container">
  
    <div class="engloba"><h2>Preguntas frecuentes</h2>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
      <h3 class="panel-title">
        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
        ¿Como me depositarían el dinero?
        </a>
      </h3>
      </div>
      <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
      <div class="panel-body px-3 mb-4">
        <p>El dinero se depositará en tu cuenta bancaria una vez que se encuentre acreditado el pago por la tarjeta de credito a la cuenta de MePrestasDinero.com. Nosotros percibimos el pago de la tarjeta (por el total del crédito y será la tarjeta de crédito la que te debitará mes a mes la cuota que debes abonar).</p>
      </div>
   </div>
    </div>
     
    <div class="panel panel-default">
      <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
      <h3 class="panel-title">
        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
        ¿Funciona con tarjeta de débito?
        </a>
      </h3>
      </div>
      <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
      <div class="panel-body px-3 mb-4">
        <p>Lamentablemente no, MePrestasDinero.com solo acepta tarjetas de crédito con saldo en positivo, de lo contrario no habría manera de otorgar el crédito.</p>
      </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
      <h3 class="panel-title">
        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse1">
        MercadoPago me quiere cobrar el total del crédito, ¿Qué hago?
        </a>
      </h3>
      </div>
      <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
      <div class="panel-body px-3 mb-4">
        <p>Esto no es así, solamente figurará el total a abonar (no vas a abonar ese total sino que lo que se abonará será ese total dividido la cantidad de cuotas que elegiste.</p>
      </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
      <h3 class="panel-title">
        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse2">
        ¿Es seguro?
        </a>
      </h3>
      </div>
      <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
      <div class="panel-body px-3 mb-4">
        <p>Le brindamos la garantía y confianza necesaria para que así sea: MercadoPago es muy estricto con sus clientes y socios. Todas las reglas de nuestra empresa están relacionadas directamente a las de ellos. Si usted no recibe el dinero, nosotros seremos sancionados. Funciona de igual manera para quién solicita. (Por ésto mismo, todo es realizado a través de tarjeta de crédito, para otorgarnos una garantía)</p>
      </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
      <h3 class="panel-title">
        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse3">
        Ya mandé mi solicitud y todavía no me respondieron, ¿Qué hago?
        </a>
      </h3>
      </div>
      <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
      <div class="panel-body px-3 mb-4">
        <p>Lamentamos que así sea: en primer lugar le recordamos que toda solicitud y/o formulario de contacto son evaluados y revisados en horario laboral (Lunes - Viernes de 8:00AM - 20:00 PM). Por otra parte, pudo surgir un inconveniente con el envío del mismo, de ser así, intenta envíar tu formulario nuevamente. Si ésto sigue ocurriendo, podrías contactarte a través de nuestro mail o WhatsApp.</p>
      </div>
      </div>
    </div>
    </div>
  </div>
  </div>
</section>
    
    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contáctanos</h2>
            <h3 class="section-subheading text-muted">Puedes dejarnos tu mensaje desde aquí, o a nuestro WhatsApp.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post" action="mail/contact_me.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nombre completo" required="required" data-validation-required-message="Por favor, ingresa tu nombre">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Dirección de correo electrónico" required="required" data-validation-required-message="Por favor, ingresa tu mail">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Número de telefono." required="required" data-validation-required-message="Por favor, ingresa tu número de teléfono.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Escribenos lo que necesitas" required="required" data-validation-required-message="Por favor complete este campo."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar consulta</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <!-- <span class="copyright">Copyright &copy; MePrestasDinero.com</span> -->
            <span class="copyright">Recuerda que al utilizar nuestra web usted acepta las <a target="_blank" href="https://meprestasdinero.com/content/privacy.pdf">políticas y condiciones</a> de servicio.</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/MePrestasDinero" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/meprestasdinero" target="_blank">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <span><strong><i class="fa fa-whatsapp"></i>WhatsApp:</strong> +54 351 2483649</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->


  <!-- MODAL 1 . TEST -->
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" name="solicitar10mil" id="solicitar10mil" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Préstamo de $10.000</h2>
                  <p class="item-intro">Paga 12 cuotas mensuales de $2.3333,33 (en concepto de capital + comisión y gastos de gestión).</p>
                  <!-- <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt=""> -->      
                  <div class="row">
                  <div class="col-lg-12">
                  <div class="card-wrapper"></div> <br/><br/>
                  <script src="dist/card.js"></script>
                  <script src="vendor/jquery/jquery.min.js"></script>
                  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                  <form class="form-card" name="solicitar10milform" novalidate="novalidate" method="POST">
                  <div class="form-row">
                  <div class="form-group col-md-6">
                  <!-- <label for="nombre">Nombre <font color="red">*</font></label> -->
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre y apellido del titular.">
                  </div>
                  <div class="form-group col-md-6">
                  <input type="tel" name="number" class="form-control" id="number" placeholder="Número que figura en la tarjeta.">
                  </div>
                  </div>
                  <div class="form-row">

                <div class="form-group col-md-6">
    <input type="tel" name="CBU" class="form-control" id="CBU" placeholder="Ingrese el numero de CBU.">
  </div>
  <div class="form-group col-md-6">
    <input type="tel" name="DNI" class="form-control" id="DNI" placeholder="Numero de documento Argentino."> 
  </div>
</div>
<div class="col-md-12">
  <br>
  <h5><center>Información de contacto</center></h5>
  <br>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="email" class="form-control" name="emailCard" id="emailCard" placeholder="Correo electrónico de confirmación.">
      </div>
      <div class="form-group col-md-6">
          <input type="tel" class="form-control" name="telCard" id="telCard" placeholder="Número telefónico de contacto.">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group form-check-inline col-md-12">
          <label class="form-check-label" for="check1">
            <input type="checkbox" class="form-check-input" id="terminos" name="terminos" value="">He leido y acepto los <a target="_blank" href="/content/privacy.pdf"> Términos y condiciones </a>
          </label>
    </div>
  </div>
<div class="form-row">
    <div class="form-group col-md-12">
      <br>
  <div id="success_1"></div>
  <button type="submit" id="solicitarBoton10" name="solicitaBoton10" class="btn btn-info col-md-12">Solicitar $10.000</button>
  </div>
</div>
            </form>

         <script>
            var card = new Card({
            debug: true,
            form: document.querySelector('.form-card'),
            //form: 'form',
            formSelectors: {
            numberInput: 'input[name="number"]', // optional — default input[name="number"]
            //expiryInput: 'input[name="expiry"]', // optional — default input[name="expiry"]
            //cvcInput: 'input[name="cvc"]', // optional — default input[name="cvc"]
            nameInput: 'input[name="name"]'}, // optional - defaults input[name="name"]
            placeholders: {
            name: 'Nombre completo'
            },
            container: '.card-wrapper'
        });
    </script>
          </div>
        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
        <div class="portfolio-modal modal fade" name="solicitar15mil" id="solicitar15mil" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Préstamo de $15.000</h2>
                  <p class="item-intro">Paga 12 cuotas mensuales de $3.500,00 (en concepto de capital + comisión y gastos de gestión).</p>   
                  <div class="row">
                  <div class="col-lg-12">
                  <div class="card-wrapper1"></div> <br/><br/>
                  <script src="dist/card.js"></script>
                  <form class="form-card1" id="form-card1">
                  <div class="form-row">
                  <div class="form-group col-md-6">
                  <input type="text" name="name1" class="form-control" id="name1" placeholder="Nombre y apellido del titular.">
                  </div>
                  <div class="form-group col-md-6">
                  <input type="tel" name="number1" class="form-control" id="number1" placeholder="Número que figura en la tarjeta.">
                  </div>
                  </div>
                  <div class="form-row">
                <div class="form-group col-md-6">
    <input type="tel" name="expiry1" class="form-control" id="expiry1" placeholder="Fecha de vencimiento de la tarjeta.">
  </div>
  <div class="form-group col-md-6">
    <input type="number" name="cvc1" class="form-control" id="cvc1" placeholder="Código de seguridad de la tarjeta.">
  </div>
</div>
<div class="col-md-12">
  <br>
  <h5><center>Información de contacto</center></h5>
  <br>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="email" class="form-control" name="emailCard1" id="emailCard1" placeholder="Correo electrónico de confirmación.">
      </div>
      <div class="form-group col-md-6">
          <input type="tel" class="form-control" name="telCard1" id="telCard1" placeholder="Número telefónico de contacto.">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group form-check-inline col-md-12">
          <label class="form-check-label" for="check1">
            <input type="checkbox" class="form-check-input" id="terminos1" name="terminos1" value="">He leido y acepto los <a target="_blank" href="/content/privacy.pdf"> Términos y condiciones </a>
          </label>
    </div>
  </div>
<div class="form-row">
    <div class="form-group col-md-12">
      <br>
  <div id="success_1"></div>
  <button type="submit" id="solicitarBoton1" name="solicitaBoton" class="btn btn-info col-md-12">Solicitar</button>
  </div>
</div>
            </form>

         <script>
            var card1 = new Card({
            debug: true,
            form: document.querySelector('.form-card1'),
            //form: 'form',
            formSelectors: {
            numberInput: 'input[name="number1"]', // optional — default input[name="number"]
            expiryInput: 'input[name="expiry1"]', // optional — default input[name="expiry"]
            cvcInput: 'input[name="cvc1"]', // optional — default input[name="cvc"]
            nameInput: 'input[name="name1"]'}, // optional - defaults input[name="name"]
            placeholders: {
            name: 'Nombre completo'
            },
            container: '.card-wrapper1'
        });
    </script>
          </div>
        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Préstamo de $20.000</h2>
                  <p class="item-intro text-muted">Paga 12 cuotas mensuales de $3500</p>
                  
                  <div class="row">
              <div class="col-lg-12">
              <form id="veintemil" name="veintemilform" novalidate="novalidate">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" id="Nombre1" type="text" placeholder="Nombre completo" required="required" data-validation-required-message="Por favor, ingresa tu nombre">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Dirección de correo electrónico" required="required" data-validation-required-message="Por favor, ingresa tu mail">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Número de telefono." required="required" data-validation-required-message="Por favor, ingresa tu número de teléfono.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">   
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Mensaje adicional" required="required" data-validation-required-message="Escriba su mensaje..."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Solicitar</button>
                </div>
              </div>
            </form>
          </div>
        </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Modal 5 -->
    <!-- Bootstrap core JavaScript -->
  <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+543512483649", // WhatsApp number
            call_to_action: "Escríbenos por Whatsapp!", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

<!-- /WhatsHelp.io widget -->


    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/solicitar_send.js"></script>
    <script src="js/solicitar10_send.js"></script>
    <script src="js/contact_me.js"></script>    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

      <style>
    .engloba h2 {
    font-family: Arial, Verdana;
    font-weight: 800;
    font-size: 2.5rem;
    color: #091f2f;
    text-transform: uppercase;
}

  .engloba a {
  color: #428bca;
}

  .engloba a:hover {
  color: #4487ca;
}
.accordion-section .panel-default &gt; .panel-heading {
    border: 0;
    background: #f4f4f4;
    padding: 0;
}
.accordion-section .panel-default .panel-title a {
    display: block;
    font-style: italic;
    font-size: 1.5rem;
}
.accordion-section .panel-default .panel-title a:after {
    font-family: 'FontAwesome';
    font-style: normal;
    font-size: 3rem;
    content: "\f106";
    color: #1f7de2;
    float: right;
    margin-top: -12px;
}
.accordion-section .panel-default .panel-title a.collapsed:after {
    content: "\f107";
}
.accordion-section .panel-default .panel-body {
    font-size: 1.2rem;
}
  </style>


</html>