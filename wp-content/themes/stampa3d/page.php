<!-- RICHIAMA SOLO IL CONTENUTO DI UNA SINGOLA PAGINA -->
<?php get_header(); ?>
<!-- PAGE -->
<div class="container">
    <div class="row">
        <div class="col-9">
            <?php if (have_posts()) : ?>
            <?php the_post();?> 
            <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title();?></h2>
            <?php the_content();?>
            </div>
            <?php else : ?>
            <p><?php __('Nessuna pagina trovata'); ?></p>
            <?php endif ; ?>
        </div>
        <!-- END PAGE -->

        <!-- SIDEBAR -->
        <div class="col-3">
            <?php get_sidebar(); ?>
        </div>
        <!-- END SIDEBAR -->

    </div>  <!-- END ROW -->
</div>  <!-- END CONTAINER -->

</main>
<?php get_footer(); ?>
