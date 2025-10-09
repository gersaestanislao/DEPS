    <!-- Agendar -->
    <div class="c-share__item">

            <!-- Formulario -->
            <form method="post" action="http://localhost:8888/DEPS/deps/wp_/wp-content/themes/deps/download-ics.php">

            <!-- Fecha de inicio -->

                <?php if( have_rows('inscriptions') ): ?>
                <?php while( have_rows('inscriptions') ): the_row();
                    
                    // Inicio de incripciones 
                    $start = get_sub_field('start');
                    $formtstart = DateTime::createFromFormat('Ymd', $start);
                    
                    // Cierre de inscripciones 
                    $close = get_sub_field('close');
                    $formtclose = DateTime::createFromFormat('Ymd', $close);
                    ?>

                    <input type="hidden" name="date_start" value="<?php echo $formtstart->format('Y-M-j'); ?> 9:00AM">
                    <input type="hidden" name="date_end" value="<?php echo $formtclose->format('Y-M-j'); ?> 10:00AM">

                   
                <?php endwhile; else: ?>
                <?php endif; ?> 


            <!-- fecha de inicio -->

                <input type="hidden" name="description" value="Deberás cumplir con los requisitos de ingreso (categoría, reglas de inscripción). Programación sujeta a cambios sin previo aviso">
                <input type="hidden" name="summary" value="Incio de Inscripción para <?php the_field('kindProgram'); ?> <?php the_title(); ?>">
            
                <?php $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                <input type="hidden" name="url" value="<?php echo $url ?>">
            
                <input class="c-share__btn-agendar js-card" id="-666" type="submit" value="">

            </form><!-- Formulario -->

            <!-- Icono  -->
            <i class="c-share__icon fa-solid fa-calendar-days js-fa-share-nodes"></i>
            <!-- Text -->
            <small class="c-share__leyend">Programar recordatorio</small>

            <!-- Tooltip  -->
            <div class="c-share__tooltip c-tool-tip c-tool-tip--small js-tooltip-666">
                    <div class="c-share__tooltip-wrapper">
                      <small>Descarga el evento y ábrelo en tu calendario</small>
                        <!-- <button class="o-link o-link--secondary">¿Cómo hacerlo?</button> -->
                    </div>
            </div><!-- Tooltip  -->

        </div><!-- Agendar -->