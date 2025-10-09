<div class="c-curso__content-dates">
    <?php if( have_rows('inscriptions') ): ?>
    <?php while( have_rows('inscriptions') ): the_row(); ?>

        <div class="c-curso__content-date">
            <i class="c-curso__icon-detail fa-solid fa-file-pen"></i>
            <div class="c-curso__detail-content">
                <span class="c-curso__tittle-detail">Inscripciones</span>

                <!-- Inscripción cerrada  -->
                <p class="c-curso__detail c-curso__detail-info c-curso__detail-info--<?php echo $active ?>">Inscripción cerrada</p>

                <!-- Inscripción abierta -->
                <p class="c-curso__detail c-curso__detail--<?php echo $active ?>">
                    
                        <?php if ($primera_vigente): ?>
                            <p>
                            Del
                            <strong><?php echo esc_html( format_fecha_dmY($primera_vigente['start']) ); ?></strong>
                            al
                            <strong><?php echo esc_html( format_fecha_dmY($primera_vigente['close']) ); ?></strong>
                            </p>
                            <?php if (!empty($primera_vigente['startc']) && !empty($primera_vigente['closec'])): ?>
                            <?php endif; ?>
                        <?php endif; ?>

                </p>
                
            </div>
        </div>

    <?php endwhile; else: ?>
    <?php endif; ?> 
</div>


