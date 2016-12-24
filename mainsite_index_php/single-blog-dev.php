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
        <a href='//www.fvi.edu'>
          <img id="logo" src="//fvi.edu/images/logo.png" />
        </a>
        <a href='mailto:info@fvi.edu'>
          <img id="email" src="//fvi.edu/share/email.png" />
        </a>
        <a href='tel:7865743350'>
          <img class="contact" src="//fvi.edu/share/phone.png" />
        </a>

      </div>
      <div id="share">
        <a id='fb-share' href='http://facebook.com/sharer.php?u='>
          <img class="socialApp" src="//fvi.edu/share/share2.png" />
        </a>
        <a href='//www.facebook.com/FVITech/'>
          <img class="socialApp" src="//fvi.edu/share/facebook.jpeg" />
        </a>
        <a href='//twitter.com/fvitech'>
          <img class="socialApp" src="//fvi.edu/share/twitter.png" />
        </a>
        <a href='//plus.google.com/u/1/b/105289039757508765516/105289039757508765516'>
          <img class="socialApp" src="//fvi.edu/share/google.png" />
        </a>
        <!-- <img id='get-link' class="socialApp" src="//fvi.edu/share/link.ico" /> -->
      </div>
    </div>
    <div class='article-container'>

      <?php while (have_posts()) : the_post(); ?>
        <!-- HEADER IMAGE -->

        <?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size = 'large', $icon = false);echo '<img src="'.$link[0].'" id="headerImage" />'; ?>

        <!-- ARTICLE BODY -->

        <div class="articleBody">

          <h1><?php the_title(); ?></h1>

          <p><?php the_content(); ?></p>

        </div>
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

      <div id="footerBar">
        <p id='next-post'><?php previous_post_link('Next Post: %link'); ?></p>

      </div>
      <?php endwhile; // end of the loop. ?>
    </div>
    <script>
      //load event to fix the facebook share url
      window.onload = function(){
        var fbShare = document.getElementById('fb-share');
        var path = 'http://'+window.location.host+window.location.pathname;
        fbShare.href = fbShare.href + path;
      };

      //sends AJAX request to load next post on infinite scroll
      function retrieveNextPost(){
        var url = document.getElementById('next-post').children[0].href;
        var oReq = new XMLHttpRequest();
        oReq.onload =function() {
          var nextArticleHTML = HTMLParser(this.responseText);
          var nextArticle = nextArticleHTML.querySelectorAll('.article-container');
          var nextNextUrl = nextArticleHTML.querySelectorAll('#next-post');
          var currentNextUrl = document.getElementById('next-post');
          currentNextUrl.innerHTML = nextNextUrl[0].innerHTML;
          var mainContainer = document.querySelectorAll('.article-container');
          mainContainer[0].appendChild(nextArticle[0]);
          //mainContainer[0].appendChild(nextArticle[1]);
        };
        oReq.open('GET', url);
        oReq.send();
      }
      //detects window scroll to fire ajax request
      window.onscroll = scrollHandler;

      function scrollHandler(){
        if (scrollTop() + window.innerHeight > docHeight()-200){
          window.onscroll = null;
          retrieveNextPost();
          setTimeout(function(){
            window.onscroll = scrollHandler;
          },2000);
        }
      };

      //function to find scroll position
      function scrollTop(){
        return (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
      }
      //function to find document height
      function docHeight(){
        var body = document.body,
        html = document.documentElement;

        return Math.max( body.scrollHeight, body.offsetHeight,
                         html.clientHeight, html.scrollHeight, html.offsetHeight );
      }
      //HTML parsing function
      function HTMLParser(aHTMLString){
        var doc = document.implementation.createHTMLDocument("example");
        doc.documentElement.innerHTML = aHTMLString;
        return doc.children[0].children[1];
      }
    </script>
  </body>
</html>
