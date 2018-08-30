<footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p><?php bloginfo('author');?>&nbsp;-&nbsp;&copy;<?php echo Date('Y');?>&nbsp;-&nbsp;<?php the_author();?></p>
        <small>Per Stampa 3D si intende la realizzazione di oggetti tridimensionali mediante produzione additiva, partendo da un modello 3D digitale. Il modello digitale viene prodotto con software dedicati e successivamente elaborato per essere poi realizzato, strato dopo strato, attraverso una stampante 3D.</small>
        <p>New to Stampa 3D? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>
    <?php wp_footer(); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
  </body>
</html>
