<div class="c-form-incriptions">
    
    <div class="c-form-incriptions__wrapper">
        
        <h3 class="c-form-incriptions__tittle"> Inscríbete ahora</h3>
        <form class="c-form" name="preregistro_a" id="preregistro_a" action="https://educast.imss.gob.mx/microaprendizajes/sied/app/preRegistroWbrP/preregistroUsuario.php"  enctype="" method="post" onsubmit="">
            <div class="c-form__wrapper">
                <div class="c-form__content-fields">

                    <!-- Id  -->
                    <input class="c-form__input" type="text" name="idcur" hidden value="<?php the_field('idcurso'); ?>">

                    <!-- Matrícula  -->
                    <div class="c-form__content-input">
                        <div class="c-form__content-icon">
                            <i class="c-form__icon fa-solid fa-user"></i>
                        </div>
                        <input class="c-form__input" type="text" id="matricula" placeholder="Ingresa tu matrícula" name="matricula" value="" required> 
                    </div>
  
                    <!-- Delegación -->
                    <div class="c-form__content-input c-form__content-icon--active">
                        <div class="c-form__content-icon">
                            <i class="c-form__icon fa-solid fa-building"></i>
                        </div>
    
                        <select name="delegacion" id="delegacion" class="c-form__input" required><option value="">--Elige tu delegación --</option><option value="01">AGUASCALIENTES</option><option value="02">BAJA CALIFORNIA</option><option value="03">BAJA CALIFORNIA SUR</option><option value="04">CAMPECHE</option><option value="07">CHIAPAS</option><option value="08">CHIHUAHUA</option><option value="05">COAHUILA</option><option value="06">COLIMA</option><option value="35">D F 1 NORTE</option><option value="36">D F 2 NORTE</option><option value="37">D F 3 SUR</option><option value="38">D F 4 SUR</option><option value="10">DURANGO</option><option value="15">EDO MEX OTE</option><option value="16">EDO MEX PTE</option><option value="11">GUANAJUATO</option><option value="12">GUERRERO</option><option value="13">HIDALGO</option><option value="14">JALISCO</option><option value="39">MANDO</option><option value="17">MICHOACAN</option><option value="18">MORELOS</option><option value="19">NAYARIT</option><option value="20">NUEVO LEON</option><option value="21">OAXACA</option><option value="09">OFICINAS CENTRALES</option><option value="22">PUEBLA</option><option value="23">QUERETARO</option><option value="24">QUINTANA ROO</option><option value="25">SAN LUIS POTOSI</option><option value="26">SINALOA</option><option value="27">SONORA</option><option value="28">TABASCO</option><option value="29">TAMAULIPAS</option><option value="30">TLAXCALA</option><option value="31">VERACRUZ NORTE</option><option value="32">VERACRUZ SUR</option><option value="33">YUCATAN</option><option value="34">ZACATECAS</option></select>
                    </div>


                </div>
            </div>
  
            <input class="o-btn o-btn--extend o-btn--primary o-btn--small" type="submit" id="submit" value="Enviar">
   
        </form>
    </div>
</div>