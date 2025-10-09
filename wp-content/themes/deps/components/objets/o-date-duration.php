<div class="c-curso__content-dates  c-curso__content-dates--<?php echo $active ?>">
    <!-- Dates -->
    <?php if( have_rows('inscriptions') ): ?>
    <?php while( have_rows('inscriptions') ): the_row();

    ?>
        <!-- Dato-->
        <div class="c-curso__content-date c-curso__content-date--two-datails">

          
               
            <?php if ($primera_vigente): ?>
                <?php if (!empty($primera_vigente['startc']) && !empty($primera_vigente['closec'])): ?>
                <!-- col -->
                <div class="c-curso__content-col"> 
                    <i class="c-curso__icon-detail fa-solid fa-calendar-check"></i>
                    <div class="c-curso__detail-content">
                        <span class="c-curso__tittle-detail">Inicia</span>
                        <p class="c-curso__detail"><?php echo esc_html( format_fecha_dmY($primera_vigente['startc']) ); ?></p>
                    </div>
                </div>
                
                <!-- col -->
                <div class="c-curso__content-col">
                    <i class="c-curso__icon-detail fa-solid fa-calendar"></i>
                    <div class="c-curso__detail-content">
                        <span class="c-curso__tittle-detail">Termina</span>
                        <p class="c-curso__detail"><?php echo esc_html( format_fecha_dmY($primera_vigente['closec']) ); ?></p> 
                    </div>
                </div>
            
                <?php endif; ?>
            <?php endif; ?>
            
        </div>
        
    <?php endwhile; else: ?>
    <?php endif; ?> 
</div>

