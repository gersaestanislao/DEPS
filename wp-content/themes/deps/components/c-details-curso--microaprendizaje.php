<div class="c-curso__details">
    <div class="c-curso__wrapper-detail">

    <!-- Tabla de descriptivo -->

        <div class="c-curso__table-descript"> 
   

            <!--/*Inscripciones-->
            <div class="c-curso__detail-content">
                <span class="c-curso__tittle-detail">Temática</span>   
                <?php include('objets/o-tema.php'); ?>
            </div>
            <br>
            
             <!--/*Inscripciones-->
             <?php include('objets/o-date-inscriptions.php'); ?>

            <!--/*Duración del curso-->
            <?php include('objets/o-date-duration.php'); ?>

            <!--/*Horas lectivas y cupo-->
            <?php include('objets/o-date-time.php'); ?>

            
        </div>

            <!--/*btn-->
            <?php include('c-group-bts.php'); ?>
    
    </div>

    <!--/*Implementaciones-->
    <?php include('objets/o-date-implementations.php'); ?>


</div>

       
