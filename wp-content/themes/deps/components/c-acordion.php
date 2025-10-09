<?php if( have_rows('registrations') ): ?>
<?php while( have_rows('registrations') ): the_row();
        $registrationsStart = get_sub_field('registrationsStart');
        $formtregistrationsStart = DateTime::createFromFormat('Ymd', $registrationsStart);
    ?>
    <div class="c-eyecatcher-curso__content-date">
        <small class="c-eyecatcher-curso__date-descript">INICIO</small>
        <span class="c-eyecatcher-curso__date-day">  <?php echo $formtregistrationsStart->format('j'); ?></span>
        <small class="c-eyecatcher-curso__date-descript ">  <?php echo $formtregistrationsStart->format('M Y'); ?></small>
    </div>

<?php endwhile; else: ?>
<?php endif; ?> 