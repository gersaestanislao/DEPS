
<?php        
    // var global 
    $postName = get_post_type();
 ?>

    <!-- EADIMSS -->
    <?php 
    if ( $postName == 'post'): ?>
    <div class="c-rules">
        <!-- <div class="c-rules__tittle">Reglas de inscripcíon</div> -->

        <ul class="c-rules__list">

            <li class="c-rules__list-item">
                <i class="fa-solid fa-user-nurse c-rules__list-icon"></i>
                <p class="c-rules__list-text">Solo el personal de base institucional puede acceder a la oferta educativa a distancia.</p>
            </li>

            <li class="c-rules__list-item">
            <i class="fa-solid fa-ban c-rules__list-icon"></i>
                <p class="c-rules__list-text">No podrás inscribirte a más de tres cursos a la vez, tutorizados o semitutorizados.</p>
            </li>

            <li class="c-rules__list-item">
                <i class="fa-solid fa-person-circle-xmark c-rules__list-icon"></i>
                <p class="c-rules__list-text">No existen bajas, por lo que si por alguna razón no puedes continuar con un curso permanecerás activo hasta que este termine.</p>
            </li>

            <li class="c-rules__list-item">
                <i class="fa-solid fa-envelope c-rules__list-icon"></i>
                <p class="c-rules__list-text">Deberás contar con una cuenta de correo electrónico de Gmail.</p>
            </li>
        </ul>
    </div>

<?php 
    elseif ( $postName == 'microaprendizaje'): ?>
        <div class="c-rules">
        <!-- <div class="c-rules__tittle">Reglas de inscripcíon</div> -->

        <ul class="c-rules__list">

            <li class="c-rules__list-item">
                <i class="fa-solid fa-user-nurse c-rules__list-icon"></i>
                <p class="c-rules__list-text">Solo el personal de base institucional puede acceder a la oferta educativa a distancia.</p>
            </li>

            <li class="c-rules__list-item">
                <i class="fa-solid fa-envelope c-rules__list-icon"></i>
                <p class="c-rules__list-text">Deberás contar con una cuenta de correo electrónico de gmail, hotmail, imss, yahoo, outlook, live, icloud y uabc.</p>
            </li>
        </ul>
    </div>

 <?php else: ?>
 <?php endif; ?> 


