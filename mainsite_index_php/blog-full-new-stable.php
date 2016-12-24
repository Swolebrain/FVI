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
    <style>
      a.page.larger{
        margin: 5px;
        border: 1px solid rgba(0,0,0,0.4);
        display:inline-block;
        width:25px;
        margin-top: 25px;
      }
    </style>
  </head>
  <body>

    <!-- HEADER & NAVIGATION -->

    <div id="techBlogHeader">

      <div id="nav">
        <div id="leftNav" class="shiftUpward">
          <img id="logo" class="inline" src="//fvi.edu/images/logo.png" />
          <img class="contact inline" src="//fvi.edu/share/comment.png" />
          <img id="email" class="inline" src="//fvi.edu/share/email.png" />
          <img class="contact inline" src="//fvi.edu/share/phone.png" />
        </div>
        <div id="share">
          <img class="socialApp inline" src="//fvi.edu/share/share2.png" />
          <img class="socialApp inline" src="//fvi.edu/share/facebook.jpeg" />
          <img class="socialApp inline" src="//fvi.edu/share/twitter.png" />
          <img class="socialApp inline" src="//fvi.edu/share/google.png" />
        </div>
      </div>

      <p id="techBlogTitle">&lt;blog fvi="tech"&gt;<span class="blinkingAnimation">_</span></p>
    </div>

    <div id='homePageBody'>
<!-- THIS IS WHERE ITS AT -->
<?php

    $i=0;

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    query_posts('post_type=blog &posts_per_page=4&paged=' . $paged);
    if (have_posts()) : ?>
	    <?php while (have_posts()) : the_post();
            $i++; ?>
          <div class="row">
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
