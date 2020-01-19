<!--Carousel-->
  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <?php
          $custom_slider = new WP_Query(array(
            'post_type' => 'customslider'
          ));
          while($custom_slider->have_posts()): $custom_slider->the_post(); ?>
            <div class="carousel-item <?php if($custom_slider->current_post==0):?>active<?php endif;?>">
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold"><?php the_title(); ?></h5>
              </div>
            </div>
          <?php endwhile;
        ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>