
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
  <!-- punto clave cambiar url al subir y hacer un htaccess distinto para el host

  /DINAMOMEDIA/malsa2015/

  <base href="<?php //echo 'http://'.$_SERVER['SERVER_NAME'].'/2015/'?>" target="_top" />  -->
<!-- CSS
  ================================================== -->
  <!-- Bootstrap  -->
  <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- web font  -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">
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
  <script src="js/modernizr-2.6.1.min.js"></script>


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
          <div class="span12"> <a href="#home1" class="brand"><img src="images/main-logo.png" alt=""/></a>
          <div class="btn_english_container">
            <div class="btn_english" onclick="window.open('home.php','_self');">   SPANISH VERSION    </div><!--  -->
          </div> 
            <nav id="resMainMenu" class="scrollMenu">
              <ul class="nav clearfix">
                <li id="btn_eng_mobile"><a href="home.php" style="border-right:none;">Spanish Version</a> </li>
                <li><a href="#home1">HOME</a> </li>                
                <li><a href="#quienessomos">WHO WE ARE</a> </li>
                <li><a href="#representaciones">REPRESENTATIONS</a> </li>
                <li><a href="#productos">PRODUCTS</a> </li>                
                <li><a href="#contacto" style="border-right:none;">CONTACT</a> </li>


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
                      <h1>Who we are</h1>
        <!-- <p>
  Malsa Equipos Industriales es una organización creada en el año 2010, somos una organización vigorosa, fresca y con un amplio conocimiento de las necesidades actuales de los clientes, sin embargo contamos con personal altamente calificado, capacitado y con mas de 20 años de experiencia en el mercado marítimo portuario. Nuestras operaciones están enfocadas principalmente a las ventas al Gobierno Mexicano aunque también tenemos basta experiencia con empresas privadas, sin embargo, por la naturaleza de los bienes y servicios que ofrecemos, nuestro usuario final termina siendo el Gobierno Mexicano, lo que nos obliga a estar siempre actualizado con respecto a las necesidades propias de un cliente tan especial como lo es el Gobierno Mexicano
        </p>-->
        <p>
          Our company specializes in providing solutions for the maritime industry in all its aspects. We have presence and a very good reputation in the different sectors administrated by the Ministry of Communications and Transport (SCT) markets, such as: Ports, marinas, port facilities, cargo terminals, Vessel traffic management and control (VTMS).
        </p>
        <p>We also have presence in Pemex projects: Offshore through various EPC (Engineering, Purchase and Construction Companies) engaged in the manufacture of oil platforms, drilling rigs and marine terminals.</p>
        <p>We have carried out projects for the Navy Ministry, in their different areas as shipbuilding, people search and rescue, ship repair yards and marine construction.</p>
        <p class="texto_especial_big">We define ourselves as “Technology Integrators”: we offer packages with "turnkey" project solutions that allow us to take care not, only of supplying equipment, but also take care of installation, commissioning, configuration, startup and testing systems. Or, the supply of goods and some stages of the commissioning, we engage our customers as much as they need at any stage of the project.</p>
        <p>We are an organization created in 2010, vigorous, fresh and with a broad understanding of the current needs of customers, however we have trained highly qualified personnel with over 20 years experience in the maritime & port market. Our operations are primarily focused on sales to the Mexican government but also have extensive experience with private companies, however, by the nature of the goods and services we offer our end user is always the government, which requires us to be always updated with respect to the characteristics of such a special as it is the Mexican government client.</p>
                      <div class="espacio50"></div>
                    
                      </div>
                     
                    </div>
                  </div>
                </section>
                 <div id="paralaxSlice1" data-stellar-background-ratio="0.5">
                  <div class="paralaxText">
                   
                    <span class="bigTitle">We are <strong>the best alternative</strong> to delivering solutions<br> for sea port and oil application</span>
                  </div>
                </div>
               
                <section class="slice color1" id="representaciones">
                  <div class="container">
                    <div class="row">
                    <h1>Representations</h1>  
                    
                      <div class="service" id="service_info">
             
              
                          <a href="informacion_eng.php?logo=tideland" target="_blank"  class="fancybox fancybox.iframe"> <img src="img/logos/tideland.png" class="los_logos" width="221" height="221"/></a>                            
                          <a href="informacion_eng.php?logo=irm" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/irm.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion_eng.php?logo=floatex" target="_blank" class="fancybox fancybox.iframe">  <img src="img/logos/floatex.png" class="los_logos" width="221" height="221"/></a>                            
                          <a href="informacion_eng.php?logo=archbeacon" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/archbeacon.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion_eng.php?logo=strainstall" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/strainstall.png" class="los_logos" width="221" height="221"/></a>                            
                          <a href="informacion_eng.php?logo=delitek" target="_blank" class="fancybox fancybox.iframe"><img src="img/logos/delitek.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion_eng.php?logo=teamtec" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/teamtec.png" class="los_logos" width="221" height="221"/></a>                            
                          <a href="informacion_eng.php?logo=pomar" target="_blank" class="fancybox fancybox.iframe"><img src="img/logos/pomar.png" class="los_logos" width="221" height="221"/></a>

                          <a href="informacion_eng.php?logo=doen" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/doen.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion_eng.php?logo=alscott" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/alscott.png" class="los_logos" width="221" height="221"/></a>                            
                          <a href="informacion_eng.php?logo=color_light" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/color_light.png" class="los_logos" width="221" height="221"/></a>
                          <a href="informacion_eng.php?logo=aluminox_solo" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/aluminox_solo.png" class="los_logos" width="221" height="221" /></a>
                         <a href="informacion_eng.php?logo=cae" target="_blank" class="fancybox fancybox.iframe"> <img src="img/logos/cae.png" class="los_logos" width="221" height="221"/></a>
                         

                            
                          
                      </div>
                     
                      <div class="limpiador" id="productos"></div>
                      <div class="espacio80px" ></div>

                      <h1>productos</h1>        
          
                          <div class=" span4  ">
                            <div class="record">
                              <div class="prods_title">PORTS</div>              
                                <ul>
                                  <li>Marine lanterns</li>
                                  <li>Rotating beacons</li>
                                  <li>Channel buoys</li>
                                  <li>Sea Buoys</li>
                                  <li>Metal structures for marine aids to navigation</li>
                                  <li>Range lanterns</li>
                                  <li>Lighted arcbeacons</li>
                                  <li>Metheorological buoys and stations</li>
                                  <li>Pier fender systems</li>
                                  <li>Water treatment plants</li>
                                 
                                </ul>
                              <div class="clearfix"></div>
                            </div>
                          </div>
                          <!--\\record-->
                          
                              
                             <div class="span4 ">
                               <div class="record">
                                  <div class="prods_title">Offshore application</div>
            
                                    <ul>
                                      <li>Incinerators</li>
                                      <li>Trash compactors</li>
                                      <li>Marine aids to navigation</li>
                                      <li>Water treatment plants</li>
                                      <li>Sacrificial anodes</li>
                                      <li>Fenders for legs platforms</li>
                                      <li>Searching and rescue beacons</li>
                                      <li>Winches and hoists and Cranes</li>
                                      <li>Marine chain, shackles and accesories</li>
                                      <li>Furnishing for kitchens SST</li>
                                      <li>Laundry Furniture SST</li>
                                      <li>cold rooms & cameras</li>
                                      <li>Freezing cameras</li>





                                    </ul>
                                  <div class="clearfix"></div>
                                </div>
                              </div>
                          
                          <!--\\record-->
                          
                          <div class="span4 ">
                            <div class="record">
                             <div class="prods_title">Vessels</div>
              
                              <ul>
                               <li>Incinerators</li>
                               <li>Trash compactors</li>
                               <li>Vessels mooring systems for deep water</li>
                               <li>Water treatment plants</li>
                               <li>Sacrificial anodes</li>
                               <li>Cutting blades for propeller</li>
                               <li>Searching and rescue beacons</li>
                               <li>Winches and hoists and Cranes</li>
                               <li>Marine chain, shackles and accesories</li>
                               <li>Furnishing for kitchens SST</li>
                               <li>Laundry Furniture SST</li>
                               <li>cold rooms & cameras</li>
                               <li>Freezing cameras</li>


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
                            
                            <span class="bigTitle" >We are specialized in supply products<BR>
                          for telecommunications, electronics, security <BR>and aids to navigation.                </span>
                            </div>
                          </div>
                          <div id="contacto"></div>
                          <section class="slice color1"  >
                            <div class="container">
                              <div class="row mb40">
                                <div class="span12">
                                  <h1>Contact Us</h1>
                                </div>
                                <div id="contactSlide">
                                  
                                  <div class="span5">
                                      <div class="contactus">
                                        <form id="contactform2" action="../assets/php/submit.php" method="post">
                                        <input type="text" name="name" id="name" placeholder="Name:" class="modificado">
                                        <input type="text" name="email" id="email" placeholder="Email:" class="modificado">
                                        <input type="text" name="subject" id="subject" placeholder="Telephone:" class="modificado">
                                        <textarea name="message" id="message" placeholder="Message:"></textarea>
                                        <?php
                                        
                                          echo recaptcha_get_html($publickey);
                                        ?>
                                        <br>
                                        <input class="btn" id="submit" type="submit" value="Send">
                                      </form>
                                      <div id="valid-issue" style="display:none;"> Please complete the form</div>
                                    </div>
                                   


                                  </div>
                                  <div class="span5" style="margin-left:80px;">
                                    <div class="project-detail">
                                      <div class="contacto_title">
                                        <img src="img/logo_chico.png"  width="231" height="61"/>
                                      </div>
                                      
                                      <div style=" line-height: 25px; margin-bottom:30px; ">
                                        Malsa Equipos Industriales S.A. de C.V.<br>
                                        Telephone: +52 (55) 5536-2040<br>
                                        Hours of operation: 09:00 a 18:30 hrs (Monday to Friday).
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
                                             <p style="text-align: left;  text-transform: uppercase;">Malsa Equipos Industriales S.A de C.V.   </p>
              <p style="text-align: left; color:#B2B3B5; font-size: 12px; line-height:16px;">
              Corporate offices are located in Mexico City Tel. (55) 5536 2040 <br>
              Representation and Sales Offices are located in: <br>
                              a) Paraíso, Tabasco<br>
                                          b) Ciudad del Carmen, Campeche<br>
                                          c) Salina Cruz, Oaxaca
                </p>
              <p style="text-align: left;"><a href="info/aviso_de_privacidad_malsa.pdf" target="_blank" style="color: #FFF; font-size: 12px; text-decoration: underline;"> Privacy Policy</a></p>

                                         </div>   
                                         <div class="span6">
                                           
                                           <ul class=" navfooter" style="float:left;">            
                                              <li><a href="#home1">Home</a> </li>                
                                              <li><a href="#quienessomos">Who we are</a> </li>
                                              <li><a href="#representaciones">Representations</a> </li>
                                              <li><a href="#productos">Products</a> </li>
                                              <li style="border-right:none;"><a href="#contacto" >Contact</a> </li>
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
  <script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
  <script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js-plugin/pretty-photo/js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="js-plugin/parallax/js/jquery.scrollTo-1.4.3.1-min.js"></script>
  <script type="text/javascript" src="js-plugin/parallax/js/jquery.localscroll-1.2.7-min.js"></script>
  <script type="text/javascript" src="js-plugin/parallax/js/jquery.stellar.min.js"></script>
  <script type="text/javascript" src="js-plugin/smoothscroll/SmoothScroll.js"></script>
  <!-- Custom  punto_clave: hay uno en inglés y otro en esp-->
  <script type="text/javascript" src="js/custom_eng.js"></script>
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
