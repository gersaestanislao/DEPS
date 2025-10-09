

<!-- HTML SIEMPRE SE IMPRIME -->
<div class="estado-curso" role="status" aria-live="polite">
  <?php if ($primera_vigente): ?>
    <p>
        Del
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