

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/master.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/nav.css">

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.3.1.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/master.js"></script>

    <nav class="weite">
      <ul  id="navigation" class="hideNavigation">
        <li><a href="#home">Home</a></li>
        <li><a href="#ueberuns">Über uns</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#ueberuns">Über uns</a></li>
      </ul>
      <img class="akt_menu" src="<?php echo esc_url( get_template_directory_uri() ); ?>/bilder/menü_black.svg">
      <div id="akt_menue_deakt"></div>
    </nav>
  </head>
  <body>
      <div id="home" class="page weite">
        <h1>Loren Ipsumg GMBH</h1>
      </div>
      <div class="page weite">

        <div id="ueberuns">
          <h1>Unser Team</h1>
          <div id="img_team" class="page_image"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Porttitor massa id neque aliquam vestibulum. Massa placerat duis ultricies lacus sed turpis tincidunt. Enim tortor at auctor urna nunc id cursus metus. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Hendrerit dolor magna eget est lorem. Suspendisse sed nisi lacus sed viverra tellus in hac. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Augue neque gravida in fermentum et sollicitudin ac. Dis parturient montes nascetur ridiculus mus.</p>

          <hr>

          <h1>Der Betieb</h1>
          <div id="img_betrieb" class="page_image"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Porttitor massa id neque aliquam vestibulum. Massa placerat duis ultricies lacus sed turpis tincidunt. Enim tortor at auctor urna nunc id cursus metus. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Hendrerit dolor magna eget est lorem. Suspendisse sed nisi lacus sed viverra tellus in hac. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Augue neque gravida in fermentum et sollicitudin ac. Dis parturient montes nascetur ridiculus mus.</p>

        </div>

        <hr>

        <div id="events">
          <h1>Events</h1>
          <section id="content" role="main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'nav', 'below' ); ?>
          </section>
        </div>

      </div>
  </body>
</html>
