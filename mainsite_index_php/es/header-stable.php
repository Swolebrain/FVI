<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="IpKXpd6cYSvhLwzDIxGiFLGDraur3XoqqshI_WRq_48" />
<meta charset="utf-8">  
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="Bluefish 2.2.6" /> <!-- leave this for stats -->

 <meta name="keywords" content="fvi" />    

  
 <link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_directory')?>/images/fav.ico">
<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />-->

<!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory')?>/css/bootstrap.css" rel="stylesheet"> 
    <!--Theme-->      
    <link href="<?php bloginfo('template_directory')?>/css/fvi.css" rel="stylesheet">    
   
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
    
     <link href="<?php bloginfo('template_directory')?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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


</head>
<body>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>


<!-- Modal -->

<?php 
if(isset($_POST['submit1']))
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
	  
	// header("location:http://www.fvi.edu/es/gracias/");?>
         <script type="text/javascript">window.location="http://www.fvi.edu/es/gracias";</script>
         <?php
}
	   ?>
<script>
function CheckForm1(theform)
{

//  alert('CheckForm');

    if(theform.first_name1.value == "")
    {
        alert("Please enter first name");
        theform.first_name1.focus();
        return false;
    }
    if(theform.last_name1.value == "")
    {
        alert("Please enter last name");
        theform.last_name1.focus();
        return false;
    }

    if(theform.email1.value == "")
    {
        alert("Please enter your email address");
        theform.email1.focus();
        return false;
    }
    if(theform.email1.value.length > 0 )
    {
      var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
        if(!pattern.test(theform.email1.value))
        {
            alert("Please enter valid email address");
            theform.email1.focus();
            return false;
        }

   }
  $(".inp").keyup(function () {
    if (this.value.length == this.maxLength) {
      $(this).next('.inputs').focus();
    }
});
theform.day_phone.value=theform.phone1.value+theform.phone2.value+theform.phone3.value;

//alert(day_phone1);
    if (theform.day_phone.value == ""){
        alert("Please enter your Phone Number");
        //theform.day_phone.focus();
        error = true;
        return false;
    }
    var phoneno = /^\d{10}$/;
    if (!theform.day_phone.value.match(phoneno)){
        alert("Not a valid Phone Number");
        error = true;
        return false;
    }
    if (theform.zipcode.value == ""){
        alert("Please enter your zip code");
        theform.zipcode.focus();
        error = true;
        return false;
    }
}
catch (err){
  console.log(err);
  return false;
}
    /**********Victor's Code to send form to Velocify ***************/
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://secure.velocify.com/Import.aspx?Provider=FVI&Client=30010&CampaignId=1025', false);
    xhr.onload = function () {
 	console.log(this.responseText);
    }
    xhr.timeout = 1500;
    var e = document.getElementById("program_id1");
    var programid = e.options[e.selectedIndex].text;
    if (programid && programid.indexOf("--") > -1) programid = "unknown";
    var queryString = "&ProgramName="+programid;
    queryString += "&FirstName="+theform.first_name1.value;
    queryString += "&LastName="+theform.last_name1.value;
    queryString += "&YourEmail="+theform.email1.value;
    queryString += "&PhoneNumber="+theform.day_phone1.value;
    queryString += "&Zipcode="+theform.zipcode1.value;
    console.log("Sending: "+queryString);
    xhr.send(queryString);
    setTimeout(function(){
	console.log("Sending request to velocify...");
	}, 1000);
}


function setloc1()
{
   
        var e = document.getElementById("program_id1");
var strUser = e.options[e.selectedIndex].value;
//alert(strUser);
//alert(strUser);
    
        if(strUser == 5167 || strUser ==4826 || strUser ==4897 || strUser ==5168)
         {
             document.getElementById("location_id1").value=1169;
//alert('eng');
    //    alert(document.getElementById("location_id").val);

         }
	else
	{
            document.getElementById("location_id1").value=875;
//alert('spa');
// alert(document.getElementById("location_id").val);
        
	}
   
}

</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Close">&times;</button>
        <h4 class="modal-title brown" id="myModalLabel"></h4>
      </div>
<div class="modal-body">
<form name="sentMessage" id="contactForm" method="post" novalidate action="" id="frm_post" onSubmit="return CheckForm1(this);">
                     	<input type="hidden" name="lead_source_id" value="623">
                        <div class="form-group">
                                <label for="name">Nombre</label>                        
                                <input type="text" placeholder="Nombre" class="form-control" name="first_name" id="first_name1" required data-validation-required-message="Please enter your name.">
                               
                        </div>
                        <div class="form-group">
                                <label for="name">Apellido</label>                        
                                <input type="text" placeholder="Apellido" class="form-control" name="last_name" id="last_name1" required data-validation-required-message="Please enter your name.">
                               
                        </div>
                        <div class="form-group">
                              <label for="Email">Correo electrónico</label>
                              <input type="email" class="form-control" placeholder="Correo electrónico" name="email" id="email1"  required data-validation-required-message="Please enter your email address.">
                        </div>
                       
                         <div class="form-group">

                            <label for="phone">Teléfono Principal</label><br/>
                               <input type="tel" class="form-control phon-form inp" placeholder="---" id="phone1" maxlength="3">
                                <input type="tel" class="form-control phon-form phon-margin-left phone2 inp" placeholder="---" id="phone2" maxlength="3">
                                <input type="tel" class="form-control phon-form phon-margin-left phone3 inp" placeholder="----" id="phone3" maxlength="4">

                            <input type="hidden"  placeholder="Teléfono Principal" class="form-control"   name="day_phone" id="day_phone1" value=""> <br/><br/>

        </div>

 <div class="clear"></div>

                                           <div class="form-group">

                            <label for="phone">Código Postal</label>
                              <input type="tel" class="form-control" placeholder="Código Postal"  name="zipcode" id="zipcode1" required data-validation-required-message="Please enter your Zipcode">
        </div>
         
                        
                        <div class="form-group">
                            <label>¿Qué programa te gustaría estudiar?</label>
                                                           
                                <select class="form-control dropdown-contact" style="padding:0; font-size:17px;" required data-validation-required-message="What program would you like to study?"   onchange="setloc1()" name="program_id" id="program_id1">
                    <option value="" selected="" disabled="">--Por favor seleccione --</option>
                    <option value="5167">Seguridad Informática e Ingeniero Nube Profesional</option>
<option value="5168">Web & Ingeniero de Desarrollo de Aplicaciones</option>                    
<option value="4826">Asistente Medico Online</option>
                    <option value="4897">Técnico en Farmacia</option>
                    <option value="2213">Asistente de Enfermería con el HHA</option>
                   
                    <option value="2211">Asistente Médico</option>
                    <option value="2212">Técnico de Cuidado al Paciente</option>
                                </select>
                                <input type="hidden"  class="input_1"  name="location_id" id="location_id1" value="" >
                            
                        </div></div>
                       
<div class="modal-footer">
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" name="submit1" class="btn btn-success">Enviar <i class="fa fa-long-arrow-right"></i></button>
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
    	<div class="top-strip bg-gray color-white">
            <div class="container clearfix">
                <div class="row">

                    <div class="col-md-12">	
                        <div class="location-tp col-md-6 col-sm-5"><a href="<?php echo get_option('campusurl'); ?>" target="_blank" class="btn campus btn-rounded">Direccion para el campus de Miami</a> <a href="tel:<?php echo $tfn;?>" class="call-top btn btn-rounded"><span>Llamanos Hoy! </span><strong><?php echo $tfn;?></strong></a><div class="clearfix"></div></div>
                        <div class=" right-so col-lg-6 col-md-7">
                            <div class="row">
                                <div class="col-md-4 lang">
                                	<a href="tel:<?php echo $tfn;?>" class="call-top daper btn btn-rounded"><span>Llamanos Hoy!</span><strong><?php echo $tfn;?></strong></a>


                                    <div class="btn btn-rounded left btn-lng" style="border: 2px solid #FFFFFF;"><div id="languages">

<!--<a href="index.php?lang=es">ESPANOL ></a> -->

<a href="http://fvi.edu/">ENGLISH > </a>

</div></div> 
                            
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
            		<a href="<?php echo get_option('home'); ?>/" class="brand"><img src="<?php bloginfo('template_directory')?>/images/fvi-logo.png"></a>
			<div class="btn-lng-ftr btn btn-rounded right btn-lng" style="border: 2px solid #003352;">
				<div id="languages">
					<!--<a href="index.php?lang=es">ESPANOL ></a> -->
					<a href="http://fvi.edu/">ENGLISH > </a>
				</div>
			</div> 
           	</div>
                <div class="col-md-9 head-r">
                	<div class="row">
                    	<div class="col-md-4 callus right"><a href="tel:<?php echo $tfn;?>" class="mbn-new btn call btn-type-1 btn-rounded ic ic-call"><span>Llamanos Hoy!</span><strong><?php echo $tfn;?></strong></a></div>
                    	
                    	<a class="btn chat-btn-mb test-btn btn-type-1 btn-rounded"><div id="Chat6"></div></a>
                    	
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
                        </div><!--/.nav-et -->  
                    </div><!--/.row --> 
                </div><!--/.head_r -->
            </div><!--/.row -->
		</div><!--/.container -->
	</header>
<!--/header-->

<div class="space-home2"></div> 


<!--banner-2
<?php if( is_home() || is_front_page() ) : ?>

     <div class="banner-2">
		<?php query_posts('post_type=slider & showposts=1 & order=asc'); if (have_posts()) : ?>
		    <?php while (have_posts()) : the_post(); ?>
		        
						<?php $link=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size = 'large', $icon = false);
		            echo '<img src="'.$link[0].'" class="img-responsive" width="100%" />'; ?>
		            
		<?php endwhile;endif;wp_reset_query(); ?>  
        </div>
        
  <?php endif; ?>
 banner2-->
 

    
    <div class="space-home"></div>