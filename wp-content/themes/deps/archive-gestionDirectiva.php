<!--/*Cabecera-->
<?php include('header.php'); ?>
 
   <!-- Eyecatcher -->

    <!--/*Menú-->
    <?php include('components/c-menu.php'); ?>

      <!--/*Eyecatcher blog -->
      <?php include('components/c-eyecatcher-in.php'); ?>

      <!-- Cátalogo-->
      <div class="c-catalogo">

            <!-- Filtros  -->
            <?php include('components/c-filter--gestionDirectiva.php'); ?>

            <!-- Fichas  -->
            <div class="container--gestionDirectiva c-catalogo__container">

                <!-- Botónes de filtros -->       

                <!-- Inicia Loop de post-->
                <?php  while (have_posts()) : the_post(); ?>
                    <!-- Card-->
                    <?php include('components/c-card--gestionDirectiva.php'); ?>

                <?php endwhile; ?>
                <!-- Termina Loop de post-->

                <!-- reset global post variable. After this point, we are back to the Main Query object -->
                <?php wp_reset_postdata(); ?>

                <div class="c-catalogo__page-lits mixitup-page-list"></div>
            </div><!-- Fichas  -->


        </div><!-- Cátalogo- -->


<!--/*Pié-->
<?php include('footer.php'); ?> 

<!-- Modal -->
<div class="c-modal js-c-modal" data-id="modal122">
        <div class="c-modal__content c-modal__content--xl js-c-modal__content" data-id="modal122">
            <!-- wrapper  -->
            <div class="c-modal__wrapper">

                <!-- header  -->
                <div class="c-modal__header">
                    <h3 class="c-modal__tittle">Guia de registro a la plataforma SIVAC</h3>
                    <button class="c-modal__btn-close o-btn--close js-bt-modal">
                        <i class="o-btn--icon fa-solid fa-xmark"></i>
                    </button>
                </div>
                <!-- header  -->

                <!-- body  -->
                <div class="c-modal__body">
                    <ul class="c-list-dates">

                        <li class="c-list__dates-item">
                            <span class="c-list__date-number">1</span>
                            <p class="c-list__date-text">Entra a la Plataforma SICAVI sin loguearte, es decir, sin escribir usuario ni contraseña (esto en el caso que ya tengas unacontraseña de algún curso anterior), por lo tanto, no debe aparecer tu nombre en la parte superior derecha, solo debe aparecer: USTED NO HA INICIADO SESIÓN INICIAR SESIÓN (INGRESAR). </br></br> 
                            Liga de la plataforma:
                            <a class="o-link  o-link--secondary u-text-underline" target="_blank" href="https://sicaviqa.imss.gob.mx/">https://sicaviqa.imss.gob.mx/ </a></p>
                        </li>

                        <li class="c-list__dates-item">
                            <span class="c-list__date-number">2</span>
                            <p class="c-list__date-text">Da clic en “INSCRÍBETE A UN CURSO”</p> </br>
                        </li>

                        <li class="c-list__dates-item u-pT0">
                            <img class="c-list__date-img" src="<?php bloginfo('template_url') ?>/src/img/guia-1.png" alt="DEPS IMSS">
                        </li>

                        <li class="c-list__dates-item">
                            <span class="c-list__date-number">3</span>
                            <p class="c-list__date-text">Te abrirá directamente la pagina para llenar la solicitud de cursos
                        </li>
                        <li class="c-list__dates-item u-pT0">
                            <img class="c-list__date-img" 
                            style="width: 250px;"
                            src="<?php bloginfo('template_url') ?>/src/img/guia-2.png" alt="DEPS IMSS">
                        </li>

                        <li class="c-list__dates-item">
                            <span class="c-list__date-number">4</span>
                            <p class="c-list__date-text">Llena el formulario en su totalidad. Todos los datos son indispensables y deben ser verídicos y escritos correctamente paraque no seas descartado por Sicavi al momento de enrolarte. Tu correo es el dato más importante para podercontactarte al momento de enviarte tus nuevas contraseñas.
                            </br>  </br>   Es importante que siempre te inscribas con el mismo correo para que no se generen dos cuentas y tengas tu historialcompleto en una sola cuenta (dos correos diferentes es igual a dos cuentas distintas</p>
                        </li>

                        <li class="c-list__dates-item">
                            <span class="c-list__date-number">5</span>
                            <p class="c-list__date-text">Es importante que tomes en cuenta que tus claves de entrada te llegarán el 5to día hábil del més para el que te inscribas.Tendrás lo que resta del mes calendario para culminar tu curso. Todos los curso se cierran el último día del mes a las12:00 horas.</p>
                        </li>

                    </ul>
                </div>
                <!-- body  --></br></br>

                <!-- footer  -->
                <div class="c-modal__footer u-text-center">
                        <button class="o-btn o-btn--extend o-btn--primary o-btn--extend js-bt-modal">Cerrar</button >

                        <a href="https://sicaviqa.imss.gob.mx/" target="_blank"class="o-link o-link--primary u-mt1">Soy nuevo usuario, registrarme<i class="o-link__icon fa-solid fa-arrow-right-long"></i></a>
                </div>
                 <!-- footer  -->
            </div>
            <!-- wrapper  -->

        </div>
    </div>
    <!-- Modal -->

<!-- Filtros -->
<script>    
    var containerEl = document.querySelector('.container--gestionDirectiva');
    var mixer = mixitup(containerEl, {

    pagination: {
        limit: 9 // impose a limit of 8 targets per page

    },
    multifilter: {
        enable: true
    },
    animation: {
        effects: 'fade translateZ(-100px)'
    },
    //     callbacks: {
    //     onMixStart: function(state, futureState) {
    //         console.log(futureState.activeFilter.selector);
    //         // alert(futureState.activeFilter.selector);
    //     }
    // }
    });
</script>

