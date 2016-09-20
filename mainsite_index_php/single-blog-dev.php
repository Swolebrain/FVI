<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="//fvi.edu/images/favicon.ico" type="image/x-icon" />
    <title>FVI Tech Blog</title>
    <meta name="description" content="Learn To Code">
    <link rel="stylesheet" type="text/css" href="//fvi.edu/share/style.css">
  </head>
  <body>

    <!-- NAVIGATION -->

    <div id="nav">
      <div id="leftNav">
        <img id="logo" src="//fvi.edu/images/logo.png" />
        <img class="contact" src="//fvi.edu/share/comment.png" />
        <img id="email" src="//fvi.edu/share/email.png" />
        <img class="contact" src="//fvi.edu/share/phone.png" />
      </div>
      <div id="share">
        <img class="socialApp" src="//fvi.edu/share/share2.png" />
        <img class="socialApp" src="//fvi.edu/share/facebook.jpeg" />
        <img class="socialApp" src="//fvi.edu/share/twitter.png" />
        <img class="socialApp" src="//fvi.edu/share/google.png" />
        <img class="socialApp" src="//fvi.edu/share/link.ico" />
      </div>
    </div>
<?php while (have_posts()) : the_post(); ?>
    <!-- HEADER IMAGE -->

    <?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size = 'large', $icon = false);echo '<img src="'.$link[0].'" id="headerImage" />'; ?>

    <!-- ARTICLE BODY -->

    <div class="articleBody">

      <h1><?php the_title(); ?></h1>

      <p><?php the_content(); ?></p>

    </div>

    <!-- ARTICLE FOOTER -->

    <div class="articleFooter">

      <div class="footerShare">
        <img class="socialApp" src="//fvi.edu/share/facebook.jpeg" />
        <img class="socialApp" src="//fvi.edu/share/twitter.png" />
        <img class="socialApp" src="//fvi.edu/share/google.png" />
        <img class="socialApp" src="//fvi.edu/share/email.png" />
        <img class="socialApp" src="//fvi.edu/share/link.ico" />
      </div>
<?php endwhile; // end of the loop. ?>
      <div id="footerBar"> <p>load next article ...</p> </div>

    </div>

  </body>
</html>
