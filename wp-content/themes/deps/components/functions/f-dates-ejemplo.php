<?php
// Helper seguro (evita redeclaración si el componente se incluye más de una vez)
if ( ! function_exists('format_fecha_dmY') ) {
  function format_fecha_dmY($fecha) {
    if (!$fecha) return '';
    // Intenta ACF Ymd
    $dt = DateTime::createFromFormat('Ymd', $fecha);
    if ($dt instanceof DateTime) {
      return $dt->format('d/m/Y');
    }
    // Fallback para Y-m-d u otros
    $ts = strtotime($fecha);
    return $ts ? date('d/m/Y', $ts) : '';
  }
}

// Iniciales
$active          = 'Desactualizado';
$more            = 'more';
$vigentes        = 0;
$primera_vigente = null;

// Fecha actual respetando WP
$fecha_actual = current_time('timestamp');

// Si hay filas, recorremos
if ( have_rows('inscriptions') ) {
  while ( have_rows('inscriptions') ) { the_row();

    $startInscriptions = get_sub_field('start');
    $closeInscriptions = get_sub_field('close');
    $startCurso        = get_sub_field('startc');
    $closeCurso        = get_sub_field('closec');

    // Normaliza a día completo
    $fecha_entrada = strtotime($startInscriptions . ' 00:00:00');
    $fecha_final   = strtotime($closeInscriptions . ' 23:59:59');

    if ($fecha_entrada && $fecha_final && $fecha_actual >= $fecha_entrada && $fecha_actual <= $fecha_final) {
      $vigentes++;
      if ($primera_vigente === null) {
        $primera_vigente = [
          'start'  => $startInscriptions,
          'close'  => $closeInscriptions,
          'startc' => $startCurso,
          'closec' => $closeCurso
        ];
      }
    }
  }

  // Estado final
  if ($vigentes > 0) {
    $active = 'Vigente';
    $more   = ($vigentes === 1) ? 'no-more' : 'more';
  } else {
    $active = 'Desactualizado';
    $more   = 'no-more-two';
  }
}
?>

<!-- HTML SIEMPRE SE IMPRIME -->
<div class="estado-curso" role="status" aria-live="polite">
  <p>Estado: <?php echo esc_html($active); ?></p>

  <?php if ($primera_vigente): ?>
    <p>
      Inscripción abierta del
      <strong><?php echo esc_html( format_fecha_dmY($primera_vigente['start']) ); ?></strong>
      al
      <strong><?php echo esc_html( format_fecha_dmY($primera_vigente['close']) ); ?></strong>
    </p>
    <?php if (!empty($primera_vigente['startc']) && !empty($primera_vigente['closec'])): ?>
      <p>
        Curso del
        <strong><?php echo esc_html( format_fecha_dmY($primera_vigente['startc']) ); ?></strong>
        al
        <strong><?php echo esc_html( format_fecha_dmY($primera_vigente['closec']) ); ?></strong>
      </p>
    <?php endif; ?>
  <?php endif; ?>
</div>
