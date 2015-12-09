<!-- THIS IS THE PRODUCTION HEADER FILE -->
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">

  
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!--JQUERY if this is here then it's removed from the footer-->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- THIS IS THE FILE CONTAINING THE MASTER FORM VALIDATION CODE -->
<script async src="http://www.fvi.edu/wp-content/themes/fvi/js/validate-form.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="keywords" content="fvi florida vocational institute" />    
<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_directory')?>/images/fav.ico" />
<!-- old style.css location - header.php -->

<link href="<?php bloginfo('template_directory')?>/css/bootstrap.css" rel="stylesheet" /> 
 
<link href="<?php bloginfo('template_directory')?>/css/fvi.css" rel="stylesheet" /> 
<!-- style.css: -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />  

   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css" />

    

     <link href="<?php bloginfo('template_directory')?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

     



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="ie/html5shiv.min.js"></script>

      <script src="ie/respond.min.js"></script>

    <![endif]-->  

  

<?php wp_head(); ?>


<?php
ob_start();
//session_start();
if(isset($_GET['Lead_Source']))
        $_SESSION['Lead_Source'] = strtolower($_GET['Lead_Source']) == 'Direct Mail' ? 104 : $_GET['Lead_Source'];


if(isset($_GET['TFN']))
        $_SESSION['TFN'] = $_GET['TFN'];
$lead_source = empty($_SESSION['Lead_Source']) ? 5 : $_SESSION['Lead_Source'];

global $tfn;

//$tfn = empty($_SESSION['TFN']) ? get_option('phone') : $_SESSION['TFN'];
if(empty($_SESSION['TFN']))
{
$tfn = get_option('phone');

}
else
{
$tfn =$_SESSION['TFN'];
session_unset();
}
?>


<style type='text/css'>#email1.form-control, #day_phone1.form-control, #first_name1.form-control, #zipcode1.form-control { padding: 6px 12px; }</style>




</head>

<body>
<?php //if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TF9598"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TF9598');</script>
<!-- End Google Tag Manager -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Close">&times;</button>

        

      </div>

<div class="modal-body">

<form name="sentMessage" id="contactForm" method="post" onsubmit="event.preventDefault();" novalidate action="https://secure.velocify.com/Import.aspx?Provider=FVI&Client=30010&CampaignId=1025&Url=http://www.fvi.edu/thank-you/">

                     	<input type="hidden" name="lead_source_id" value="<?php echo $lead_source ?>">

                        <div class="form-group">

                                <label for="name">First Name</label>                        

                                <input type="text" placeholder="First Name" class="form-control" name="first_name" id="first_name1" required data-validation-required-message="Please enter your name.">

                               

                        </div>
                        <div class="form-group">

                                <label for="name">Last Name</label>                        

                                <input type="text" placeholder="Last Name" class="form-control" name="last_name" id="last_name1" required data-validation-required-message="Please enter your name.">

                               

                        </div>


                        <div class="form-group">

                              <label for="Email">Your Email</label>

                              <input type="email" class="form-control" placeholder="Your Email" name="email" id="email1"  required data-validation-required-message="Please enter your email address.">

                        </div>

                        <div class="form-group">

                            <label for="phone">Phone Number</label><br/>
                               <input type="tel" class="form-control phon-form inp" placeholder="---" id="phone1" maxlength="3">
                                <input type="tel" class="form-control phon-form phon-margin-left phone2 inp" placeholder="---" id="phone2" maxlength="3">
                                <input type="tel" class="form-control phon-form phon-margin-left phone3 inp" placeholder="----" id="phone3" maxlength="4">

                            <input type="hidden"  placeholder="Phone Number" class="form-control"   name="day_phone" id="day_phone1" value=""> <br/><br/>

        </div>

                        

                        

                        <div class="form-group">

                                <label for="phone">Zipcode</label>

                                <input type="tel" class="form-control" placeholder="Zipcode"  name="zipcode" id="zipcode1" required data-validation-required-message="Please enter your Zipcode">

                            

                        </div>

                        <div class="form-group">

                            <label>What program would you like to study?</label>

                                                           

                                <select class="form-control dropdown-contact" style="padding:0; font-size:17px;" required data-validation-required-message="What program would you like to study?"   onchange="setloc(document.sentMessage)" name="program_id" id="program_id1">

                    <option value="" selected="" disabled="">--Please Select --</option>

                    <option value="5167">IT Security and Cloud Professional Engineering</option>

<option value="5168">Web & Application Development Engineer</option>                    

<option value="4826">Medical Assistant Online</option>

                    <option value="4897">Pharmacy Technician</option>

                    <option value="2213">Nursing Assistant /Home Health Aide</option>

                   

                    <option value="2211">Medical Assistant</option>

                    <option value="2212">Patient Care Technician</option>

                                </select>

                                <input type="hidden"  class="input_1"  name="location_id" id="location_id1" value="" >

                            

                        </div></div>

                       

<div class="modal-footer">

                        <div id="success"></div>

                        <!-- For success/fail messages -->

                        <button name="submit1" class="btn btn-success" onclick="CheckForm1(document.sentMessage, false);">Submit <i class="fa fa-long-arrow-right"></i></button>

                        <div class="control-group form-group">

                        </div>

</div>

                    </form>

                   

<?php //echo do_shortcode('[contact-form-7 id="121" title="Quick Enquiry"]'); ?>

    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->

</div><!-- /.modal -->



<a class="btn-model btnfix" data-toggle="modal" data-target="#myModal"></a>



<!--header-->

	<header>

		<!--top-->

    	<div class="top-strip bg-fvi color-white">

            <div class="container clearfix">

                <div class="row">



                    <div class="col-md-12">	

                        <div class="location-tp col-md-6 col-sm-5"><a href="<?php echo get_option('campusurl'); ?>" target="_blank" class="btn campus btn-rounded">Miami Campus Directions</a> <a href="tel:<?php echo $tfn;?>" class="call-top btn btn-rounded"><span>Call Us Today! </span><strong><?php echo $tfn;?></strong></a><div class="clearfix"></div></div>

                        <div class=" right-so col-lg-6 col-md-7">

                            <div class="row">

                                <div class="col-md-4 lang">

                                	<a href="tel:<?php echo $tfn;?>" class="call-top daper btn btn-rounded"><span>Call Us Today!</span><strong><?php echo $tfn;?></strong></a>




<div class="btn btn-rounded left btn-lng" style="border: 2px solid #FFFFFF;">
	<div id="languages">
		<!--<a href="index.php?lang=es">ESPANOL ></a> -->
		<a href="http://fvi.edu/es/">ESPA&Ntilde;OL ></a>
	</div>
</div> 

                            

                                </div>

                                <div class="col-md-8 social">

                                <ul class="social">

                                    <a href="<?php echo get_option('facebook'); ?>" title="Facebook" class="ico-facebook-2" target="_blank"><i class="fa fa-facebook"></i></a>

                                    <a href="<?php echo get_option('twitter'); ?>" title="Twitter" class="ico-twitter-2" target="_blank"><i class="fa fa-twitter"></i></a>

                                    <a href="<?php echo get_option('google'); ?>" title="Google+" class="ico-gplus-2" target="_blank"><i class="fa fa-google-plus"></i></a>

                                    <a href="<?php echo get_option('linkedin'); ?>" title="Linkedin" class="ico-linkedin-2" target="_blank"><i class="fa fa-linkedin"></i></a>

                                    <a href="<?php echo get_option('blog'); ?>" title="Blog" class="ico-blog-2" target="_blank"><i class="fa fa-rss"></i></a>

                                </ul>

                                </div>

                          </div>   

                        </div>

                    </div>

                    

                </div>

            </div>

        </div>

		<!--/top-->

        

		<div class="container clearfix">

			<div class="row">

            	<div class="col-md-3 head-l">
            		<a href="<?php echo get_option('home'); ?>/" class="brand"><img src="<?php bloginfo('template_directory')?>/images/fvi-logo.png" alt="Logo"></a>
            		
            		<div class="btn-lng-ftr btn btn-rounded right btn-lng" style="border: 2px solid #023553;">
				<div id="languages">
					<!--<a href="index.php?lang=es">ESPANOL ></a> -->
					<a href="http://fvi.edu/es/">ESPAÑOL ></a>
				</div>
			</div>
            	
           	  </div>

                <div class="col-md-9 head-r">

                	<div class="row">

                    	<div class="col-md-4 callus right"><a href="tel:<?php echo $tfn;?>" class="mbn-new btn call btn-type-1 btn-rounded ic ic-call"><span>Call Us Today!</span><strong><?php echo $tfn;?></strong></a></div>

                        <a class="btn chat-btn-mb test-btn btn-type-1 btn-rounded"><div id="Chat5"></div></a>
                        
                        <div class="col-md-12 nav-et">
                        
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                    
                                    <?php 
                                    $args = array('theme_location' => 'header_menu', 
                                    
                                    'menu_class' => 'nav navbar-nav',
                                    'fallback_cb' => '',
                                    'menu_id' => 'main-menu',
                                    'walker' => new Upbootwp_Walker_Nav_Menu()); 
                                    wp_nav_menu($args);
                                    ?>
                                    
                                    </ul>            
                                </div><!--/.nav-collapse -->     
                            </nav>
                        
                        </div>

                    </div>

                </div>

            </div>

		</div>

	</header>

<!--/header-->

<div class="space-home2"></div> 

<!--banner-2--
<?php if( is_home() || is_front_page() ) : ?>
        <div class="banner-2">
        
<?php query_posts('post_type=slider & showposts=1 & order=asc'); if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                
					<?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size = 'large', $icon = false);
                    echo '<img src="'.$link[0].'" alt="Slider" width="100%" class="img-responsive" />'; ?>
                    
   <?php endwhile;endif;wp_reset_query(); ?>  
        </div>
        <?php endif; ?>
    banner2-->


<div class="space-home"></div>    