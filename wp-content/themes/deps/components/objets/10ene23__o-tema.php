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

    <?php else: ?>

        <p class="o-tag o-tag--tema">
            <i class="o-tag__icon fa-solid fa-bacteria"></i>
            <span class="o-tag__tema-text">Virología</span>
        </p>

    <?php endif; ?>
                       



