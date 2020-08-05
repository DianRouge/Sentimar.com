
<?php
require_once('recaptcha/recaptchalib.php');
// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6Le06PYSAAAAAN_Pv98_ja1IoKuN7TzCwKe6Q6kK";
$privatekey = "6Le06PYSAAAAAOh0Tf0JjBPDeIrXzUKXxxmkDfSN";
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
<title>Malsa - Equipos Industriales S.A. de C.V.</title>
  <meta name="description" content="Equipos y sistemas para aplicaciones marítimo portuarias">
  <meta name="author" content="Magnetgo">
<!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
  <!-- Bootstrap  -->
  <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- web font  
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">-->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <!-- plugin css  -->
  <link rel="stylesheet" type="text/css" href="js-plugin/animation-framework/animate.css" />
  <link rel="stylesheet" type="text/css" href="js-plugin/pretty-photo/css/prettyPhoto.css" />
  <link type="text/css" rel="stylesheet" href="js-plugin/isotope/css/style.css">
  <link rel="stylesheet" href="js-plugin/supersized/css/supersized.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="js-plugin/supersized/theme/supersized.shutter.css" type="text/css" media="screen" />
  <!-- icon fonts -->
  <link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons.css">
  <link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons-ie7.css">
  <!-- Custom css -->
  <link type="text/css" rel="stylesheet" href="css/layout.css">
  <link type="text/css" id="colors" rel="stylesheet" href="css/colors.css">
  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  

<!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
</head>
<body data-spy="scroll" data-target="#resMainMenu" data-offset="150">
<!-- Preloader -->
<div id="preloader">
  <div id="status">loading</div>
</div>
<!-- Primary Page Layout 
  ================================================== -->
  <!-- globalWrapper -->
  <div id="globalWrapper" class="localscroll">
    <!-- header -->
    <div id="home1"></div>
    <header id="mainHeader" class="clearfix">
      <div class="container">
        <div class="row">
          <div class="span12"> <a href="#home" class="brand"><img src="images/main-logo.png" alt=""/></a>
          <div class="btn_english_container">
            <div class="btn_english" onclick="window.open('index_eng.php','_self');">   ENGLISH VERSION    </div><!--  -->
          </div> 
            <nav id="resMainMenu" class="scrollMenu">
              <ul class="nav clearfix">
                <li id="btn_eng_mobile"><a href="index_eng.php" style="border-right:none;">English Version</a> </li>
                <li><a href="#home1">Home</a> </li>                
                <li><a href="#quienessomos">Quienes Somos</a> </li>
                <li><a href="#representaciones">Representaciones</a> </li>
                <li><a href="#productos">Productos</a> </li>                
                <li><a href="#contacto" style="border-right:none;">Contacto</a> </li>


              </ul>

            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- header -->
    <!-- content -->
    <section id="home">
      <!--Arrow Navigation
      <a id="prevslide" class="load-item"></a> <a id="nextslide" class="load-item"></a> -->
      <div class="container">
        <div class="row">
          <div class="span7">
            <div id="slidecaption"> </div>
          </div>
        </div>
      </div>

    </section>
    <div class="linea_azul"></div>
      <div class="linea_aclaro"></div>
      <div class="linea_gris"></div>
      <div class="limpiador" ></div>           
                <section class="slice" id="quienessomos">
                  <div class="container">
                    <div class="row">
                      <div class="span12">
                      <h1>Quienes somos</h1>
                      <!-- <p>
                Malsa Equipos Industriales es una organización creada en el año 2010, somos una organización vigorosa, fresca y con un amplio conocimiento de las necesidades actuales de los clientes, sin embargo contamos con personal altamente calificado, capacitado y con mas de 20 años de experiencia en el mercado marítimo portuario. Nuestras operaciones están enfocadas principalmente a las ventas al Gobierno Mexicano aunque también tenemos basta experiencia con empresas privadas, sin embargo, por la naturaleza de los bienes y servicios que ofrecemos, nuestro usuario final termina siendo el Gobierno Mexicano, lo que nos obliga a estar siempre actualizado con respecto a las necesidades propias de un cliente tan especial como lo es el Gobierno Mexicano
                      </p>-->
                      <p>
                        Somos una empresa especializada en proveer soluciones para la industria marítima en todos sus aspectos. Tenemos presencia y reconocimiento en los principales mercados administrados por la Secretaría de Comunicaciones y Transportes (SCT): Puertos, marinas, instalaciones portuarias, terminales de carga, cruceros, y centros de control de tráfico marítimo (CCTM).
                      </p>
                      <p>También contamos con presencia en proyectos de Pemex: Offshore a través de diversas EPC (Engineering, Purchase and Construction Companies) dedicadas a la fabricación de plataformas y terminales marítimas petroleras.</p>
                      <p>A su vez, hemos realizado proyectos para la Secretaría de Marina, en sus áreas de construcciones navales, búsqueda y salvamento, astilleros de reparación y construcciones.</p>
                      <p class="texto_especial_big">Nos definimos como integradores tecnológicos: ofrecemos paquetes de soluciones con proyectos “llave en mano” que nos permiten encargarnos no solamente del suministro de los equipos, sino que también nos encargamos de la instalación, configuración, arranque y pruebas de sistemas. O bien, del suministro de los bienes y algunas etapas de la instalación, nos involucramos tanto como nuestros clientes lo necesiten en cualquier etapa del proyecto.</p>
                      <p>Somos una organización creada en el año 2010, vigorosa, fresca y con un amplio conocimiento de las necesidades actuales de los clientes, sin embargo contamos con personal altamente calificado, capacitado y con más de 20 años de experiencia en el mercado marítimo portuario. Nuestras operaciones están enfocadas principalmente a las ventas al Gobierno Mexicano aunque también tenemos basta experiencia con empresas privadas, sin embargo, por la naturaleza de los bienes y servicios que ofrecemos, nuestro usuario final termina siendo el gobierno, lo que nos obliga a estar siempre actualizado con respecto a las necesidades propias de un cliente tan especial como lo es el Gobierno Mexicano.</p>
                      <div class="espacio50"></div>
                    
                      </div>
                     
                    </div>
                  </div>
                </section>
                 <div id="paralaxSlice1" data-stellar-background-ratio="0.5">
                  <div class="paralaxText">
                   
                    <span class="bigTitle">Somos <strong>la mejor alternativa</strong> para la oferta de soluciones<br> marítimo portuarias y petroleras.</span>
                  </div>
                </div>
               
                <section class="slice color1" id="representaciones">
                  <div class="container">
                    <div class="row">
                    <h1>Representaciones</h1>  
                    
                      <div class="service" id="service_info">
             
              
                          <a href="informacion.php?logo=tideland"  target="_blank" class="fancybox fancybox.iframe" > <img src="img/logos/tideland.png" class="los_logos" width="221" height="221"/></a>                            
                          <a href="informacion.php?logo=irm" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/irm.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion.php?logo=floatex" target="_blank" class="fancybox fancybox.iframe">  <img src="img/logos/floatex.png" class="los_logos width="221" height="221""/></a>                            
                          <a href="informacion.php?logo=archbeacon" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/archbeacon.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion.php?logo=strainstall" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/strainstall.png" class="los_logos" width="221" height="221"/></a>                            
                          <a href="informacion.php?logo=delitek" target="_blank" class="fancybox fancybox.iframe"><img src="img/logos/delitek.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion.php?logo=teamtec" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/teamtec.png" class="los_logos" width="221" height="221"/></a>                            
                          <a href="informacion.php?logo=pomar" target="_blank" class="fancybox fancybox.iframe"><img src="img/logos/pomar.png" class="los_logos" width="221" height="221"/></a>

                          <a href="informacion.php?logo=doen" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/doen.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion.php?logo=alscott" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/alscott.png" class="los_logos" width="221" height="221"/></a>                            
                          <a href="informacion.php?logo=color_light" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/color_light.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion.php?logo=aluminox_solo" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/aluminox_solo.png" class="los_logos" width="221" height="221"/></a>
                         <a href="informacion.php?logo=cae" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/cae.png" class="los_logos" width="221" height="221"/></a>
                         

                            
                          
                      </div>
                     
                      <div class="limpiador" id="productos"></div>
                      <div class="espacio80px" ></div>

                      <h1>productos</h1>        
          
                          <div class=" span4  ">
                            <div class="record">
                              <div class="prods_title">PUERTOS</div>
                              <ul>
                                  <li>Linternas marinas</li>
                                  <li>Faros Giratorios</li>
                                  <li>Boyas de canal</li>
                                  <li>Boyas de mar</li>
                                  <li>Estructuras metálicas para balizamiento</li>
                                  <li>Linternas de enfilación</li>
                                  <li>Arcos de luz tipo led</li>
                                  <li>Boyas y estaciones meteorológicas</li>
                                  <li>Defensas para muelles</li>
                                  <li>Plantas potabilizadoras</li>

                              </ul>
                              <div class="clearfix"></div>
                            </div>
                          </div>
                          <!--\\record-->
                          
                              
                             <div class="span4 ">
                               <div class="record">
                                 <div class="prods_title">PLATAFORMAS</div>
                                 <ul>
                                      <li>Incineradores</li>
                                      <li>Compactadores</li>
                                      <li>Ayudas a la navegación</li>
                                      <li>Plantas potabilizadoras</li>
                                      <li>Ánodos de sacrificio</li>
                                      <li>Defensas para piernas de plataformas</li>
                                      <li>Faros buscadores</li>
                                      <li>Malacates y grúas</li>
                                      <li>Cadenas, grilletes y accesorios</li>
                                      <li>Mobiliario para cocinas</li>
                                      <li>Mobiliario para lavandería</li>
                                      <li>Cámaras frigoríficas</li>
                                      <li>Cámaras de congelación</li> 
                                      <li>Sistemas de anclaje para aguas profundas</li>
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                              </div>
                          
                          <!--\\record-->
                          
                          <div class="span4 ">
                            <div class="record">
                              <div class="prods_title">BARCOS</div>
                              <ul>
                                    <li>Incineradores</li>
                                    <li>Compactadores</li>
                                    <li>Plantas potabilizadoras</li>
                                    <li>Ánodos de sacrificio</li>
                                    <li>Sistemas de cuchillas para propelas</li>
                                    <li>Faros buscadores</li>
                                    <li>Malacates y grúas</li>
                                    <li>Cadenas, grilletes y accesorios</li>
                                    <li>Mobiliario para cocinas</li>
                                    <li>Mobiliario para lavandería</li>
                                    <li>Cámaras frigoríficas</li>
                                    <li>Cámaras de congelación</li>
                                   

                              </ul>
                              <div class="clearfix"></div>
                            </div>  
                          </div>
                          <!--\\record-->
                     </div>
                     </div>                     
                    </section>
                    

                    


                  
                        
                         
                         
                          
                          <div id="paralaxSlice2" data-stellar-background-ratio="0.5">
                          <div class="paralaxText">
                            
                            <span class="bigTitle" >Nos especializamos en productos para las<br>
telecomunicaciones, electrónica, seguridad<br>
y ayudas a la navegación                </span>
                            </div>
                          </div>
                          <div id="contacto"></div>
                          <section class="slice color1"  >
                            <div class="container">
                              <div class="row mb40">
                                <div class="span12">
                                  <h1>Contacto</h1>
                                </div>
                                <div id="contactSlide">
                                  
                                  <div class="span5">
                                      <div class="contactus">
                                        <form id="contactform" action="assets/php/submit.php" method="post">
                                          <input type="text" name="name" id="name" placeholder="Nombre:" class="modificado">
                                          <input type="text" name="email" id="email" placeholder="Email:" class="modificado">
                                          <input type="text" name="subject" id="subject" placeholder="Teléfono:" class="modificado">
                                          <textarea name="message" id="message" placeholder="Mensaje:"></textarea>
                                           <?php
                                          
                                            echo recaptcha_get_html($publickey);
                                          ?>
                                          <br>
                                          <input class="btn" id="submit" type="submit" value="Enviar">
                                           
                                        </form>
                                        <div id="valid-issue" style="display:none;"> Por favor llena todos los campos</div>
                                    </div>
                                   


                                  </div>
                                  <div class="span5" style="margin-left:80px;">
                                    <div class="project-detail">
                                      <div class="contacto_title">
                                        <img src="img/logo_chico.png" width="231" height="61" />
                                      </div>
                                      
                                      <div style=" line-height: 25px; margin-bottom:30px; ">
                                        Malsa Equipos Industriales S.A. de C.V.<br>
                                        Telefono: +52 (55) 5536-2040<br>
                                        Horario de atención: 09:00 a 18:30 hrs de Lunes a Viernes.
                                      </div>
                                     
                                  </div>
                                  <a href="mailto:direccion@malsaequipos.com.mx" class="email_contacto" >direccion@malsaequipos.com.mx</a>
                                  </div>
                                </div>
                                <div id="mapSlide">
                                  <div class="span12">
                                    <div id="mapWrapper"></div>
                                    <a href="#" title="" id="mapReturn" class="btn btn-small"><i class="icon-left-dir"></i> Back</a> </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <!--<nav class="arrowsNav"> 
                              <a href="#home" class="navUp color4"> <i class="icon-up-open"></i> </a> 
                            </nav>
                            content -->
                            <!-- footer -->
                            <footer>
                              <section id="mainFooter">
                                <div class="container" id="footer">
                                  <div class="row">
                                    <div class="span12 text-center">
                                        <div class="span5">
                                            <p class="txt_malsa_footer"  >Malsa Equipos Industriales S.A de C.V.   </p>
                                          <p style="text-align: left; color:#B2B3B5; font-size: 12px; line-height:16px;">
                                          Nuestras oficinas corporativas se encuentran en la Ciudad de México DF. Tel. (55) 5536 2040. <br>
                                          Contamos con 3 oficinas regionales de ventas y atención a clientes en: <br>
                                          a) Paraíso, Tabasco<br>
                                          b) Ciudad del Carmen, Campeche<br>
                                          c) Salina Cruz, Oaxaca
                                          <br>
                                         <!-- Oficina Principal / México, DF. Tel. (55) 5536 2040 -->
                                         </p>
                                          <p style="text-align: left;"><a href="info/aviso_de_privacidad_malsa.pdf" target="_blank" style="color: #FFF; font-size: 12px; text-decoration: underline;"> AVISO DE PRIVACIDAD</a></p>
                                         </div>   
                                         <div class="span6">
                                           
                                           <ul class=" navfooter" style="float:left;">            
                                              <li><a href="#home1">Home</a> </li>                
                                              <li><a href="#quienessomos">Quienes Somos</a> </li>
                                              <li><a href="#representaciones">Representaciones</a> </li>
                                              <li><a href="#productos">Productos</a> </li>
                                              <li style="border-right:none;"><a href="#contacto" >Contacto</a> </li>
                                            </ul>
                                            <div class="limpiador"></div>
                                         </div>
                                      </div>

                                      <div class="span12">
                                        
                                      </div>
                                      <div class="span12"> </div>
                                    </div>
                                  </div>
                                </section>
                              </footer>
                              
                              <!-- End footer -->
                            </div>
                            
                            <!-- global wrapper -->

<!-- End Document 
  ================================================== -->
  <script src="js/modernizr-2.6.1.min.js"></script>

  <script type="text/javascript" src="js-plugin/respond/respond.min.js"></script>
  <script type="text/javascript" src="js-plugin/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
  <!-- third party plugins  -->
  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap-carousel-ie.js"></script>
  <script type="text/javascript" src="js-plugin/easing/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js-plugin/supersized/js/supersized.3.2.7.min.js"></script>
  <script type="text/javascript" src="js-plugin/supersized/theme/supersized.shutter.min.js"></script>
  <script type="text/javascript" src="js-plugin/responsive-nav/responsive-nav.min.js"></script>

  <script type="text/javascript" src="js-plugin/isotope/jquery.isotope.min.js"></script>
  <!--
  <script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
  <script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script> 
  <script type="text/javascript" src="js-plugin/pretty-photo/js/jquery.prettyPhoto.js"></script>-->
  <script type="text/javascript" src="js-plugin/parallax/js/jquery.scrollTo-1.4.3.1-min.js"></script>
  <script type="text/javascript" src="js-plugin/parallax/js/jquery.localscroll-1.2.7-min.js"></script>
  <script type="text/javascript" src="js-plugin/parallax/js/jquery.stellar.min.js"></script>
  <script type="text/javascript" src="js-plugin/smoothscroll/SmoothScroll.js"></script>
  <!-- Custom  -->
  <script type="text/javascript" src="js/custom.js"></script>


  <!-- FANCYBOX-->
<!-- Add jQuery library 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>-->
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
  $(document).ready(function() {
        $(".fancybox").fancybox();
        $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : $.fancybox.href,
          type : 'iframe',
          padding : 5
        });
      });

    });
</script>
<!-- // FANCYBOX-->

</body>
</html>
