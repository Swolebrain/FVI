<!-- blog.php overhauled template -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="//fvi.edu/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>FVI Tech Blog</title>
    <meta name="description" content="Learn To Code">
    <link rel="stylesheet" type="text/css" href="//fvi.edu/share/style.css">
    </style>
  </head>
  <body>

    <!-- HEADER & NAVIGATION -->

    <div id="techBlogHeader">

      <div id="nav">
        <div id="leftNav" class="shiftUpward">
          <a href='//www.fvi.edu'>
            <img id="logo" class="inline" src="//fvi.edu/images/logo.png" />
          </a>
          <a href='mailto:info@fvi.edu'>
            <img id="email" class="inline" src="//fvi.edu/share/email.png" />
          </a>
          <a href='tel:7865743350'>
            <img class="contact inline" src="//fvi.edu/share/phone.png" />
          </a>
        </div>
        <div id="share">
          <a href='http://facebook.com/sharer.php?u=http://fvi.edu/blog'>
            <img class="socialApp inline" src="//fvi.edu/share/share2.png" />
          </a>
          <a href='//www.facebook.com/FVITech/'>
            <img class="socialApp inline" src="//fvi.edu/share/facebook.jpeg" />
          </a>
          <a href='//twitter.com/fvitech'>
            <img class="socialApp inline" src="//fvi.edu/share/twitter.png" />
          </a>
          <a href='//plus.google.com/u/1/b/105289039757508765516/105289039757508765516'>
            <img class="socialApp inline" src="//fvi.edu/share/google.png" />
          </a>
        </div>
      </div>

      <p id="techBlogTitle">&lt;blog fvi="tech"&gt;<span class="blinkingAnimation">_</span></p>
    </div>

    <div id='homePageBody' class='container'>
<!-- THIS IS WHERE ITS AT -->
<?php

    $i=0;

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    query_posts('post_type=blog &posts_per_page=4&paged=' . $paged);
    if (have_posts()) : ?>
	    <?php while (have_posts()) : the_post();
            $i++; ?>
          <div class="row">
            <!--  col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 -->
            <div class="col-xs-12">
              <div class="homePageItem">
              <?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $icon = false);
              echo '<img src="'.$link[0].'" class="img-responsive"  />'; ?>
                <div class="homePageItemInfo">
                  <date><?php echo get_post_meta(get_the_ID(),'date',true); ?></date>
                  <h1>
                    <a href="<?php the_permalink() ?>">
                      <?php the_title(); ?>
                    </a>
                  </h1>
                  <p>
                    <?php echo get_post_meta(get_the_ID(),'short_description',true); ?>...
                  </p>
                </div>
              </div>
            </div>
          </div>
 <?php
endwhile;?>
</div>
 <!-- Pagination -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <ul class="pagination">
                   <?php wp_pagenavi();?>

</ul>
                </div>
            </div>
            <!-- /.row -->
<?php endif;wp_reset_query(); ?>


      <!-- ARTICLE FOOTER -->

    <div class="articleFooter">

      <div id="homePageFooter">
        <p><span class="blinkingAnimation">_</span>&lt;/blog&gt;
      </div>

      <div id="followUs">
        <div class="footerShare">
          <h1>FOLLOW US FOR MORE!</h1>
          <img class="socialApp" src="//fvi.edu/share/facebook.jpeg" />
          <img class="socialApp" src="//fvi.edu/share/twitter.png" />
          <img class="socialApp" src="//fvi.edu/share/google.png" />
        </div>
      </div>

    </div>

  </body>
</html>
