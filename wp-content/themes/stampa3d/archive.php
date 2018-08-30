
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <!-- ARCHIVE -->
    <div class="col-9">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part('content', get_post_format());?>
      <?php endwhile ; ?>
        <p><?php next_posts_link(); ?></p>
	      <p><?php previous_posts_link(); ?></p>
      <?php else : ?>
      <p><?php __('Nessun post trovato'); ?></p>
      <?php endif ; ?>
    </div>
    <!-- END ARCHIVE -->

    <!-- SIDEBAR -->
    <div class="col-3">
    <?php get_sidebar(); ?>
    </div>
    <!-- END SIDEBAR -->
  </div>
</div>

</main>
<?php get_footer(); ?>

    