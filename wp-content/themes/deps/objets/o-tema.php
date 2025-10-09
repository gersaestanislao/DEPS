<!-- Temática -->

    <!-- var -->
    <?php 
         $tema = get_field('tema');
         $cancer = "cancer";
         $covid = "covid";
         $docencia = "docencia";
         $hipertension = "hipertension";
         $mental = "mental";
         $virologia = "virologia";
         $simulacion = "simulacion";
         $investigacion = "investigacion";
         $antimicrobianos = "antimicrobianos";
         $foro = "foro";
         $control = "controldeinfecciones";
     ?>

     <?php if ($tema == $cancer): ?>

        <p class="o-tag o-tag--tema ">
            <i class="o-tag__icon fa-solid fa-virus"></i>
            <span class="o-tag__tema-text">Cáncer</span>
        </p>

    <?php elseif ($tema == $covid ): ?>

        <p class="o-tag o-tag--tema">
            <i class="o-tag__icon fa-solid fa-virus-covid"></i>
            <span class="o-tag__tema-text">COVID-19</span>
        </p>

    <?php elseif ($tema == $hipertension): ?>

        <p class="o-tag o-tag--tema">
            <i class="o-tag__icon fa-solid fa-heart-circle-exclamation"></i>
            <span class="o-tag__tema-text">Hipertensión</span>
        </p>

    <?php elseif ($tema == $docencia): ?>

        <p class="o-tag o-tag--tema">
            <i class="o-tag__icon fa-solid fa-person-chalkboard"></i>
            <span class="o-tag__tema-text">Docencia</span>
        </p>

    <?php elseif($tema == $mental): ?>

        <p class="o-tag o-tag--tema">
            <i class="o-tag__icon fa-solid fa-head-side-virus"></i>
            <span class="o-tag__tema-text">Salud mental</span>
        </p>

    <?php elseif($tema == $simulacion): ?>
        
        <p class="o-tag o-tag--tema">
            <i class="o-tag__icon fa-solid fa-solid fa-user-gear"></i>
            <span class="o-tag__tema-text">Simulacion clínica</span>
        </p>

    <?php elseif($tema == $virologia): ?>
        
        <p class="o-tag o-tag--tema">
            <i class="o-tag__icon fa-solid fa-bacteria"></i>
            <span class="o-tag__tema-text">Virología</span>
        </p>

    
    <?php elseif($tema == $investigacion): ?>
        
        <p class="o-tag o-tag--tema">
            <i class="o-tag__icon fa-solid fa-flask"></i>
            <span class="o-tag__tema-text">Investigación Enfermería</span>
        </p>

    <?php elseif($tema == $antimicrobianos): ?>
        
        <p class="o-tag o-tag--tema">
            <i class="o-tag__icon fa-solid fa-bacteria"></i>
            <span class="o-tag__tema-text">Antimicrobianos</span>
        </p>

        <?php elseif($tema == $foro): ?>
        
        <p class="o-tag o-tag--tema">
        
            <i class="o-tag__icon fa-solid fa-users-line"></i>
            <span class="o-tag__tema-text">Foros de Educación</span>
        </p>


        <?php elseif($tema == $control): ?>
        
        <p class="o-tag o-tag--tema">

            <i class="o-tag__icon fa-solid fa-hand-holding-medical"></i>
            <span class="o-tag__tema-text">Foros de Prevención y Control de Infecciones</span>
        </p>

    <?php else: ?>

        <p class="o-tag o-tag--tema">
        </p>


    <?php endif; ?>
                       



