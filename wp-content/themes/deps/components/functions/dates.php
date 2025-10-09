<?php if( have_rows('inscriptions') ): ?>
    
    <?php $inscriptions = get_field('inscriptions'); $start1 = $inscriptions[0]['start']; ?>
    <?php $close1 = $inscriptions[0]['close']; ?>
    
    <?php while( have_rows('inscriptions') ): the_row();
              
         
        ?>
 
        <?php
        $fecha_actual = strtotime(date("Ymd H:i:00",time()));
        $fecha_entrada = $start1;
        echo $fecha_entrada;
        $fecha_final = $close1;
            
        if($fecha_actual >= $fecha_entrada && $fecha_actual <= $fecha_final)
            {
            $active = "Vigente";
            }else
                {
                $active = "Desactualizado";
                }
            ?>

<?php endwhile; else: ?>
<?php endif; ?> 



