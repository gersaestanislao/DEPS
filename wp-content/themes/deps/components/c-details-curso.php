<div class="c-curso__details">
    <div class="c-curso__wrapper-detail">

    <!-- Tabla de descriptivo -->

        <div class="c-curso__table-descript">
   
            <!--/*Certificación-->
            <?php include('objets/o-date-certificate.php'); ?>

            <!--/*Perfíles-->
            <?php include('objets/o-date-perfiles.php'); ?>

            <!--/*Inscripciones-->
            <?php include('objets/o-date-inscriptions.php'); ?>


            <!--/*Duración del curso-->
            <?php include('objets/o-date-duration.php'); ?>

            <!--/*Horas lectivas y cupo-->
            <?php include('objets/o-date-time.php'); ?>



            <!-- Dato-->
            <div class="c-curso__content-date">
                <i class="c-curso__icon-detail fa-solid fa-user-graduate"></i>
                <div class="c-curso__detail-content">
                    <span class="c-curso__tittle-detail">Tipo de Programa Educativo
                    </span>
                    <p class="c-curso__detail u-mB0"><?php the_field('kindProgram'); ?> <?php the_field('kindCourse'); ?></p>
                </div>
            </div>

            
        </div>

        <!--/*btn-->
        <?php include('c-group-bts.php'); ?>
    
    </div>

    <!--/*Implementaciones-->
    <?php include('objets/o-date-implementations.php'); ?>

</div> 