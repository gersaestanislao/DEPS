<!-- dates -->
<?php include('functions/f-dates.php'); ?>



<?php if ($primera_vigente): ?>
    <div class="c-eyecatcher-curso__content-date">
        <small class="c-eyecatcher-curso__date-descript">INICIO<br>Inscripción</small>

        <!-- Fecha -->
        <span class="c-eyecatcher-curso__date-day">
            <?php echo esc_html( format_fecha_dmY($primera_vigente['start']) ); ?>
        </span>

    </div>
    <?php if (!empty($primera_vigente['startc']) && !empty($primera_vigente['closec'])): ?>
    <?php endif; ?>
<?php endif; ?>
