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
        <!--Principal's Message-->
        <div class="col-12 mb-3">
          <div class="bg-light border border-primary shadow pb-2">
            <div class="ml-3 mr-3 text-justify">
            <?php
            $custom_post1 = new WP_Query(array(
              'post_type' => 'custompost1'
            ));
            while($custom_post1->have_posts()): $custom_post1->the_post(); ?>
              <h4 class="mt-3"><?php the_title(); ?></h4>
              <?php the_post_thumbnail(); ?>
              <p class="ml-3 mr-3 text-justify"><?php the_content(); ?></p>
            <?php endwhile;
            ?>
            </div>
          </div>
        </div>
        <!--Welcome to ABC High school-->
        <div class="col-12 mb-3">
          <div class="bg-light border border-primary shadow pb-2">
            <div class="ml-3 mr-3 text-justify">
            <?php
            $custom_post2 = new WP_Query(array(
              'post_type' => 'custompost2'
            ));
            while($custom_post2->have_posts()): $custom_post2->the_post(); ?>
              <h4 class="mt-3">Welcome to <span class="text-success"><?php the_title(); ?></span></h4>
              <?php the_post_thumbnail(); ?>
              <p class="mr-3 text-justify"><?php the_content(); ?></p>
            <?php endwhile;
            ?>
          </div>
          </div>
        </div>
      </div>
    </div>
        <?php get_sidebar(); ?>
      </div>     
    </div>
    <?php get_footer(); ?>