<header class="banner" role="banner">
  <div class="container">
    <div class="nsk-modal-overlay"></div>
    <div class="nsk-delivery-icons">
      <ul>
        <span class='nsk-close-button'>X</span>
        <p>Choose your preferred delivery service:</p>
        <li>
          <a target="_blank" href="https://www.grubhub.com/la/new-school-kitchen/">
            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/grubhub-logo.jpg" alt="">
          </a>
        </li>
        <li>
          <a target="_blank" href="http://los-angeles.eat24hours.com/new-school-kitchen/45736">
            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/eat24-logo.jpg" alt="">
          </a>
        </li>
        <li>
          <a target="_blank" href="https://www.trycaviar.com/la/new-school-kitchen-1297">
            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/caviar-logo.jpg" alt="">
          </a>
        </li>
        <li>
          <a target="_blank" href="https://www.labite.com/restaurant-menu-3424/new-school-kitchen/">
            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/labite-logo.jpg" alt="">
          </a>
        </li>
        <li>
          <a target="_blank" href="https://postmates.com/la/59ae1df2-2286-4b90-bb8c-56160eddccd4">
            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/postmates-logo.jpg" alt="">
          </a>
        </li>
        <li>
          <a target="_blank" href="https://www.doordash.com/restaurant/8522/menu/16668/">
            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/doordash-logo.jpg" alt="">
          </a>
        </li>
      </ul>
    </div>
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

        echo "<ul class='nsk-social-media-icons'>
                <li class='nsk-fb'>
                  <a target='_blank' href='https://www.facebook.com/NewSchoolKitchen'>
                    <i class='fa fa-facebook'></i>
                  </a>
                </li>
                <li class='nsk-yp'>
                  <a target='_blank' href='http://www.yelp.com/biz/new-school-kitchen-los-angeles'>
                    <i class='fa fa-yelp'></i>
                  </a>
                </li>
                <li class='nsk-insta'>
                  <a target='_blank' href='https://instagram.com/newschoolkitchen/'>
                    <i class='fa fa-instagram'></i>
                  </a>
                </li>
                <li class='nsk-delivery'>
                  <p>Delivery! </p>
                  <i class='fa fa-truck fa-2x'></i>
                </li>
              </ul>";
      endif;
                // removed since he doens't have a twitter account
                // <li class='nsk-tw'>
                //   <a target="_blank" href=''>
                //     <i class='fa fa-twitter'></i>
                //   </a>
                // </li>
      ?>
    </nav>
  </div>
</header>
