<?php get_header(); ?>
<?php get_template_part('slider'); ?>
<?php get_template_part('navbar'); ?>
<!--Main content-->
<div class="container-fluid">
  <div class="row mt-3">
    <!--section-->
    <div class="col-md-9 col-12">
      <div class="row">
        <!--recent notice-->
        <div class="col-12 mb-3">
          <div class="bg-light shadow-lg">
            <h5 class="p-2 text-center bg-danger text-light">RECENT NOTICE</h5>
            <marquee class="recentNotice">
             <?php dynamic_sidebar('recent_notice'); ?>
            </marquee>
          </div>
        </div>
        <!--Notice-->
        <div class="col-12 mb-3">
            <?php
           if(have_posts()):
            while(have_posts()): the_post(); ?>
              <div class="bg-light border border-primary shadow pb-2 mb-3">
            <div class="ml-3 mr-3 text-justify notice">
              <h4 class="mt-3"><?php the_title(); ?></h4>
              <?php the_post_thumbnail(); ?>
              <p class="ml-3 mr-3 text-justify"><?php the_content(); ?></p>
              </div>
          </div>
            <?php endwhile;
            else: 
                  echo "<span class='text-danger'>Here has no update.</span>";
          endif;
            ?>
            

        </div>
      </div>
    </div>
        <?php get_sidebar(); ?>
      </div>  
      <?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>   
    </div>
    <?php get_footer(); ?>