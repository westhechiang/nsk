<header class="banner" role="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?php bloginfo('template_directory');
        ?>/assets/images/logo.png" class="logo"
        alt="logo" height="75"/>
    </a>
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(
          [
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav'
          ]
        );
        echo "<ul class='social-media-icons'>
                <li class='nsk-fb'>
                  <a href='https://www.facebook.com/NewSchoolKitchen'>
                    <i class='fa fa-facebook'></i>
                  </a>
                </li>
                <li class='nsk-yp'>
                  <a href='http://www.yelp.com/biz/new-school-kitchen-los-angeles'>
                    <i class='fa fa-yelp'></i>
                  </a>
                </li>
                <li class='nsk-insta'>
                  <a href='https://instagram.com/newschoolkitchen/'>
                    <i class='fa fa-instagram'></i>
                  </a>
                </li>
              </ul>";
      endif;
                // removed since he doens't have a twitter account
                // <li class='nsk-tw'>
                //   <a href=''>
                //     <i class='fa fa-twitter'></i>
                //   </a>
                // </li>
      ?>
    </nav>
  </div>
</header>
