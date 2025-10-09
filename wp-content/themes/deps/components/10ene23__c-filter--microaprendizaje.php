<!-- Filtros -->
<form class="controls c-catalogo__control">

    <!-- filtros -->
    <div class="c-accordion__head c-catalogo__control-head js-accordion-trigger u-none@md" id="js-head-accordion-filter" >
        <div class="c-accordion__content-btn">
            <button class="c-accordion__btn-trigger">Mostrar Filtros</button> 
            <i class="fa-solid fa-angle-down c-accordion__icon-trigger c-accordion__icon-trigger--open js-accordion-icon"></i>
        </div>
    </div>
    
    <div class="c-accordion__content c-catalogo__control-content js-accordion-content u-dblock@md" id="js-content-accordion-filter">
            
            <!-- Filtros del perfiles -->
            <fieldset class="c-catalogo__content-filter" data-filter-group class="checkbox-group">

                <label class="checkbox-group-label c-catalogo__title-filter o-text--paragraph-bold" >Filtrar por temática</label>

                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".cancer" id="js-check-medic"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/virus-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Cáncer</label>
                </div>

                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".covid"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/icono-covid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">COVID-19</label>
                </div>


                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".docencia"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/person-chalkboard-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Docencia</label>
                </div>

                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".hipertension"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/heart-circle-exclamation-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Hipertensión</label>
                </div>
                
                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".mental"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/head-side-virus-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Salud mental</label>
                </div>
                
                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".virologia"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/bacteria-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Virología</label>
                </div>

            </fieldset>


            <button type="reset" class="c-catalogo__btn-reset o-btn o-btn--small o-btn--secondary o-btn--extend">Limpiar Filtros</button>
        </div>


</form>