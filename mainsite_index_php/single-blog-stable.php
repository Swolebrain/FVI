<!-- single-blog dot pee eich pee -->
<?php get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>

        <!-- part-details -->
       	<div class="part-details">

      <!--banner-->

        <div class="inner-banner">
        	<h3><span>BLOG</span></h3>

                    <img src="<?php bloginfo('template_directory')?>/images/inner-bnr.jpg" class="img-responsive" width="100%">

        </div>
    <!--/banner-->

<!--strip-->
    <div class="inner-strip strip ca-strip bg-gray-1 color-white text-center">
    	<div class="container">
    		<div class="row">
            	<div class="col-md-12">
                    <a href="<?php echo get_post_meta(get_the_ID(),'chat_now_buttonn',true); ?>" class="btn btn-type-1 btn-type-3 btn-rounded ic ic-chat">Chat Now</a>
    			</div>
            </div>
        </div>
    </div>
    <!--strip-->

       	<div class="container">
        <div class="inner-head-1 text-left">
            <!--<h3><strong>What can you do with a Pharmacy Technician Degree</strong></h3>-->
 <!-- Breadcrumbs -->
    <div class="breadcrumb-ct">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <?php the_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Breadcrumbs -->
        </div>
        	<div class="row">
            	<div class="col-lg-8">
                    <!--post-->
                    <div class="blog-post">

            <h1 class="blog-post-title"><?php the_title(); ?></h1>
                <div class="ath">
                	<small><i class="fa fa-pencil-square-o"></i><?php echo get_post_meta(get_the_ID(),'date',true); ?></small>
                </div>
              <div class="blog-img"><a href="<?php the_permalink(); ?>"><?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size = 'large', $icon = false);echo '<img src="'.$link[0].'" />'; ?><div class="clear"></div></a><div class="clear"></div></div>
              <p><?php the_content(); ?></P>
               <?php the_tags(); ?>
<?php comments_template(); ?>


          </div>
                    <!--/post-->



                </div>



                <div class="col-md-4 inner-left">
    <?php include("sidebar.php"); ?>
</div>


            </div>
        </div>
        </div>
       <!-- /part-details -->





<!--strip-->
    <div class="strip logo-cl-m bg-blue color-white text-center">
    	<div class="container">
    		<div class="row">
            	<div class="col-md-12">
 <?php query_posts('page_id=16');
			 if (have_posts()) : ?>
			   <?php while (have_posts()) : the_post(); ?>
                    <p class="txt-2"><?php echo get_post_meta(get_the_ID(),'home_page_&_sub_pages_caption',true); ?></p>
        			<a href="<?php echo get_the_permalink() ?>" class="btn clock btn-type-1 btn-rounded ic ic-info">Request Information</a> <a href="http://slaz.info/fvi-2/wp/consumer-information/#emp" class="btn location-btn2 bg-gray-1 btn-type-1 btn-rounded">CLICK HERE FOR GAINFUL EMPLOYMENT INFORMATION</a>
<?php endwhile;endif;wp_reset_query(); ?>
    			</div>
            </div>
        </div>
    </div>
    <!--strip-->
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
