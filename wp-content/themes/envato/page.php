<?php get_header(); ?>
<body>
   <header>
      <nav class="navbar navbar-expand-lg" id="menu">
         <div class="container">
            <div class="logotype">
               <?php the_custom_logo( $blog_id ); ?>
            </div>
            <?php wp_nav_menu()?>
         </div>
      </nav>
      <div class="container">
         <div class="row">
            <div class="col-md-12 timer">
               <div class="time">
                  <p class="days">20</p>
                  <span>days</span>
               </div>
               <div class="time">
                  <p class="hours">03</p>
                  <span>hours</span>
               </div>
               <div class="time">
                  <p class="minutes">06</p>
                  <span>minutes</span>
               </div>
               <div class="time">
                  <p class="seconds">52</p>
                  <span>seconds</span>
               </div>
            </div>
            <div class="col-md-12">
               <div class="icons">
                  <img src="<?php the_field('head_id')?>" alt="hero icons">
               </div>
            </div>
         </div>
      </div>
   </header>
   <div class="welcome" id="welcome">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <h2><?php the_field('welcome_id')?></h2>
               <?php while(have_rows('text_id')) : the_row(); ?>
               <p><?php the_sub_field('textin_id') ?></p>
               <?php endwhile; ?>
            </div>
            <div class="col-md-5">
               <?= do_shortcode('[contact-form-7 id="46" title="Form EN"]') ?>
            </div>
            <?php while(have_rows('cards_id')) : the_row(); ?>
            <div class="col-md-4 pluses">
               <img src="<?php the_sub_field('photo_id') ?>" alt="">
               <h2><?php the_sub_field('title_id') ?></h2>
               <p><?php the_sub_field('description_id') ?></p>
            </div>
            <?php endwhile; ?>
         </div>
      </div>
   </div>
   <div class="table-info" id="timing">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <table>
                  <tbody>
                     <tr>
                        <?php while(have_rows('title_table_id')) : the_row(); ?>
                        <th><?php the_sub_field('title_table') ?></th>
                        <?php endwhile; ?>
                        </tr
                        <?php while(have_rows('table_id')) : the_row(); ?>
                     <tr>
                        <td class="text-center"><?php the_sub_field('time_1') ?></td>
                        <td><?php the_sub_field('option_1') ?></td>
                     </tr>
                     <?php endwhile; ?>
                  </tbody>
               </table>
               <p><?php the_field('actually_id')?></p>
            </div>
         </div>
      </div>
   </div>
   <?php get_footer(); ?>