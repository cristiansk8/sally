<section>
  <div class="carrusel">
    <?php
     while (have_rows('carrusel_home')): the_row();
      $banner = get_sub_field('banner');

    ?>
  <div class="carrusel-item">
    <img src="<?php echo $banner; ?>" alt="" width="100%" height="auto">
  </div>
<?php endwhile; ?>
  </div>
</section>
