<div class="c-curso__content-implementations  c-curso__content-implementations--<?php echo $more ?>">
    

    <div class="c-curso__content-date c-curso__content-date--implementations c-curso__content-date--implementations js-accordion-trigger" id="js-head-accordion-implementations">
        <div class="c-curso__detail-content" id="js-modal-implementations">
            <p class="c-curso__detail">Ver próximas inscripciones</p>  
             <i class="fa-solid fa-angle-down c-accordion__icon-trigger"></i>           
        </div>
    </div>

    <div class="c-accordion__content c-catalogo__control-content js-accordion-content" id="js-content-accordion-implementations" style="display: none;">
        <div class="c-accordion__content-text-accordion--implemetations"> 
           
            <div class="c-curso__content-dates--implemetations c-curso__content-dates--implemetations--<?php echo $active ?>">
            <?php if( have_rows('inscriptions') ): ?>
            <?php while( have_rows('inscriptions') ): the_row(); 

                // Inicio de incripciones 
                        $start = get_sub_field('start');
                        $formtstart = DateTime::createFromFormat('Ymd', $start);
                        
                        // Cierre de inscripciones 
                        $close = get_sub_field('close');
                        $formtclose = DateTime::createFromFormat('Ymd', $close);
                        ?>

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
              

            <?php endwhile; else: ?>
            <?php endif; ?> 
        </div>
        </div>
    </div>
</div>


<?php
if ( have_rows('inscriptions') ):

  $fecha_actual = current_time('timestamp');
  $proximas = [];

  while ( have_rows('inscriptions') ) : the_row();
    $startInscriptions = get_sub_field('start');
    $closeInscriptions = get_sub_field('close');
    $startCurso        = get_sub_field('startc');
    $closeCurso        = get_sub_field('closec');

    // Convertimos fechas a timestamp
    $fecha_entrada = strtotime($startInscriptions . ' 00:00:00');
    $fecha_final   = strtotime($closeInscriptions . ' 23:59:59');

    // Próxima = aún no empieza (fecha inicio en el futuro)
    if ($fecha_entrada && $fecha_entrada > $fecha_actual) {
      $proximas[] = [
        'start'  => $startInscriptions,
        'close'  => $closeInscriptions,
        'startc' => $startCurso,
        'closec' => $closeCurso,
        'entrada'=> $fecha_entrada
      ];
    }
  endwhile;

  // Ordenar por fecha de inicio ascendente (primero lo más próximo)
  usort($proximas, function($a, $b) {
    return $a['entrada'] <=> $b['entrada'];
  });

  // Helper de formato d/m/Y
  if ( ! function_exists('format_fecha_dmY') ) {
    function format_fecha_dmY($fecha) {
      if (!$fecha) return '';
      $dt = DateTime::createFromFormat('Ymd', $fecha);
      if ($dt instanceof DateTime) {
        return $dt->format('d/m/Y');
      }
      $ts = strtotime($fecha);
      return $ts ? date('d/m/Y', $ts) : '';
    }
  }
  ?>

  

<?php endif; ?>
