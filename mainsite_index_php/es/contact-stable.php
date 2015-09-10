<?php
/**
 * Template Name: Page - Contact 
 * The template used for displaying page content in page.php
 *
 * @author 
 * @package 
 */
get_header();?>


<?php 
if(isset($_POST['submit']))
{
$url = "https://api.ynotlms.com/leads.json";
       $data = array(
        'first_name' => $_REQUEST['first_name'],
        'last_name' => $_REQUEST['last_name'],
        'day_phone' => $_REQUEST['day_phone'],
        'email' => $_REQUEST['email'],
        'city' => $_REQUEST['city'],
        'state_id' => $_REQUEST['state'],
        'zipcode' => $_REQUEST['zipcode'],
        'location_id' => $_REQUEST['location_id'],
        'program_id' => $_REQUEST['program_id'],
        'lead_source_id' => $_REQUEST['lead_source_id'],
        
    );
 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Lead Posting V1');
    if (isset($_SERVER['HTTP_REFERER']))
    {
        curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_REFERER']);
    }
    
    curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
	
	  //print_r($info);
	  
	// header("location:http://slaz.info/fvi-2/wp/thank-you");?>
         <script type="text/javascript">window.location="http://fvi.edu/es/thank-you";</script>
         <?php
}
	   ?>


<?php while (have_posts()) : the_post(); ?>
        
        <div class="inner-banner">
        	<h3><span><?php the_title(); ?></span></h3>
           <?php $image = get_field('banner');  ?>
               <?php if( !empty($image) ): ?>
                <img src="<?php echo $image;  ?>" class="img-responsive" width="100%"/>
	     <?php else: ?>
                    <img src="<?php bloginfo('template_directory')?>/images/inner-bnr2.jpg" class="img-responsive" width="100%">
                <?php endif; ?> 
        </div>
    <!--/banner-->

<!--strip-->
    <div class="strip mob-ca bg-blue color-white text-center">

        <div class="container">
    		<div class="row">
            	<div class="col-md-12">
             <?php query_posts('post_type=slider & showposts=1 & order=asc'); if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>
                    <p class="txt-1"> <?php echo get_post_meta(get_the_ID(),'slider_bottom_strip_texts',true); ?></p>
        			<a href="<?php echo get_post_meta(get_the_ID(),'schedule_a_tour',true); ?>" class="btn clock btn-type-1 btn-rounded ic ic-clock">Programar una visita</a><a class="btn test-btn btn-type-1 btn-rounded"><div id="Chat1"></div></a>
                    <!--<a href="<?php echo get_post_meta(get_the_ID(),'chat_now',true); ?>" class="btn btn-type-1 btn-rounded ic ic-chat">Chat Now</a> -->
      <?php endwhile;endif;wp_reset_query(); ?>  
      			
                 
    			</div>
            </div>
        </div>
    </div>
<!--strip-->

	<!--strip-->
    <div class="inner-strip strip ca-strip bg-gray-1 color-white text-center">
    	<div class="container">
    		<div class="row">
            	<div class="col-md-12">
                    <a href="<?php the_field('apply_now'); ?>" class="btn btn-type-1 btn-type-3 btn-rounded ic ic-apply">aplica ya</a>&nbsp;&nbsp;&nbsp;<a class="btn-dp btn test-btn btn-type-1 btn-rounded"><div id="Chat2"></div></a>
    			</div>
            </div>
        </div>
    </div>
    <!--strip-->
	
    <!--/Welcome-->
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
		
        <div class="col-lg-12 inner-content">
        	<div class="col-md-4 inner-left">
                  <?php dynamic_sidebar( 'left-sidebar' ); ?>
                  
            </div>
            <div class="col-md-8 cont-right">
            	<div class="text-left">
                    <h3><strong> FLORIDA VOCATIONAL INSTITUTE </strong></h3>
                </div>
                <div class="col-md-5 adrs">
                	<h4>Dirección </h4>
                    <p><?php echo get_post_meta(get_the_ID(),'address',true); ?></p>
                    <h4>Correo electrónico: <a href="mailto:<?php echo get_post_meta(get_the_ID(),'email',true); ?>"><?php echo get_post_meta(get_the_ID(),'email',true); ?></a></h4>
                    <h4>Teléfono: <a href="tel:<?php echo $tfn;?>"><?php echo $tfn;?></a></h4>
                </div>
                <div class="col-md-7">
<h4>Ponerse en Contacto</h4>
                    <form name="sentMessage" id="contactForm" method="post" novalidate action="" id="frm_post" onSubmit="return CheckForm(this);">
                     	<input type="hidden" name="lead_source_id" value="16">
                        <div class="control-group form-group">
                    
                            <div class="controls">
  <label for="exampleInputEmail1" style="position: absolute;
  left: 0%;">Nombre</label>
                                <input type="text" placeholder="Nombre" class="form-control small-form first_name" name="first_name" id="first_name" required data-validation-required-message="Please enter your first name." style="margin-top: 26px;">
<label for="exampleInputEmail1" class="last_name" style="position: relative;
  left: 10px;"> Apellido</label>
<input type="text" placeholder="Apellido" class="form-control small-form margin-left last_name" name="last_name" id="last_name" required data-validation-required-message="Please enter your last name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <label for="exampleInputEmail1">Teléfono Principal</label>
                            <div class="controls">
                                <input type="tel" class="form-control phon-form phone1" placeholder="---" id="phone1" required data-validation-required-message="Please enter your phone number.">
                                <input type="tel" class="form-control phon-form phon-margin-left phone2" placeholder="---" id="phone2" required data-validation-required-message="Please enter your phone number.">
                                <input type="tel" class="form-control phon-form phon-margin-left phone3" placeholder="----" id="phone3" required data-validation-required-message="Please enter your phone number.">
                                <input type="hidden" class="form-control phon-form phon-margin-left"   name="day_phone" id="day_phone" value="">
                            </div>
                        </div>
                        <div class="control-group form-group">
<label for="exampleInputEmail1">Correo electrónico</label>
                            <div class="controls">
                                <input type="email" class="form-control" placeholder="Correo electrónico" name="email" id="email"  required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
<label for="exampleInputEmail1">Código Postal</label>
                            <div class="controls">
                                <input type="tel" class="form-control" placeholder="Código Postal"  name="zipcode" id="zipcode" required data-validation-required-message="Please enter your Zipcode">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <label>¿Qué programa te gustaría estudiar?</label>
                            <div class="controls">
                                
                                <select class="form-control dropdown-contact" style="padding:0; font-size:17px;" required data-validation-required-message="What program would you like to study?"   onchange="setloc()" name="program_id" id="program_id">
                    <option value="" selected="" disabled="">--Por favor seleccione --</option>
                    <option value="5167">Seguridad Informática e Ingeniero Nube Profesional</option>
<option value="5168">Web & Ingeniero de Desarrollo de Aplicaciones</option>                    
<option value="4826">Asistente Medico Online</option>
                    <option value="4897">Técnico en Farmacia</option>
                    <option value="2213">Asistente de Enfermería con el HHA</option>
                   
                    <option value="2211">Asistente Médico</option>
                    <option value="2212">Técnico de Cuidado al Paciente</option>
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
                        <button type="submit" name="submit" class="btn btn-rounded submit btn-primary">Enviar<i class="fa fa-long-arrow-right"></i></button>
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
                    <p class="txt-2"><?php echo get_post_meta(get_the_ID(),'home_page_&_sub_pages_caption',true); ?></p>
        			<a href="<?php the_field('request_information'); ?>" class="btn clock btn-type-1 btn-rounded ic ic-info">
Solicita Informacion</a> <a href="<?php the_field('employment_information_button'); ?>" class="btn location-btn2 bg-gray-1 btn-type-1 btn-rounded"> haga clic aquí para obtener la información de empleo remunerado</a>
    			</div>
            </div>
        </div>
    </div>
      
    <!--strip-->
     
    
<script>
function setloc()
{
   
        var e = document.getElementById("program_id");
var strUser = e.options[e.selectedIndex].value;
//alert(strUser);
//alert(strUser);
    
        if(strUser == 5167 || strUser ==4826 || strUser ==4897 || strUser ==5168)
         {
             document.getElementById("location_id").value=1169;
//alert('eng');
    //    alert(document.getElementById("location_id").val);

         }
	else
	{
            document.getElementById("location_id").value=875;
//alert('spa');
// alert(document.getElementById("location_id").val);
        
	}
   
}

function CheckForm(theform)
{

//  alert('CheckForm');

    if(theform.first_name.value == "")
    {
        alert("Please enter your first name");
        theform.first_name.focus();
        return false;
    }

    if(theform.last_name.value == "")
    {
        alert("Please enter your last name");
        theform.last_name.focus();
        return false;
    }
 theform.day_phone.value =  theform.phone1.value +''+theform.phone2.value+''+theform.phone3.value;
    //alert(theform.day_phone.value);
    var phoneno = /^\d{10}$/;  
        if(!theform.day_phone.value.match(phoneno))  
        {  
         alert("Not a valid Phone Number");  
         return false;  
        }  


    if(theform.email.value == "")
    {
        alert("Please enter your email address");
        theform.email.focus();
        return false;
    }
    if(theform.email.value.length > 0 )
    {
      var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
        if(!pattern.test(theform.email.value))
        {
            alert("Please enter valid email address");
            theform.email.focus();
            return false;
        }

   }
   
    if(theform.zipcode.value == "")
    {
        alert("Please enter your last name");
        theform.zipcode.focus();
        return false;
    }

	/**********Victor's Code to send form to Velocify ***************/
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'https://secure.velocify.com/Import.aspx?Provider=FVI&Client=30010&CampaignId=1025', false);
	xhr.onload = function () {
    		console.log(this.responseText);
	}
	xhr.timeout = 1200;
	var e = document.getElementById("program_id");
	var programid = e.options[e.selectedIndex].text;
	if (programid && programid.indexOf("--") > -1) programid = "unknown";
	console.log("received request for"+programid);
	var queryString = "&ProgramName="+programid;
	queryString += "&FirstName="+theform.first_name.value;
	queryString += "&LastName="+theform.last_name.value;
	queryString += "&YourEmail="+theform.email.value;
	queryString += "&PhoneNumber="+theform.day_phone.value;
	queryString += "&Zipcode="+theform.zipcode.value;

	xhr.send(queryString);
}
</script>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>