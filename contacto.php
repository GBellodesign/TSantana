<!doctype html>
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Transportadora Santana" />
  <meta name="description" content="Transporte terrestre de carga a granel en Colombia, transporte de carga por carretera en Colombia, transportador terrestre de carga a granel, transporte de carga a granel por tierra, transportador de carga a granel en Colombia." />
  <meta name="keywords" content="transporte terrestre de carga en Colombia, transporte de carga a granel, transporte terrestre de carbón, trasporte terrestre de carga" />
  <meta name="robots" content="index, follow" />
  <title>Transportadora Santana - Transporte terrestre de carga a granel en Colombia</title>
  <link rel="stylesheet" href="foundation-icons/foundation-icons.css">
  <link rel="stylesheet" href="slick/slick.css"/>
  <link rel="stylesheet" href="stylesheets/app.css" />


  <link rel="icon" href="favicon.png" sizes="16x16 32x32 64x64 72x72" type="image/png"/>

  <script src="bower_components/modernizr/modernizr.js"></script>


</head>
<body>

<section class="hero">


  <!--         Menú         -->        
    <div id="mainmenu" class="fixed">
      <nav class="top-bar " data-topbar role="navigation" data-options="is_hover: false">
        <ul class="title-area">
          <li class="name">
            <h1>
              <a href="#" alt="Transportadora Santana">
                <img src="img/trans_santana.svg" alt="Transportadora Santana" width="300" height="100" class="show-for-large-up">
                <img src="img/trans_santana.svg" alt="Transportadora Santana" width="200" height="67" class="hide-for-large-up imglogosmall">
              </a>
            </h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menú</span></a></li>      
        </ul>

        <section class="top-bar-section">

                <!-- <ul id="redes" class="button-group right">
                  <li><a href="https://www.facebook.com/geizzerconsultoria" class="step fi-social-facebook size-36" target="blank" style="font-size:36px;" ></a></li>
                  <li><a href="https://twitter.com/GeizzerGestion" class="step fi-social-twitter size-36" target="blank" style="font-size:36px;"></a></li>
                  <li><a href="http://www.linkedin.com/company/geizzer" class="step fi-social-linkedin size-36" target="blank" style="font-size:36px;"></a></li>
                  <li><a href="https://plus.google.com/+GeizzerConsultores" class="step fi-social-google-plus size-36" rel="publisher" target="blank" style="font-size:36px;"></a></li>
                </ul> -->
                
                <ul class="right botonmenu">
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="servicios.html">Servicios</a></li>
                  <li><a href="nosotros.html">Nosotros</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li class="active"><a href="contacto.php">Contacto</a></li>
                </ul>

        </section>
      </nav>
    </div>

</section>



            <section class="hero-content">
              <div class="row">
                <div class="large-12 columns content-to-grid">
                  <h1>Contacto</h1>
                </div>
              </div>

            </section>
            <div class="content-to-grid">
             <div class="row">
               <div class="large-6 columns">
                <br>
                <h3>Dirección</h3>
                <br>

                <p><strong>Oficina principal</strong></p>

                <p><em>Carrera 14 No. 4-41 Sur, local 2</em><br>
                 Tunja, Boyacá - Colombia</p>

                 <p>Teléfono: (8) 744 8248<br />
                   E-mail: info@transportadorasantana.com.co</p><!-- // MAILCHIMP SUBSCRIBE CODE \\ -->

                   <!-- \\ MAILCHIMP SUBSCRIBE LINK // -->

                   <p><strong>Horario:</strong><br>
                     lun-vie 08:00 am  - 12:00 m  / 02:00 pm - 6:00 pm  <br>  sab 08:00 am - 12:00 m</p>

                     <p><a href="#">Suscríbase a nuestro boletín</a></p>

                     <hr>
                     <!-- Contact Form -->

                     <br>
                     <h3>Escríbanos</h3>
                     <br>


                     <form data-abide action="contacto.php" method="post" >
                       <div class="name-field">
                         <label for="nombre">Nombre <small>requerido</small>
                           <input type="text" placeholder="Nombre" required pattern="[a-z A-Z áéíóúüñÑÁÉÍÓÚÜ]+" name="nombre" id="nombre"/>
                         </label>
                         <small class="error">Su nombre es requerido, debe ser alfabético.</small>
                       </div>

                       <div class="email-field">
                         <label for="email">Email <small>requerido</small>
                           <input type="email" placeholder="Email" required pattern="email" name="email" id="email"/>
                         </label>
                         <small class="error">Se requiere un correo válido.</small>
                       </div>

                       <div>
                         <label for="cargo">Seleccione una opción
                           <select name="cargo" id="cargo">
                             <option value="generador">Generador de carga</option>
                             <option value="proveedor">Proveedor</option>
                             <option value="transportador">Transportador</option>
                             <option value="particular">Particular</option>
                           </select>
                         </label>
                       </div>

                       <label for="mensaje">Su mensaje <small>requerido</small>
                         <textarea name="mensaje" cols="40" rows="5" required placeholder="Su mensaje" id="mensaje"></textarea>
                       </label>

                       <button class="fontboton" type="submit">Enviar</button>

                     </form>
                     <br>
                     <br>

                     <?php

                     $nombre = $_POST['nombre'];
                     $email = $_POST['email'];
                     $cargo = $_POST['cargo'];
                     $mensaje = $_POST['mensaje'];
                     $para = "mauricio.santanasas@hotmail.com, info@transportadorasantana.com.co";

                     $headers = "From: $nombre <$email>\r\n";
                     $headers .= "X-Mailer: PHP5\n";
                     $headers .= 'MIME-Version: 1.0' . "\n";
                     $headers .= "Content-type: text/html;\r\n charset=utf-8; \r\n" ;

                     $asunto = "Web Transportadora Santana";
                     $cuerpo = "Nombre: ".$nombre."<br>";
                     $cuerpo = "Cargo: ".$cargo."<br>";
                     $cuerpo = "Email: ".$email."<br>";
                     $cuerpo = "Mensaje: ".$mensaje;

                     if($nombre != '' && $email != '' && $mensaje != ''){
                           mail($para,$asunto,$cuerpo,$headers); //ENVIAR!
                           echo '<div class="row"><div data-alert class="alert-box success">Enviado correctamente.<a href="contacto.php" class="close">&times;</a></div></div>';
                         }
                         ?>


                       </div>

                       <div class="large-6 columns">
                        <br>
                        <h3>Dónde encontrarnos</h3>
                        <br>

                        <iframe src="https://mapsengine.google.com/map/embed?mid=zazNzJUqzrtk.kDcxwcTBzKgk" width="500" height="750"></iframe>

                      </div>
                    </div>
                  </div>     


                 <!-- Inicio del Footer -->
                 <footer>
                   <div class="row">

                    <div class="large-8 small-12 columns">

                      <div class="row">
                        <div class="large-6 small-12 columns">
                          <h4 class="">Redes sociales</h4>
                          
                          <ul id="redes2" class="button-group">
                            <li><a href="https://www.facebook.com/transantanasas" class="step fi-social-facebook size-social" target="blank"></a></li>
                            <li><a href="https://twitter.com/santanatrans" class="step fi-social-twitter size-social" target="blank"></a></li>
                            <li><a href="https://www.linkedin.com/company/transportadora-santana" class="step fi-social-linkedin size-social" target="blank"></a></li>
                            <li><a href="https://plus.google.com/105002797871692960099" class="step fi-social-google-plus size-social" rel="publisher" target="blank"></a></li>
                          </ul>
                          <br><br><br><br>

                          <div class="row show-for-medium-up">
                            <div class="large-12 columns">
                              <p>
                                <small>
                                  <strong>© Copyright Transportadora Santana, 2015.</strong><br>
                                  <em>Todos los derechos reservados.</em><br>
                                  Carrera 14 No. 4-41 Sur, local 2<br>
                                  Tunja, Boyacá - Colombia<br>
                                </small>
                              </p> 

                            </div>
                            
                          </div> 
                        </div>

                        <div class="large-6 columns show-for-medium-up">
                          <h4>Twitter</h4>
                          <br>
                          <a class="twitter-timeline" href="https://twitter.com/SantanaTrans" data-widget-id="551821433807306752">Tweets por el @SantanaTrans.</a>
                          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                          <br>
                        </div>
                        
                      </div>
                       
                       
                    </div>

                    <div class="large-4 small-12 columns">
                      <div class="row">

                        <div class="large-12 columns">
                          <h4>Suscríbase</h4>

                          <!-- Begin MailChimp Signup Form -->
                          <div id="mc_embed_signup">
                          <form action="//blogspot.us9.list-manage.com/subscribe/post?u=faa6fee0bc10c1a9801f9bfbd&amp;id=b061069cce" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                              <div id="mc_embed_signup_scroll">
                            
                          <div class="mc-field-group">
                            <label for="mce-EMAIL" style="color:#c8c8c8;">Email <small style="color:#c8c8c8;">Requerido</small></label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                          </div>
                          <div class="mc-field-group">
                            <label for="mce-FNAME" style="color:#c8c8c8;">Nombre <small style="color:#c8c8c8;">Requerido</small></label>
                            <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                          </div>
                          <div class="mc-field-group">
                            <label for="mce-LNAME" style="color:#c8c8c8;">Apellido <small style="color:#c8c8c8;">Requerido</small></label>
                            <input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
                          </div>
                            <div id="mce-responses" class="clear">
                              <div class="response" id="mce-error-response" style="display:none"></div>
                              <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                              <div style="position: absolute; left: -5000px;"><input type="text" name="b_faa6fee0bc10c1a9801f9bfbd_b061069cce" tabindex="-1" value=""></div>
                              <br>
                              <div class="clear"><input type="submit" value="Suscríbase" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                              </div>
                          </form>
                          </div>

                          <!--End mc_embed_signup-->


                        </div>

                        
                      </div>
                      
                         
                    </div>

                    
                    
                    </div>
                 </footer>






                  <script src="bower_components/jquery/dist/jquery.min.js"></script>
                  <script src="bower_components/foundation/js/foundation.min.js"></script>
                  <script src="js/app.js"></script>
                  <script src="js/vendor/fastclick.js"></script>


                  <script>
                  $(document).foundation();
                  </script>

                  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

                  <script src="slick/slick.min.js"></script>

                  <script>
                  $(document).ready(function(){
                   $('.slide-content').slick({
                     autoplay: true
                   });
                 });
                  </script>

                  <script>
                  $(document).foundation({
                   tab: {
                     callback : function (tab) {
                       console.log(tab);
                     }
                   }
                 });
                  </script>

                  <script>
                  $(document).foundation({
                   accordion: {
                     callback : function (accordion) {
                       console.log(accordion);
                     }
                   }
                 });
                  </script>


               </body>
    </html>
