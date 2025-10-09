<!-- Dato-->
<div class="c-curso__content-date c-curso__content-date--two-datails">

    <!-- col -->
    <div class="c-curso__content-col">
        <i class="c-curso__icon-detail fa-solid fa-stopwatch"></i>
        <div class="c-curso__detail-content">
            <span class="c-curso__tittle-detail">Horas lectivas
            </span>
            <p class="c-curso__detail"><?php the_field('teachingHours'); ?></p>
        </div>
    </div>

   
    <?php 
    if ( $postName == 'post'): ?>
    <!-- col -->
    <div class="c-curso__content-col">
        <i class="c-curso__icon-detail fa-solid fa-user-group"></i>


            <div class="c-curso__detail-content">
                <span class="c-curso__tittle-detail">Cupo
                </span>
                <p class="c-curso__detail"><?php the_field('cupo'); ?></p>
                
            </div>

    </div>
    <?php endif; ?> 
    
</div>