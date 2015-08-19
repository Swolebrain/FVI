<?php
/**
 * Template Name: Page - Contact 
 * The template used for displaying page content in page.php
 *
 * @author 
 * @package 
 */
?>

<?php get_header(); ?>
<?php query_posts('page_id=16');
			 if (have_posts()) : ?>
			   <?php while (have_posts()) : the_post(); ?>
      <!--banner-->
        
        <div class="inner-banner">
        	<h3><span><?php the_title(); ?></span></h3>
           <?php echo get_post_meta(get_the_ID(),'banner',true); ?>

<?php if( !empty($link) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php else: ?>
                    <img src="<?php bloginfo('template_directory')?>/images/inner-bnr3.jpg" class="img-responsive" width="100%">
                     <?php endif; ?> 
        </div>
    <!--/banner-->

	<!--strip-->
    <div class="inner-strip strip ca-strip bg-gray-1 color-white text-center">
    	<div class="container">
    		<div class="row">
            	<div class="col-md-12">
                    <a href="<?php echo get_post_meta(get_the_ID(),'apply_now',true); ?>" class="btn btn-type-1 btn-type-3 btn-rounded ic ic-apply">Apply Now</a> <a href="<?php echo get_post_meta(get_the_ID(),'chat_now',true); ?>" class="btn btn-type-1 btn-type-3 btn-rounded ic ic-chat">Chat Now</a>
    			</div>
            </div>
        </div>
    </div>
    <!--strip-->
	
    <!--/Welcome-->
	<div class="container">
        <div class="inner-head-1 text-left">
            <!--<h3><strong>What can you do with a Pharmacy Technician Degree</strong></h3>-->
        </div>
		
        <div class="col-lg-12 inner-content">
        	<div class="col-md-4 inner-left">
                  <?php dynamic_sidebar( 'left-sidebar' ); ?>
                  
            </div>
            <div class="col-md-8 cont-right">
            	<div class="text-left">
                    <h3><strong> FLORIDA VOCATIONAL INSTITUTE</strong></h3>
                </div>
                <div class="col-md-5 adrs">
                	<h4>Address</h4>
                    <p><?php echo get_post_meta(get_the_ID(),'address',true); ?></p>
                    <h4>E-mail: <a href="mailto:<?php echo get_post_meta(get_the_ID(),'email',true); ?>"><?php echo get_post_meta(get_the_ID(),'email',true); ?></a></h4>
                    <h4>Phone: <a href="tel:<?php echo get_post_meta(get_the_ID(),'phone',true); ?>"><?php echo get_post_meta(get_the_ID(),'phone',true); ?></a></h4>
              
                </div>
                <div class="col-md-7">
                   <form name="formcpage" id="contactForm-contactPage" novalidate action="https://secure.velocify.com/Import.aspx?Provider=FVI&Client=30010&CampaignId=1025&Url=http://www.fvi.edu/thank-you/" onsubmit="event.preventDefault();">
                     	<input type="hidden" name="lead_source_id" value="16">
                        <div class="control-group form-group">                        
                            <div class="controls">
                                <input type="text" placeholder="First Name" class="form-control small-form first_name" name="first_name" id="first_name" required data-validation-required-message="Please enter your first name.">
                                <input type="text" placeholder="Last Name" class="form-control small-form margin-left last_name" name="last_name" id="last_name" required data-validation-required-message="Please enter your last name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <div class="controls">
                                <input type="tel" name="phone1" class="form-control phon-form" placeholder="---" id="phone1" maxlength="3" required data-validation-required-message="Please enter your phone number.">
                                <input type="tel" name="phone2" class="form-control phon-form phon-margin-left phone2" placeholder="---" maxlength="3" id="phone2" required data-validation-required-message="Please enter your phone number.">
                                <input type="tel" name="phone3" class="form-control phon-form phon-margin-left phone3" placeholder="----" id="phone3" maxlength="4" required data-validation-required-message="Please enter your phone number.">
                                <input type="hidden" class="form-control phon-form phon-margin-left"   name="day_phone" id="day_phone" value="">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email"  required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="tel" class="form-control" placeholder="Zipcode"  name="zipcode" id="zipcode" required data-validation-required-message="Please enter your Zipcode">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <label>What program would you like to study?</label>
                            <div class="controls">
                                
                                <select class="form-control dropdown-contact" style="padding:0; font-size:17px;" required data-validation-required-message="What program would you like to study?"   onchange="setloc();">
                                    <option value="" selected="" disabled="">--Please Select --</option>
                                    <option value="5167">IT Security and Cloud Professional Engineering</option>
                                    <option value="5168">Web & Application Development Engineer</option>                    
                                    <option value="4826">Medical Assistant Online</option>
                                    <option value="4897">Pharmacy Technician</option>
                                    <option value="2213">Nursing Assistant /Home Health Aide</option>
                                   
                                    <option value="2211">Medical Assistant</option>
                                    <option value="2212">Patient Care Technician</option>
                                </select>
                                <input type="hidden"  class="input_1"  name="location_id" id="location_id" value="" >
                            </div>
                        </div>
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="10" cols="100" class="form-control" placeholder="Comments" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>-->
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button onclick="CheckForm1(document.formcpage,true);" class="btn btn-rounded submit btn-primary">Submit <i class="fa fa-long-arrow-right"></i></button>
                        <div class="control-group form-group">
                        </div>
                    </form>
                   <?php the_content(); ?>
            	</div>
            </div>
        </div>          
        
      </div>
	<!--/Welcome-->

<!--strip-->
    <div class="strip logo-cl-m bg-blue color-white text-center">
    	<div class="container">
    		<div class="row">
            	<div class="col-md-12">
                    <p class="txt-2"><?php echo get_post_meta(get_the_ID(),'home_page_title',true); ?></p>
        			<a href="<?php the_field('request_information'); ?>" class="btn clock btn-type-1 btn-rounded ic ic-info">Request Information</a> <a href="<?php the_field('employment_information_button'); ?>" class="btn location-btn2 bg-gray-1 btn-type-1 btn-rounded">CLICK HERE FOR GAINFUL EMPLOYMENT INFORMATION</a>
    			</div>
            </div>
        </div>
    </div>
      
    <!--strip-->
    <?php endwhile;endif;wp_reset_query(); ?> 
<script>
function setloc()
{
    alert('inside');
    
        var e = document.getElementById("program_id");
var strUser = e.options[e.selectedIndex].value;
//alert(strUser);
        if(strUser == 5167 || strUser ==4826 || strUser ==4897 || strUser ==5168)
         {
             document.getElementById("location_id").val=1169;
//alert('eng');
    //    alert(document.getElementById("location_id").val);

         }
	else
	{
            document.getElementById("location_id").val=875;
//alert('spa');
// alert(document.getElementById("location_id").val);
        
	}
   
}
<?php get_footer(); ?>