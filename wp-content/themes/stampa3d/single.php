
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <!-- POST -->
    <div class="col-9">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format());?>
        <?php endwhile ; ?>
      <?php else : ?>
        <p><?php __('Nessun post trovato'); ?></p>
      <?php endif ; ?>
  </div>
  <!-- END POST -->

  <!-- SIDEBAR -->
  <div class="col-3">
  <?php get_sidebar(); ?>
  </div>
  <!-- END SIDEBAR -->

  </div>  <!-- END ROW -->
</div>  <!-- END CONTAINER -->

</main>
<?php get_footer(); ?>



    