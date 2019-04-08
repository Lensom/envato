<footer>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <ul class="list-inline">
                  <?php while(have_rows('footer_icons_id')) : the_row(); ?>
                        <li class="list-inline-item">
                        <a href="<?php the_sub_field('link_id') ?>">
                      
                        <?php $id = get_sub_field('image_id');
                           $url = wp_get_attachment_url($id);
                        ?>
                        <img src="<?= $url?>" alt="">
                      </a>
                        </li>
                  <?php endwhile; ?>

                  </ul>
                  <div class="footer-info">
                  <?php while(have_rows('footer_id')) : the_row(); ?>
                        <p><?php the_sub_field('footer_text_id') ?></p>
                  <?php endwhile; ?>
                  </div>
               </div>
            </div>
         </div>
      </footer>
			<?php wp_footer(); ?>
	 </body>
</html>

