<?php get_header(); ?>

<?php //include("leftsidebar.php"); ?>

 
 
    <!--banner-->
        <div class="banner-1">
        
<?php query_posts('post_type=slider & showposts=1 & order=asc'); if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                
					<?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size = 'large', $icon = false);
                    echo '<img src="'.$link[0].'" class="visible-md visible-lg" width="100%" />'; ?>
                    
   <?php endwhile;endif;wp_reset_query(); ?>  
      

  
        
<?php query_posts('post_type=mobileslider & showposts=1 & order=asc'); if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                
					<?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size = 'large', $icon = false);
                    echo '<img src="'.$link[0].'" class="visible-sm visible-xs" width="100%" />'; ?>
                    
   <?php endwhile;endif;wp_reset_query(); ?>  
        </div>
    <!--/banner-->
    

	<!--schedule a tour strip-->
    <!--<div class="strip ca-strip bg-blue color-white text-center">
    	<div class="container">
    		<div class="row">
            	<div class="col-md-12">
            	<?php query_posts('post_type=slider & showposts=1 & order=asc'); if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>
                    <p class="txt-1"> <?php echo get_post_meta(get_the_ID(),'slider_bottom_strip_texts',true); ?></p>
        			<a href="<?php echo get_post_meta(get_the_ID(),'schedule_a_tour',true); ?>" class="btn clock btn-type-1 btn-rounded ic ic-clock">Schedule a Tour</a><a class="btn test-btn btn-type-1 btn-rounded"><div id="Chat3"></div></a>
                   <?php dynamic_sidebar( 'Live-Engage-Home-Sidebar' ); ?>
              <?php endwhile;endif;wp_reset_query(); ?>  
    			</div>
            </div>
        </div>
    </div>-->
    <!--strip-->

 <!--/Welcome-->
	<div class="container welcome">
	  <?php query_posts('page_id=34');
			 if (have_posts()) : ?>
			   <?php while (have_posts()) : the_post(); ?>
        <div class="jumbotron welcome text-center">
            <h1><?php echo get_the_title()?></h1>
            <p><?php echo get_post_meta(get_the_ID(),'short_description',true); ?></p>
            <p>
              <a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>">MORE</a>
            </p>
          </div>   
 <?php endwhile;endif;wp_reset_query(); ?>     
      </div>
	<!--/Welcome-->
    
    
   <!--strip-->
<div class="it-banner parallax-container">
<div class="bnr-over">
    <div class="strip color-white text-center it-programs">
        <div class="container it-cont">
    		<div class="row">
            	<div class="col-md-12">
					<?php query_posts('page_id=5');
					if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					  <h2 class="head-1"><?php echo get_the_title();?><span><i></i></span></h2>
					  <p class="lead"><?php echo get_post_meta(get_the_ID(),'short_description',true); ?></p>
  
					<?php endwhile;endif;wp_reset_query(); ?>  
					<div class="col-lg-12" style="margin:0 auto; text-align:center;">
						<div class="col-md-6 ip-1">
						  <?php query_posts('page_id=24');
						  if (have_posts()) : ?>
						  <?php while (have_posts()) : the_post(); ?>
							<img src="<?php bloginfo('template_directory')?>/images/img-3.jpg" class="img-circle">
							<h2><?php echo get_the_title(); ?></h2>
							<p><?php echo get_post_meta(get_the_ID(),'short_description',true); ?></P>
							<a class="btn btn-dt btn-lg btn-primary" href="<?php the_permalink(); ?>">Details</a>
						  <?php endwhile;endif;wp_reset_query(); ?> 
						</div>
							   
						<div class="col-md-6 ip-1">
						  <?php query_posts('page_id=26');
						  if (have_posts()) : ?>
						  <?php while (have_posts()) : the_post(); ?>
							<img src="<?php bloginfo('template_directory')?>/images/img-4.jpg" class="img-circle">
							<h2><?php echo get_the_title(); ?></h2>
							<p><?php echo get_post_meta(get_the_ID(),'short_description',true);?></p>
							<a class="btn btn-dt btn-lg btn-primary" href="<?php the_permalink(); ?>">Details</a>
						  <?php endwhile;endif;wp_reset_query(); ?> 
						</div>
						<div class="clearfix"></div>
					</div><!-- end col with 2 programs-->
				</div><!-- end col immediately inside row -->
			</div> <!-- end row -->
		</div> <!-- end container it-cont -->
	</div> <!-- end strip color-white text-center it-programs -->
</div> <!-- end bnr-over -->

    <div class="parallax">
	  <img src="http://www.fvi.edu/wp-content/uploads/2015/08/circuit-board-md.jpg" alt="technology">
	</div>
</div> <!-- end it-banner strip -->
    <!--strip-->
	<!-- end Tech Banner -->
    
        <!--strip-->
    <div class="strip bg-blue color-white text-center health-programs">
    	<div class="container">
    		<div class="row">
            	<div class="col-md-12">
                <?php query_posts('page_id=7');
					if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<h2 class="head-1"><?php echo get_the_title();?><span><i></i></span></h2>


							<p class="lead"><?php echo get_post_meta(get_the_ID(),'short_description',true); ?></p>
					<?php endwhile;endif;wp_reset_query(); ?> <!-- end section header "Healthcare Programs" -->
                     <div class="col-md-3 hp-gar">
                     <?php query_posts('page_id=51');
						if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php if( !empty($link) ): ?>
	
								<?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $icon = false);
								echo '<img src="'.$link[0].'" class="img-responsive img-thumbnail" />'; ?>
	
								<?php else: ?>
									<img src="<?php bloginfo('template_directory')?>/images/img-1.jpg" class="img-responsive img-thumbnail">
							<?php endif; ?> 
						  
							<h2><?php echo get_the_title(); ?></h2>
							<p><?php echo get_post_meta(get_the_ID(),'short_description',true); ?></p>
							<a class="btn btn-dt btn-lg btn-primary" href="<?php the_permalink(); ?>">Details</a>
						<?php endwhile;endif;wp_reset_query(); ?> 
					</div> <!-- end pharmacy technician section -->
                    
					<!-- start Medical Assistant --> 
                    <div class="col-md-3 hp-gar">
                      <?php query_posts('page_id=54');
						if (have_posts()) : ?>
						  <?php while (have_posts()) : the_post(); ?>
							<?php if( !empty($link) ): ?>

								<?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $icon = false);
								echo '<img src="'.$link[0].'" class="img-responsive img-thumbnail" />'; ?>

							<?php else: ?>
							  <img src="<?php bloginfo('template_directory')?>/images/img-44.jpg" class="img-responsive img-thumbnail">
							<?php endif; ?> 
                        
							<h2><?php echo get_the_title(); ?></h2>
							<p><?php echo get_post_meta(get_the_ID(),'short_description',true); ?>... </p>
							<a class="btn btn-dt btn-lg btn-primary" href="<?php the_permalink(); ?>">Details</a>
						  <?php endwhile;endif;wp_reset_query(); ?> 
                    </div><!-- end medical assistant-->
                     
                     <!-- medical assistant online
                      <div class="col-md-4 hp-gar">
                       <?php //query_posts('page_id=56');
						//if (have_posts()) : ?>
			   <?php //while (have_posts()) : the_post(); ?>
               <?php //if( !empty($link) ): ?>

	<?php //$link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $icon = false);
	//echo '<img src="'.$link[0].'" class="img-responsive img-thumbnail" />'; ?>

    <?php //else: ?>
                    <img src="<?php //bloginfo('template_directory')?>/images/img-33.jpg" class="img-responsive img-thumbnail">
                     <?php //endif; ?> 
                         <h2><?php //echo get_the_title(); ?></h2>
                         <p><?php //echo get_post_meta(get_the_ID(),'short_description',true); ?>...</p> 
                         <a class="btn btn-dt btn-lg btn-primary" href="<?php //the_permalink(); ?>">Details</a>
                          <?php //endwhile;endif;wp_reset_query(); ?> 
                     </div>
                     end medical assistant online-->
                     
					 <!-- patient care technician -->
                     <div class="col-md-3 hp-gar">
					  <?php query_posts('page_id=58');
						if (have_posts()) : ?>
						  <?php while (have_posts()) : the_post(); ?>
               				<?php if( !empty($link) ): ?>

							  <?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $icon = false);
							  //echo '<img src="'.$link[0].'" class="img-responsive img-thumbnail" />'; ?>

							<?php else: ?>
							  <img src="<?php bloginfo('template_directory')?>/images/img-2.jpg" class="img-responsive img-thumbnail">
							<?php endif; ?>
							<img src="http://www.fvi.edu/wp-content/uploads/2015/08/Patient-Care-Techician-Program-350x213.jpg" class="img-responsive img-thumbnail" >
							<h2><?php echo get_the_title(); ?></h2>
							<p><?php echo get_post_meta(get_the_ID(),'short_description',true); ?>...</p> 
							<a class="btn btn-dt btn-lg btn-primary" href="<?php the_permalink(); ?>">Details</a>
                        <?php endwhile;endif;wp_reset_query(); ?>
                     </div> <!-- end patient care technician -->
                     
					 <!-- nursing assistant -->
                     <div class="col-md-3 hp-gar">
					  <?php query_posts('page_id=60');
						if (have_posts()) : ?>
						  <?php while (have_posts()) : the_post(); ?>
							<?php if( !empty($link) ): ?>
								<?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $icon = false);
								//echo '<img src="'.$link[0].'" class="img-responsive img-thumbnail" />'; ?>
  
							  <?php else: ?>
								<div class="test-image"><img src="<?php bloginfo('template_directory')?>/images/img-22.jpg" class="img-responsive img-thumbnail"></div>
							  <?php endif; ?> 
							  <img src="http://www.fvi.edu/wp-content/uploads/2015/08/Nursing-Assistant-Home-Health-Aide-Program350x213.jpg" class="img-responsive img-thumbnail" >
							  <h2><?php echo get_the_title(); ?></h2>
							  <p><?php echo get_post_meta(get_the_ID(),'short_description',true); ?>...</p> 
							  <a class="btn btn-dt btn-lg btn-primary" href="<?php the_permalink(); ?>">Details</a>
							<?php endwhile;endif;wp_reset_query(); ?>
                     </div>
					 <!-- end nursing assistant -->
    			</div>
            </div>
        </div>
    </div>
    <!--strip-->


<div class="strip">
    <div class="container">
        <div class="row">
            <div class=" col-lg-12 location-mb text-center">
                <h3>Campus Locations</h3>
                <div class="col-lg-12 map">
                <?php echo get_option('campus'); ?>
                </div>
                <a href="<?php echo get_option('campusurl'); ?>" class="btn location-btn btn-type-1 btn-rounded ic ic-location">Click Here for Directions</a>
            <p>&nbsp; </p>
            </div>
        </div>
    </div>
</div>


<!--strip-->
<div class="strip news color-white text-center health-programs">
    <div class="container">
        <div class="row">
        	<div class="col-lg-12">
            	<div class="col-lg-6 news-left">
                
                	<h1 style="visibility: visible; " class="home-1 t-center">Latest Blog <span><i></i></span></h1>
                    <div class="col-lg-12 news">
                 <?php 
		 query_posts('post_type=blog & showposts=2');
			if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
                    	<div class="date"><?php echo get_post_meta(get_the_ID(),'date',true); ?></div>
                        <P><?php echo get_post_meta(get_the_ID(),'short_description',true); ?>...<br><a href="<?php the_permalink(); ?>"><strong>[...]</strong></a></P>
                         <?php endwhile;endif;wp_reset_query(); ?>   
                    </div>
       
                    <div class=" col-lg-12 location">
                    	<h3>Campus Locations</h3>
                        <div class="col-lg-12 map">
                        	<?php echo get_option('campus'); ?>
                        </div>
                        <a href="<?php echo get_option('campusurl'); ?>" class="btn location-btn btn-type-1 btn-rounded ic ic-location" target="_blank">Click Here for Directions</a>
                    </div>
                     
                </div>
                <div class="col-lg-6 social-feeds">
                	<h1 style="visibility: visible; " class="home-1 t-center">Latest News <span><i></i></span></h1>
                    <h3>Twitter Feed</h3>
                    <div class="col-lg-12 tweet">
                    	
 <?php 
		 query_posts('post_type=twitterampfbfeeds & showposts=1 & order=asc');
			if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
             <?php echo get_post_meta(get_the_ID(),'twitter_feed',true); ?>
              <?php endwhile;endif;wp_reset_query(); ?>   



                    </div>
                    <h3>Facebook Feed</h3>
                    <div class="col-lg-12 facebook">
                       <!-- <img class="img-responsive" src="<?php bloginfo('template_directory')?>/images/facebook-feed.png"> -->
<?php echo do_shortcode('[custom-facebook-feed]'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--strip-->

<!--strip-->
    <div class="strip logo-cl-m bg-blue color-white text-center">
    	<div class="container">
    		<div class="row">
            	<div class="col-md-12">
  <?php query_posts('page_id=16');
			 if (have_posts()) : ?>
			   <?php while (have_posts()) : the_post(); ?>
                    <p class="txt-2"> <?php echo get_post_meta(get_the_ID(),'home_page_&_sub_pages_caption',true); ?></p>
        			<a href="<?php the_field('request_information'); ?>" class="btn clock btn-type-1 btn-rounded ic ic-info" style="font-size: 22px;">
Request Information</a>

<?php endwhile;endif;wp_reset_query(); ?>
    			</div>
            </div>
        </div>
    </div>
    <!--strip-->
    
    <!--strip-->
    <div class="strip logo-cl-m color-blue text-center">
    	<div class="container">
    		<div class="row">
            	<div class="col-md-12">
                 <?php query_posts('post_type=logos & showposts=5 & order=asc');
			if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
                    <div class="img-thumbnail logo-cl"><a title="CareerSource South Florida" href="<?php echo get_post_meta(get_the_ID(),'website',true); ?>" target="_blank"> <?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $icon = false);
echo '<img src="'.$link[0].'"  />'; ?></a></div>
 <?php endwhile;endif;wp_reset_query(); ?>   
    			</div>
            </div>
        </div>
    </div>
    <!--strip-->
	<script>
	  jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });
	</script>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>