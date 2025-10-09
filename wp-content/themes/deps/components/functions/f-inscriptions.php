<!-- Var  -->
<?php $inscriptionsStartDay = date_i18n("j", strtotime(get_sub_field('start'))); ?>
<?php $inscriptionsStartMonth = date_i18n("M", strtotime(get_sub_field('start'))); ?>
<?php $inscriptionsStartYear = date_i18n("Y", strtotime(get_sub_field('start'))); ?>

<!-- Inicio  -->
<?php if(get_sub_field('start')): ?>
    <?php echo $inscriptionsStartDay; ?> <?php echo $inscriptionsStartMonth; ?>
<?php endif; ?>

<!-- Var  -->
<?php $inscriptionsCloseDay = date_i18n("j", strtotime(get_sub_field('close'))); ?>
<?php $inscriptionsCloseMonth = date_i18n("M", strtotime(get_sub_field('close'))); ?>
<?php $inscriptionsCloseYear = date_i18n("Y", strtotime(get_sub_field('close'))); ?>
 
<!-- Final  -->
<?php if(get_sub_field('start')): ?>
- <?php echo $inscriptionsCloseDay; ?> <?php echo $inscriptionsCloseMonth; ?> de <?php echo $inscriptionsCloseYear; ?>
<?php endif; ?>

