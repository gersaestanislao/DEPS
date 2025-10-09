 <!-- Dates -->
 <?php include('functions/f-dates.php'); ?> 

<div class="c-curso__content-buttons c-curso__content-buttons--<?php echo $active ?> c-curso__content-buttons--availability-<?php the_field('availability'); ?>">
    <a href="https://innovaedu.imss.gob.mx/sied/app/preRegistro/" class="c-curso__btn o-btn o-btn--small o-btn--primary  o-btn--extend" >Inscribirme</a>

    <button class="c-curso__btn o-btn o-btn--small u-mt1 o-btn--disiable o-btn--extend" >No disponible</button>
</div>

<div class=" c-curso__availability c-curso__availability--<?php the_field('availability'); ?>">
    <button class="c-curso__btn o-btn o-btn--small u-mt1 o-btn--disiable o-btn--extend" >Cupo lleno</button>
    <span>Este curso ya no está disponible</span>
</div>