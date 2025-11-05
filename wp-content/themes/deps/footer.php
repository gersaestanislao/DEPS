<?php  
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
             $url = "https://";   
        else  
             $url = "http://";   
        // Append the host(domain name, ip) to the URL.   
        $url.= $_SERVER['HTTP_HOST'];   
        
        // Append the requested resource location to the URL   
        $url.= $_SERVER['REQUEST_URI'];    

      ?>


     <?php if( $url == 'https://innovacioneducativa.imss.gob.mx/sitio_wp/inicio-test/'): ?>
            <!-- Start of HubSpot Embed Code -->
              <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/46619880.js"></script>
            <!-- End of HubSpot Embed Code -->

    <?php else: ?>
    <?php endif; ?>


<!-- Footer end -->
    <?php  if ($end == '?id=app'): ?> 
        <footer class="c-footer"
        style="display:none"
        >
    <?php else: ?>
        <footer class="c-footer">
    <?php endif; ?>

        <div class="c-footer__wrapper">

            <!-- Footer DEPS -->
            <div class="c-footer__deps">

                <!-- Col-1 -->
                <div class="c-footer__content-menu-deps">
                    <ul class="c-footer__menu">
                        <li class="c-footer__menu-item">
                            <a class="o-font-menu o-font-menu--footer" href="<?php bloginfo(url); ?>/acerca/">Acerca de</a>
                        </li>
                        <li class="c-footer__menu-item">
                            <a class="o-font-menu o-font-menu--footer" href="<?php bloginfo(url); ?>/gestion-del-conocimiento/">Gestión del conocimiento</a>
                        </li>
                        <li class="c-footer__menu-item">
                            <a class="o-font-menu o-font-menu--footer" href="<?php bloginfo(url); ?>/amte/">Área de Medios y Tecnologías en Educación</a>
                        </li>
                        <li class="c-footer__menu-item">
                            <a class="o-font-menu o-font-menu--footer" href="<?php bloginfo(url); ?>/normatividad/">Normatividad</a>
                        </li>
                    </ul>
                    <ul class="c-footer__menu">
                        <li class="c-footer__menu-item">
                            <a class="o-font-menu o-font-menu--footer" href="<?php bloginfo(url); ?>/mapa-de-sitio/">Mapa de sitio</a>
                        </li>
                        <li class="c-footer__menu-item">
                            <a class="o-font-menu o-font-menu--footer" href="<?php bloginfo(url); ?>/creditos/">Créditos</a>
                        </li>
                        <li class="c-footer__menu-item">
                            <a class="o-font-menu o-font-menu--footer" href="<?php bloginfo(url); ?>/aviso-de-privacidad/">Aviso de privacidad</a>
                        </li>
                    </ul>
                    <div class="c-footer__logo">
                        <img src="<?php bloginfo('template_url') ?>/src/img/logo-imss.png" alt="">
                    </div>
                </div>
                 <!-- Col-1 end-->
                 
                 <!-- Col-2 -->
                 <div class="c-footer__content-contact-deps">

                    <!-- Redes sociales -->
                    <ul class="c-footer__redes">
                        <li class="c-footer__redes-item">
                            <a class="c-footer__redes-link" href="https://www.facebook.com/SaberIMSS"><i class="c-footer__redes-icon fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="c-footer__redes-item">
                            <a class="c-footer__redes-icon" href="https://twitter.com/Saber_IMSS"><i class="c-footer__redes-icon fa-brands fa-facebook-f"></i></a>
                        </li>
                    </ul>

                    <div class="c-footer__content-dates">

                        <div class="c-footer__dates">
                            <h5 class="c-footer__dates-tittle">¿Tienes alguna duda?</h5>
                            <p class="c-footer__dates-paragraph">Comunícate a la mesa de ayuda</p>
                            <ul class="c-footer_list-dates">
                                <li class="c-footer__dates-item">
                                    <p class="c-footer__date-text">55 5627 6900 <br>
                                        Ext. 21146, 21147 y 21148</p>
                                </li>
                                <li class="c-footer__dates-item">
                                    <a class="c-footer__date-link" href="mailto:soporte.innovaedu@imss.gob.mx">soporte.innovaedu@imss.gob.mx</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div><!-- Col-2 end-->

                <!-- Col-3  -->
                <div class="c-footer__copy">
                    <p class="c-footer__copy-text">Derechos Reservados ©, Instituto Mexicano del Seguro Social, Centro Médico Nacional Siglo XXI, Av. Cuauhtémoc No. 330, colonia Doctores, Ciudad de México, 2022.</p>
                </div>
                <!-- Col-3-end  -->

            </div><!-- Footer DEPS end-->

             <!-- Footer Gob -->
             <div class="c-footer__gob">

                 <!-- Col-1  -->
                 <div class="c-footer__content-logo-gob">
                    <img class="c-footer__logo-gob" src="http://innovacioneducativa.imss.gob.mx/sitio_wp/wp-content/uploads/2024/10/logo_blanco.png" alt="">
                </div>
                 <!-- Col-1  End-->


                 <!-- Col-2  -->
                 <div class="c-footer__content-menu-gob">
                    <nav class="c-footer__wrapper-menu-gob">
                        <h5 class="c-footer__menu-tittle">Enlaces</h5>
                        <ul class="c-footer__menu-gob">
                            <li class="c-footer__menu-item">
                                <a href="https://www.participa.gob.mx/" target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Participa</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="https://www.gob.mx/publicaciones"  target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Publicaciones Oficiales</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="http://www.ordenjuridico.gob.mx/"  target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Marco Jurídico</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="https://consultapublicamx.inai.org.mx/vut-web/" target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Plataforma Nacional de Transparencia</a>
                            </li>
                        </ul>
                    </nav>
                 </div>
                 <!-- Col-2  End-->


                 <!-- Col-3  -->
                 <div class="c-footer__content-menu-gob">
                    <nav class="c-footer__wrapper-menu-gob">
                        <h5 class="c-footer__menu-tittle">¿Qué es gob.mx?</h5>
                        <ul class="c-footer__menu-gob">
                            <li class="c-footer__menu-item">
                                <a href="https://www.gob.mx/que-es-gobmx"  target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Es el portal único de trámites, información y participación ciudadana <span>Leer más</span></a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="https://datos.gob.mx/"  target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Portal de datos abiertos</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="www.gob.mx/accesibilidad"  target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Declaración de accesibilidad</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="https://www.gob.mx/privacidadintegral"  target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Aviso de privacidad integral</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="https://www.gob.mx/privacidadsimplificado"  target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Aviso de privacidad simplificado</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="https://www.gob.mx/terminos"  target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Términos y condiciones</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="https://www.gob.mx/terminos#medidas-seguridad-informacion" target="_blank"  class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Política de seguridad</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="https://www.gob.mx/sitemap" target="_blank" class="o-font-menu o-font-menu--footer o-font-menu--footer-white">Mapa del sitio</a>
                            </li>
                        </ul>
                    </nav>
                 </div>
                 <!-- Col-3  End-->


                 <!-- Col-4  -->
                 <div class="c-footer__content-menu-gob">
                    <nav class="c-footer__wrapper-menu-gob">
                        <h5 class="c-footer__menu-tittle">Otros trámites</h5>
                        <ul class="c-footer__menu-gob">
                            <li class="c-footer__menu-item">
                                <p class=" o-font-menu--footer o-font-menu--footer-white">Mesa de ayuda: dudas e información</p>
                            </li>
                            <li class="c-footer__menu-item">
                                <a href="mailto:gobmx@funcionpublica.gob.mx"   class="o-font-menu o-font-menu--footer o-font-menu--footer-white">gobmx@funcionpublica.gob.mx</a>
                            </li>
                            <li class="c-footer__menu-item">
                                <p class=" o-font-menu--footer o-font-menu--footer-white">Denuncia contra servidores públicos</p>
                            </li>
                            <li class="c-footer__menu-item">
                                <p  class="c-footer__menu-tittle">Síguenos en</p>
                                <div class="c-footer__menu-gob-icons">
                                    <a class="c-footer__link-gob-icons" href="https://www.facmexicoebook.com/gob/"> <i class="c-footer__gob-icon fa-brands fa-facebook-f"></i></a>
                                    <a class="c-footer__link-gob-icons" href="https://twitter.com/GobiernoMX"> <i class="c-footer__gob-icon fa-brands fa-twitter"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                 </div>
                 <!-- Col-4  End-->
             </div>

        </div>
        <div class="c-footer__content-pleca-gob"></div>
    </footer>
    <!-- Footer end -->

    <!-- Botón flotante WhatsApp -->
    <a class="c-btn-whatsapp" href="https://wa.me/5510712734" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
        <span class="c-btn-whatsapp__sr-only">Escríbenos por WhatsApp</span>
    </a>

    <!-- Botón Meas de Ayuda  -->

    <?php if( $postName == 'gestiondirectiva' or  $postName == 'catmaestro'): ?>
        <a class="c-btn-help-desk js-modal-toggle" href="#" data-id="1c">
            <i class="fa-solid fa-circle-info c-btn-help-desk__icon"></i>
            <p class="c-btn-help-desk__text">¿Tienes alguna duda?</p>
        </a>
    <?php elseif( $postName == 'colaboradores'): ?>
    <?php elseif( $url == 'https://innovacioneducativa.imss.gob.mx/sitio_wp/inicio-test/'): ?>
    <?php elseif( $end == '?id=app'): ?>
    <?php else: ?>
        <a href="http://innovacioneducativa.imss.gob.mx/mesa" target="_blank"class="c-btn-help-desk">
            <i class="fa-solid fa-circle-info c-btn-help-desk__icon"></i>
            <p class="c-btn-help-desk__text">Ingresa a Mesa de ayuda
            </p>
        </a>
    <?php endif; ?>

            <!-- Modal -->
            <div class="c-modal js-c-modal" data-id="modal1c">
                <div class="c-modal__content js-c-modal__content" data-id="modal1c">
                    <div class="c-modal__wrapper">
                        <div class="c-modal__header">
                            <h3 class="c-modal__tittle">Comunícate a</h3>
                            <button class="c-modal__btn-close o-btn--close js-bt-modal">
                                <i class="o-btn--icon fa-solid fa-xmark"></i>
                            </button>
                        
                        </div>
                        <div class="c-modal__body">
                            <div class="c-modal__content-text">
                                <ul class="list-contact">
                                    <li class="list-contact__item">
                                        <i class="fa-solid fa-envelope"></i>
                                        <p>Cursos SICAVI: <a href="mailto:avisos.capacitacion@imss.gob.mx">avisos.capacitacion@imss.gob.mx</a></p>
                                    </li>
                                    <li class="list-contact__item">
                                        <i class="fa-solid fa-envelope"></i>
                                        <p>Cursos EDIMSS: <a href="mailto:soporte.innovaedu@imss.gob.mx ">soporte.innovaedu@imss.gob.mx </a></p>
                                    </li>
                                    <li class="list-contact__item">
                                        <i class="fa-solid fa-envelope"></i>
                                        <p>Cursos CIEFD: <a target="_blank" href="http://educacionensalud.imss.gob.mx/ces_wp/centros-de-investigacion-educativa-y-formacion-docente/">Contacta al CIEFD</a></p>
                                    </li>
                                    <br>
                                </ul>

                            </div>

                        </div>
         
                    </div>
                </div>
            </div><!-- Modal -->
   



    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/mixitup.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/mixitup-multifilter.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/mixitup-pagination.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/main.js"></script>
<script>
    $("#js_btn_medic").click(function(){
        $("#js-check-medic").prop("checked", false);
     });
     
    //  Selector Catálogo Gestión Directiva 
    $(".c-catalogo__container--search div.mix:nth-child(3n+1) .c-tool-tip").addClass("c-tool-tip--left");
</script>


 <?php wp_footer(); ?>
</body>

</html>