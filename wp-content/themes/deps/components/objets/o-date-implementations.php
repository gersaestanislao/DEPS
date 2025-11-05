<div class="c-curso__content-implementations  c-curso__content-implementations--<?php echo $more ?>">
    

    <div class="c-curso__content-date c-curso__content-date--implementations c-curso__content-date--implementations js-accordion-trigger" id="js-head-accordion-implementations">
        <div class="c-curso__detail-content" id="js-modal-implementations">
            <p class="c-curso__detail">Ver próximas inscripciones</p>  
             <i class="fa-solid fa-angle-down c-accordion__icon-trigger"></i>           
        </div>
    </div>

    <div class="c-accordion__content c-catalogo__control-content js-accordion-content" id="js-content-accordion-implementations" style="display: none;">
        <div class="c-accordion__content-text-accordion--implemetations"> 
           
            <div class="c-curso__content-dates--implemetations">
           
           
           
            <?php if( have_rows('inscriptions') ): ?>
            <?php while( have_rows('inscriptions') ): the_row(); 

                // Inicio de incripciones 
                  $start = get_sub_field('start');
                  $formtstart = DateTime::createFromFormat('Ymd', $start);
                  $fecha_start_timestamp = strtotime($start);
                  
                  // Cierre de inscripciones 
                  $close = get_sub_field('close');
                  $formtclose = DateTime::createFromFormat('Ymd', $close);
                  ?>
                
                <?php if ( $fecha_actual < $fecha_start_timestamp) : ?>
                 
            
        

                  <div class="c-curso__content-date">

                      <i class="c-curso__icon-detail fa-solid fa-calendar-plus"></i>

                      <div class="c-curso__detail-content">
                
                          <span class="c-curso__tittle-detail">Inscripciones</span>

                          <!-- Inscripción abierta -->
                          <p class="c-curso__detail u-mB0">
                              
                              <!-- Var  -->
                              <?php $inscriptionsStartDay = date_i18n("j", strtotime(get_sub_field('start'))); ?>
                              <?php $inscriptionsStartMonth = date_i18n("M", strtotime(get_sub_field('start'))); ?>
                              <?php $inscriptionsStartYear = date_i18n("Y", strtotime(get_sub_field('start'))); ?>

                              <!-- Inicio  -->
                              <?php if(get_sub_field('start')):?>
                                  <?php echo $inscriptionsStartDay; ?>  <?php echo $inscriptionsStartMonth; ?>
                              <?php endif; ?>

                              <!-- Var  -->
                              <?php $inscriptionsCloseDay = date_i18n("j", strtotime(get_sub_field('close'))); ?>
                              <?php $inscriptionsCloseMonth = date_i18n("M", strtotime(get_sub_field('close'))); ?>
                              <?php $inscriptionsCloseYear = date_i18n("Y", strtotime(get_sub_field('close'))); ?>
                              
                              <!-- Final  -->
                              <?php if(get_sub_field('close')): ?>
                              - <?php echo $inscriptionsCloseDay; ?>  <?php echo $inscriptionsCloseMonth; ?> de <?php echo $inscriptionsCloseYear; ?>
                              <?php endif; ?>
                          </p>

                          <span class="c-curso__tittle-detail">Fechas que se imparte</span>

                          <!-- Inscripción abierta -->
                          <p class="c-curso__detail u-mB0">
                              
                              <!-- Var  -->
                              <?php $inscriptionsStartDay = date_i18n("j", strtotime(get_sub_field('startc'))); ?>
                              <?php $inscriptionsStartMonth = date_i18n("M", strtotime(get_sub_field('startc'))); ?>
                              <?php $inscriptionsStartYear = date_i18n("Y", strtotime(get_sub_field('startc'))); ?>

                              <!-- Inicio  -->
                              <?php if(get_sub_field('startc')):?>
                                  <?php echo $inscriptionsStartDay; ?> <?php echo $inscriptionsStartMonth; ?>
                              <?php endif; ?>

                              <!-- Var  -->
                              <?php $inscriptionsCloseDay = date_i18n("j", strtotime(get_sub_field('closec'))); ?>
                              <?php $inscriptionsCloseMonth = date_i18n("M", strtotime(get_sub_field('closec'))); ?>
                              <?php $inscriptionsCloseYear = date_i18n("Y", strtotime(get_sub_field('closec'))); ?>
                              
                              <!-- Final  -->
                              <?php if(get_sub_field('closec')): ?>
                              - <?php echo $inscriptionsCloseDay; ?> <?php echo $inscriptionsCloseMonth; ?> de <?php echo $inscriptionsCloseYear; ?>
                              <?php endif; ?>
                          </p>
                          <!-- Formulario -->
                          <form method="post" action="<?php bloginfo('template_url') ?>/download-ics.php">

                          <!-- Fecha de inicio -->

                          <input type="hidden" name="date_start" value="<?php echo $formtstart->format('Y-M-j'); ?> 9:00AM">
                          <input type="hidden" name="date_end" value="<?php echo $formtclose->format('Y-M-j'); ?> 10:00AM">

                                
                    


                          <!-- fecha de inicio -->

                              <input type="hidden" name="description" value="Deberás cumplir con los requisitos de ingreso (categoría, reglas de inscripción). Programación sujeta a cambios sin previo aviso">
                              <input type="hidden" name="summary" value="Incio de Inscripción para <?php the_field('kindProgram'); ?> <?php the_title(); ?>">
                          
                              <?php $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                              <input type="hidden" name="url" value="<?php echo $url ?>">
                          
                              <input class="c-curso__link-detail js-alert--agenda" type="submit" value="Agenda un recordatorio en tu calendario">

                              <!-- Tooltip  -->
                              <div class="c-share__tooltip c-tool-tip c-tool-tip--small js-tooltip-666">
                                      <div class="c-share__tooltip-wrapper">
                                        <small>Descarga el archivo y ábrelo en tu calendario</small>
                                          <!-- <button class="o-link o-link--secondary">¿Cómo hacerlo?</button> -->
                                      </div>
                              </div><!-- Tooltip  -->

                          </form><!-- Formulario -->

                          <p class="c-curso__link-detail not-more">Inscripción cerrada</p>
                        
                      </div>
                  </div>
                  <hr>
                <?php endif; ?> 
               
            
            <?php endwhile; else: ?>
            <?php endif; ?> 


        </div>
        </div>
    </div>
</div>
