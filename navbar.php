<!--Navbar-->
  <div class="container-fluid sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light main_nav">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php
        $args = array(
          'theme_location' => 'primary',
          'menu_class' => 'navbar-nav'
        );
        wp_nav_menu($args);
        ?>
      </div>
    </nav>
  </div>