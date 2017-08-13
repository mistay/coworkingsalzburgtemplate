<?php
/*
  Template Name: cws
 */
?>
<?php
global $wpdb;
?>
<?php
function get_custom_field() {
	return "";
}
class cfs {
	function get($a, $b) {
		return "";
	}
}
$cfs =new cfs();
?>
<!DOCTYPE html>
<html lang="de-DE">    
    <head>    	
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>		
        <meta name="format-detection" content="telephone=yes"/>		
        <meta name="Description" content="Coworkingspace Salzburg. Entdecke die Welt des Coworkings und nutze den kostenlosen Probetag!"/>        
        <meta charset="utf-8" />        
        <title><?php echo get_bloginfo('name');?></title>        
        <meta name="description" content="<?php echo get_bloginfo('description');?>">        
        <meta name="author" content="">        
        <!--[if lt IE 9]>
                    <link rel="stylesheet" type="text/css" href="css/ie.css" />
                            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                            <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
                <![endif]-->		


        <script type="text/javascript">
            function toggle(obj) {
                var el = document.getElementById(obj);
                el.style.display = (el.style.display == '' ? 'block' : ''  );
            }
            
	var boxclicked = {};
	boxclicked[1] = false;
	boxclicked[2] = false;
	boxclicked[3] = false;
	boxclicked[11] = false;
	boxclicked[12] = false;
	boxclicked[13] = false;

            function boxeschalkmouseclick(boxnumber) {
		boxclicked[boxnumber] = !boxclicked[boxnumber];
                if (boxclicked[boxnumber]) {
        	    	document.getElementById('price' + boxnumber ).style.display="none";
	            	document.getElementById('priceheader' + boxnumber).style.display="none";
	            	document.getElementById('pricedescr' + boxnumber).style.display="block";
			document.getElementById('buynow' + boxnumber).style.display="none";
			document.getElementById('boxinfo' + boxnumber).style.display="none";
			document.getElementById('closeboxinfo' + boxnumber).style.display="inline-block";
	            	document.getElementById('boxes_chalk_line' + boxnumber).style.display="none";
	    	} else {
            		document.getElementById('price' + boxnumber).style.display="";
            		document.getElementById('priceheader' + boxnumber).style.display="";
            		document.getElementById('pricedescr' + boxnumber).style.display="none";
			document.getElementById('buynow' + boxnumber).style.display="inline-block";
			document.getElementById('boxinfo' + boxnumber).style.display="inline-block";
			document.getElementById('closeboxinfo' + boxnumber).style.display="none";
            		document.getElementById('boxes_chalk_line' + boxnumber).style.display="";
		}
            }
        </script>        
        <script type="text/javascript">
            var browser			= navigator.userAgent;
            var browserRegex	= /(Android|BlackBerry|IEMobile|Nokia|iP(ad|hone|od)|Opera M(obi|ini))/;
            var isMobile		= false;
            if(browser.match(browserRegex)) {
                isMobile			= true;
                addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                function hideURLbar(){
                    window.scrollTo(0,1);
                }
            }
        </script>        
        <!--<link rel="stylesheet" href="includes/base.css">
                <link rel="stylesheet" href="includes/amazium.css">
                <link rel="stylesheet" href="includes/layout.css">-->                 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="shortcut icon" href="/favicon.ico">                 
        <!-- To Top scripts -->         
        <script src="<?php echo get_template_directory_uri(); ?>/smoothscroll.js" type="text/javascript" ></script>         
            <!--<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>-->         
<!--        <script src="includes/jquery.easing.1.3.js" type="text/javascript"></script>        
        <script src="includes/jquery.ui.totop.js" type="text/javascript"></script>         
        <script type="text/javascript">
            $(document).ready(function() {
                $().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>                  
-->
        <script type="text/javascript" src="https://fast.fonts.com/jsapi/3f5ac1f8-244e-44e3-b2de-ce3537e43a2d.js"></script>         
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/flexslider.css" type="text/css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>        
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->

        <script src="<?php echo get_template_directory_uri(); ?>/jquery.flexslider.js"></script>    

        <script type="text/javascript">
            function flap(elementname) {
                var ele = document.getElementById(elementname);
                if (ele.style.display == "none")
                    ele.style.display = "block";
                else
                    ele.style.display = "none";
			
		
		
            }
        </script>   
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    controlNav: false,
                    directionNav: false,
                    touch: true,
                    mousewheel: false, /* nervt im chrome */
                    keyboard: true
                   
                });
            });
        </script> 


        <script>
            $(document).ready(function(){
                if (window.navigator.standalone == false) {
                    window.scrollTo(0, 1);
                }
				
                $('#menu-trigger').click(function(){
                    if ($(this).hasClass('open')){
                        $('#mobile-navigation').slideUp('fast', function() {
                            $('#menu-trigger').removeClass('open');
                            //uncommented by armin, wozu? deaktiviert scrollbars//$('body').css('overflow','auto');
                        });
                    } else {
                        $('#mobile-navigation').slideDown('fast', function() {
                            $('#menu-trigger').addClass('open');
                            //uncommented by armin, wozu? deaktiviert scrollbars//$('body').css('overflow','hidden');
                        });
                    } 
                });
                
                $('#btn_imprint').click(function(){
                	
                	if ($('#imprint').css("display") == "block") {
                        $('#imprint').slideUp('fast');
                    } else {
                        $('#imprint').slideDown('fast');
                    } 
                    
                    $('html, body').animate({ 
      					scrollTop: $('#imprint').offset().top 
  					}, 1500);
  
                });
            });
        </script>       

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeSLHN6pbrZScchh_oSnZILL9B9vmXPAo"></script>        
        <script type="text/javascript">
	    $(function() {
                var myLatlng = new google.maps.LatLng(47.82290839006712,13.040488511323929);
                var mapOptions = {
                    zoom: 15,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                }
                var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                var image = '<?php echo get_template_directory_uri(); ?>/images/coworkingspacesalzburg_marker.png';
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    icon: image
                });
            });
        </script>    


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-43590908-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
}) ();

</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '140363743073498');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=140363743073498&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


    </head>    
    <body>
    
    	
    
        <div id="mobile-navigation">
            <div id="mobile-navigation-inner">		
                <ul>						 						
                    <li class=""><a class="yellow" href="#pricing">Pricing</a></li>						
                    <li class=""><a class="yellow" href="#space">Space</a></li>						
                    <!--<li class=""><a class="yellow" href="#people">People</a></li>-->						
                    <!--<li class=""><a class="yellow" href="#events">Events</a></li>-->					
                    <!--<li class=""><a class="yellow" href="#about">About</a></li>	-->						
                    <li class=""><a class="yellow" href="#where">Where</a></li>					
                </ul>
            </div>					
        </div>

        <div id="navigation" class="navigation-ar">
            <div id="navigation-container">
                <div id="logo-bg"></div>
                <a href="/">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_coworkingsalzburg.png" alt="Logo des Coworkingspace Salzburg">
                </a>
                <!--<nav id="nav">-->					
                <ul>
                    <li class="fb-link">
                        <div id="getupdatesonfacebook" class="light yellowlink">
                            
                                <span class="opacity60 yellow">Get <b>UPDATES</b> on</span>
                                <a href="https://www.facebook.com/CoWorking.Salzburg" target="_blank">
                                <img class="getupdatesonfacebookimg" alt="getupdatesonfacebook" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /></a>
                                
                                <div  style="" class="black yellow newsletterheadline"><a target="_blank" href="https://eepurl.com/FCFFj">Newsletter</a></div>
                                
                        </div>
                    </li>							 						
                    <li class="">
                        <a class="yellow" href="#pricing">Pricing</a>
                    </li>						
                    <li class="">
                        <a class="yellow" href="#space">Space</a>
                    </li>						
                    <li class="">
                        <a class="yellow" href="#people">People</a>
                    </li>						
                    <li class="">
                        <a class="yellow" href="#events">Events</a>
                    </li>						
                    <li class="">
                        <a class="yellow" href="#where">Where</a>
                    </li>		
                    <li class="yellow pointer mainmenu">
			<span>Services <div class="onlinecheckup">NEU! Coworking App</div></span>
			<ul class="submenu">
                                        <li><a href="https://coworking-camp.com" target="_blank">Coworking Camp</a></li>
                                        <li><a href="https://www.facebook.com/coworkandbaby/?fref=ts" target = "_blank" >Cowork &amp; Baby</a></li>
					<li><form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="romysigl@coworkingsalzburg.com">
<input type="hidden" name="lc" value="AT">
<input type="hidden" name="item_name" value="Coworking Salzburg Book">
<input type="hidden" name="item_number" value="Coworking Book">
<input type="hidden" name="amount" value="<?php echo get_option('price_eventroom'); ?>">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="20.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="notify_url" value="https://coworkingspacesalzburg.at/paypal/ipn">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_SM.gif:NonHostedGuest">
<a onclick="this.parentElement.submit()">
Coworking Book
</a>
</form></li>
                                        <li><a href="https://coworkingsalzburg.com/meet-our-expert/" target="_blank">Meet our Expert</a></li>

                                        <li><a href="https://www.facebook.com/pg/CoWorking.Salzburg/photos/?tab=album&album_id=1303892792982230" target="_blank">Food 4 Feedback</a></li>
                                        <li><a href="https://www.facebook.com/pg/CoWorking.Salzburg/photos/?tab=album&album_id=1216633845041459" target="_blank">Showtime</a></li>
                                        <li><a href="https://www.yellowdesks.com/" target="_blank">Coworking App</a></li>
                                        
                        </ul>

                    </li>					
                </ul>				

                <!-- </nav>	-->
                <div id="trigger">
                    <div id="menu-trigger">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/menu_trigger_icon.png" alt="menu trigger">
                    </div>		
                </div>
                <div>
                    <div id="menu-facebook">
                        <a href="https://www.facebook.com/CoWorking.Salzburg"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.png" alt="Facebook Icon"></a>
                    </div>		
                </div>
            </div>

        </div>


        <section id="slider">			
            <div id="flexslider" class="nomargin noborder flexslider carousel " >                
                <ul class="slides" >                    
                    <?php
                    $query = new WP_Query(array(
                                'post_type' => 'post',
                                'orderby' => 'title',
                                'order' => 'asc',
				'posts_per_page' => 9999,
				'category_name' => 'sliderimages',

                            ));
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            	$query->the_post();
				$gallery = get_post_gallery( get_the_ID(), false );
				if (isset($gallery["src"]))
					foreach($gallery["src"] as $img_src) {
//                            $img_src = get_custom_field("cws_headerimage:to_image_src");
                            ?>                            
                            <li>                                
                                <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png"                                 	 alt=""                                 	 class="flexsliderimage"                                 	 style="background-image: url('<?php echo $img_src; ?>');"                                 	 />                             
                            </li>                            
                            <?php
					}
                        endwhile;
                    endif;
                    ?>                
                </ul>            
            </div>        
        </section>		
        
        
        
        <section id="coworkingspaceoffers" class="yellowbg">				
            <div class="divider light">					
                <div class="inner-divider">          
                    <a class="wait-link" href="https://vimeo.com/62550490">            
                        <div class="yellow circle blackbg waitwhat yellowlink"><br />Wait!
                            <br/>                
                            <span class="light">WHAT?
                            </span>
                        </div></a><span class="bold">COWORKING</span>SALZBURG offers 
                    <span class="bold">COMMUNITY, OPPORTUNITIES &amp; DESKS
                    </span>					                      
                </div>             				 				
            </div>                                   		
        </section>  		
        <section id="pricing" class="pricing">				
            <div class="centertext white welikeitsimple uppercase eraser">we like it simple and easy
            </div>				
            <div class="centertext white firstdayonus uppercase eraser">come in for a tour and your first day is on us. Coffee is included, VAT is excluded.</div>	

<form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px; height:0px">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="romysigl@coworkingsalzburg.com">
<input type="hidden" name="lc" value="AT">
<input type="hidden" name="item_name" value="Coworkingspace Salzburg Dayticket">
<input type="hidden" name="item_number" value="Dayticket">
<input type="hidden" name="amount" value="<?php echo get_option('price_ticket_day'); ?>">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="20.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="notify_url" value="https://coworkingspacesalzburg.at/paypal/ipn">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_SM.gif:NonHostedGuest">
<a class="buynow" id="buynow1" onclick="this.parentElement.submit()">
buy now 
</a>
<img alt="" border="0" src="https://www.paypal.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>



<form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px; height:0px">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="romysigl@coworkingsalzburg.com">
<input type="hidden" name="lc" value="AT">
<input type="hidden" name="item_name" value="Coworkingspace Salzburg 1-Month-Ticket">
<input type="hidden" name="item_number" value="1-Month-Ticket">
<input type="hidden" name="amount" value="<?php echo get_option('price_ticket_month'); ?>">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="20.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="notify_url" value="https://coworkingspacesalzburg.at/paypal/ipn">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_SM.gif:NonHostedGuest">
<a class="buynow" id="buynow2" onclick="this.parentElement.submit()">
buy now
</a>
</form>

<form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px; height:0px">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="romysigl@coworkingsalzburg.com">
<input type="hidden" name="lc" value="AT">
<input type="hidden" name="item_name" value="Coworkingspace Salzburg 10 Tickets">
<input type="hidden" name="item_number" value="10 Tickets">
<input type="hidden" name="amount" value="<?php echo get_option('price_ticket_10'); ?>">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="20.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="notify_url" value="https://coworkingspacesalzburg.at/paypal/ipn">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_SM.gif:NonHostedGuest">
<a class="buynow" id="buynow3" onclick="this.parentElement.submit()">
buy now
</a>
</form>



            <!-- destkop --> 				
            <div class="centertext pricing-desktop"  >                    

<a class="boxinfo" id="boxinfo1" onclick="boxeschalkmouseclick(1)">i</a>
<a class="boxinfo" id="boxinfo2" onclick="boxeschalkmouseclick(2)">i</a>
<a class="boxinfo" id="boxinfo3" onclick="boxeschalkmouseclick(3)">i</a>


<div class="closeboxinfo" id="closeboxinfo1" onclick="boxeschalkmouseclick(1)"></div>
<div class="closeboxinfo" id="closeboxinfo2" onclick="boxeschalkmouseclick(2)"></div>
<div class="closeboxinfo" id="closeboxinfo3" onclick="boxeschalkmouseclick(3)"></div>


                <div id="price1" class="eraser prices price1"><?php echo get_option('price_ticket_day'); ?>.-</div>                    
                <div id="price3" class="eraser prices price2"><?php echo get_option('price_ticket_10'); ?>.-</div>
                <div id="price2" class="eraser prices price3"><?php echo get_option('price_ticket_month'); ?>.-</div>

                
                <div id="pricedescr1" style="display:none" class="prices pricedescr pricedescr1">
			<?php echo get_option('price_ticket_day_description'); ?> 
                </div>                    
                <div id="pricedescr3" style="display:none" class="prices pricedescr pricedescr2">
			<?php echo get_option('price_ticket_10_description'); ?>
                </div>                  	
                <div id="pricedescr2" style="display:none" class="prices pricedescr pricedescr3">
			<?php echo get_option('price_ticket_month_description'); ?>
                </div>
                                  	                   	
                <div id="priceheader1" class="eraser prices priceheaders priceheader1">DAY TICKET
                </div>                    
                <div id="priceheader3" class="eraser prices priceheaders priceheader2">10 TICKETS
                </div>                  	
                <div id="priceheader2" class="eraser prices priceheaders priceheader3">MONTHLY TICKET
                </div>                  	                   	          			
                <img id="boxes_chalk" src="<?php echo get_template_directory_uri(); ?>/images/boxes_chalk.png" alt="boxes chalk" />
                <img class="boxes_chalk_line" id="boxes_chalk_line1" src="<?php echo get_template_directory_uri(); ?>/images/boxes_chalk_line1.png" alt="boxes chalk lines" />
                <img class="boxes_chalk_line" id="boxes_chalk_line2" src="<?php echo get_template_directory_uri(); ?>/images/boxes_chalk_line2.png" alt="boxes chalk lines" />
                <img class="boxes_chalk_line" id="boxes_chalk_line3" src="<?php echo get_template_directory_uri(); ?>/images/boxes_chalk_line3.png" alt="boxes chalk lines" />
                           
            </div>                                 
            <!-- mobile -->                 
            <div class="pricing-mobile">					
                <img class="chalkline" src="<?php echo get_template_directory_uri(); ?>/images/lines_chalk.png" alt="lines chalk" />                	
                <div class="white eraser pricelistitem pricedesc">MONTHLY TICKET
                </div>                    
                <div class="white eraser pricelistitem pricetotal">
                    <?php echo get_option("price_ticket_month"); ?>.-
                </div>                    
                <img class="chalkline" src="<?php echo get_template_directory_uri(); ?>/images/lines_chalk.png" alt="lines chalk" />                    
                <div class="white eraser pricelistitem pricedesc">10 TICKETS
                </div>                    
                <div class="white eraser pricelistitem pricetotal">
                    <?php echo get_option("price_ticket_10"); ?>.-
                </div>                    
                <img class="chalkline" src="<?php echo get_template_directory_uri(); ?>/images/lines_chalk.png" alt="lines chalk" />                    
                <div class="white eraser pricelistitem pricedesc">1 TICKET
                </div>                    
                <div class="white eraser pricelistitem pricetotal">
                    <?php echo get_option("price_ticket_day"); ?>.-
                </div>                    
                <img class="chalkline" src="<?php echo get_template_directory_uri(); ?>/images/lines_chalk.png" alt="lines chalk" /> 
            </div>  
            



<br />
<br />
<br />




            <div class="centertext white firstdayonus uppercase eraser">wanna join very randomly
            </div>	
            
            <div id="mitgliedschaft" class="light white inner-divider mitgliedschaft" style="max-width: 830px">
            </div>


<form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px; height:0px">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="romysigl@coworkingsalzburg.com">
<input type="hidden" name="lc" value="AT">
<input type="hidden" name="item_name" value="Coworkingspace Salzburg Membership">
<input type="hidden" name="item_number" value="Membership">
<input type="hidden" name="amount" value="<?php echo get_option('price_club'); ?>">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="20.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="notify_url" value="https://coworkingspacesalzburg.at/paypal/ipn">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_SM.gif:NonHostedGuest">
<a class="buynow" id="buynow11" onclick="this.parentElement.submit()">
buy now
</a>
</form>

<form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px; height:0px">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="romysigl@coworkingsalzburg.com">
<input type="hidden" name="lc" value="AT">
<input type="hidden" name="item_name" value="Coworking Salzburg Book">
<input type="hidden" name="item_number" value="Coworking Book">
<input type="hidden" name="amount" value="<?php echo get_option('price_eventroom'); ?>">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="20.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="notify_url" value="https://coworkingspacesalzburg.at/paypal/ipn">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_SM.gif:NonHostedGuest">
<a class="buynow" id="buynow12" onclick="this.parentElement.submit()">
buy now
</a>
</form>
<form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px; height:0px">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="romysigl@coworkingsalzburg.com">
<input type="hidden" name="lc" value="AT">
<input type="hidden" name="item_name" value="Coworkingspace Salzburg Meeting Room">
<input type="hidden" name="item_number" value="Meeting Room">
<input type="hidden" name="amount" value="<?php echo get_option('price_meetingroom'); ?>">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="20.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="notify_url" value="https://coworkingspacesalzburg.at/paypal/ipn">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_SM.gif:NonHostedGuest">
<a class="buynow" id="buynow13" onclick="this.parentElement.submit()">
buy now
</a>
</form>

            <!-- destkop --> 				
            <div class="centertext pricing-desktop"  >                    
<a class="boxinfo" id="boxinfo11" onclick="boxeschalkmouseclick(11)">i</a>
<a class="boxinfo" id="boxinfo12" onclick="boxeschalkmouseclick(12)">i</a>
<a class="boxinfo" id="boxinfo13" onclick="boxeschalkmouseclick(13)">i</a>



<div class="closeboxinfo" id="closeboxinfo11" onclick="boxeschalkmouseclick(11)" ></div>
<div class="closeboxinfo" id="closeboxinfo12" onclick="boxeschalkmouseclick(12)" ></div>
<div class="closeboxinfo" id="closeboxinfo13" onclick="boxeschalkmouseclick(13)" ></div>


                <div id="price11" class="eraser prices price1">
                    <?php echo get_option("price_club", 2); ?>.-
                </div>                    
                <div id="price13" class="eraser prices price2">
                    <?php echo get_option("price_meetingroom", 2); ?>.-
                </div>                  	
                <div id="price12" class="eraser prices price3">
                    <?php echo get_option("price_eventroom", 2); ?>.-
                </div>
                
                <div id="pricedescr11" style="display:none" class="prices pricedescr pricedescr1">
                    <?php echo get_option('price_club_description'); ?>
                </div>                    
                <div id="pricedescr13" style="display:none" class="prices pricedescr pricedescr2">
                    <?php echo get_option('price_meetingroom_description'); ?>
                </div>                  	
                <div id="pricedescr12" style="display:none" class="prices pricedescr pricedescr3">
                    <?php echo get_option('price_eventroom_description'); ?>
                </div>
                                  	                   	
                <div id="priceheader11" class="eraser prices priceheaders priceheader1">MEMBERSHIP
                </div>                    
                <div id="priceheader13" class="eraser prices priceheaders priceheader2">MEETING ROOM 
                </div>                  	
                <div id="priceheader12" class="eraser prices priceheaders priceheader3">COWORKING BOOK 
                </div>                  	                   	          			
                <img id="boxes_chalk" src="<?php echo get_template_directory_uri(); ?>/images/boxes_chalk.png" alt="boxes chalk" />
                <img class="boxes_chalk_line" id="boxes_chalk_line11" src="<?php echo get_template_directory_uri(); ?>/images/boxes_chalk_line1.png" alt="boxes chalk lines" />
                <img class="boxes_chalk_line" id="boxes_chalk_line12" src="<?php echo get_template_directory_uri(); ?>/images/boxes_chalk_line2.png" alt="boxes chalk lines" />
                <img class="boxes_chalk_line" id="boxes_chalk_line13" src="<?php echo get_template_directory_uri(); ?>/images/boxes_chalk_line3.png" alt="boxes chalk lines" />
                           
            </div>                                 
            <!-- mobile -->                 
            <div class="pricing-mobile">					
                <img class="chalkline" src="<?php echo get_template_directory_uri(); ?>/images/lines_chalk.png" alt="lines chalk" />                	
                <div class="white eraser pricelistitem pricedesc">COWORKING BOOK
                </div>                    
                <div class="white eraser pricelistitem pricetotal">
                    <?php echo get_option("price_eventroom"); ?>.-
                </div>                    
                <img class="chalkline" src="<?php echo get_template_directory_uri(); ?>/images/lines_chalk.png" alt="lines chalk" /> 
                <div class="white eraser pricelistitem pricedesc">MEETING ROOM
                </div>                    
                <div class="white eraser pricelistitem pricetotal">
                    <?php echo get_option("price_meetingroom"); ?>.-
                </div>                    
                <img class="chalkline" src="<?php echo get_template_directory_uri(); ?>/images/lines_chalk.png" alt="lines chalk" />                    
                <div class="white eraser pricelistitem pricedesc">MEMBERSHIP
                </div>                    
                <div class="white eraser pricelistitem pricetotal">
                    <?php echo get_option("price_club", 2); ?>.-
                </div>                    
                <img class="chalkline" src="<?php echo get_template_directory_uri(); ?>/images/lines_chalk.png" alt="lines chalk" />                    
            </div>  
           



        </section>        
        <section id="thedowhatyouwantrevolution2" class="blackbg yellow centertext light thedowhatyouwantrevolution">          				
            <div class="divider dark">					
                <div class="inner-divider">        	"The 
                    <span class="bold">DO WHAT YOU LOVE REVOLUTION
                    </span> started here" 
                </div>
            </div>        
        </section>                  
        <a id="space"></a>        
        <section id="virtualtour">            
            <div class="virtualtourdiv">			
                <a href="http://demo.circum.io/cwsbg/#panorama/1" target="_blank">
                    <div class="yellow circle blackbg takeavirtualtourcircle" ><br />
                        <span class="light">Take a 
                        </span>
                        <br/>
                        <span class="bold">VIRTUAL TOUR
                        </span>
                        
                    </div></a>  		
            </div>        
        </section>        
        <section id="easyaccess" class="blackbg yellow centertext light">                  				
            <div class="divider dark">					
                <div class="inner-divider">        	Easy Access 
                    <span class="bold">24/7
                    </span><span><?php 
                    
                    ini_set('default_socket_timeout', 3);    
                    $json = @file_get_contents("http://vz.langhofer.net/middleware.php/data/380f5160-ea56-11e3-ab13-c56388435cdd.json");
                    $data = @json_decode($json);
                    $temp = @$data->data->tuples[$data->data->rows - 2][1];
                    if($temp > 0) {
                    	echo " - Temperature: ";
                		echo "<pan class='bold'>" . str_replace(".",",", round($temp,2)) . "</span>";
                    	echo "&#176;C";
                    
                    }
                     ?></span>          
                </div>          
            </div>        
        </section>                 
        <a id="people"></a>                     
        <section id="coworkers" class="coworkers centertext">                     
            <div  class="light white meetourcoworkers" >Meet our 
                <span class="bold">COWORKERS
                </span>
            </div>            
            <div class="inner-divider">             			    
                <?php
                $query = new WP_Query(array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'orderby' => 'title',
                            'order' => 'asc',
                            'posts_per_page' => 9999,
			    'category_name' => 'coworkers'
                        ));

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                        $website = get_post_meta(get_the_ID(), 'cws_coworker_ownwebsite', '')[0]; //get_custom_field("cws_coworker_ownwebsite:to_string");
                        $website = htmlspecialchars($website);
                        $ahrefwebseite = $website == "" ? "" : '<a href="'. $website . '" target="_blank" class="coworker-link">';
                        $ahrefwebseiteclosing = $website == "" ? "" : '</a>';
						
                        $img_src = get_the_post_thumbnail_url(get_the_ID(), 'full');// get_the_post_thumbnail(); //get_custom_field("cws_coworker_image:to_image_src");
                        $companyname = get_post_meta(get_the_ID(), 'cws_coworker_companyname', '')[0]; // get_custom_field("cws_coworker_companyname:to_string");

			$logo_src = "";
			$html = get_the_content();
			if (trim($html) != "") {
				$doc = new DOMDocument();
				$imageTags = $doc->getElementsByTagName('img');
				$doc->loadHTML($html);
				foreach($imageTags as $tag) {
					$logo_src = $tag->getAttribute('src');
					break;

				}
			}

                        $name = get_the_title();
                        ?>                         
                        <div class="coworker-box">                                                     
                            <div class="coworkeritem">                                                             	
                                <?php if ($img_src != "") { ?>
                                    <?php echo $ahrefwebseite; ?>                                   	
                                        <img class="coworkerimg" src="<?php echo $img_src ?>" alt="<?php echo $name; ?>" />
                                    <?php echo $ahrefwebseiteclosing; ?>                                	
                                <?php } ?> 
                                
                                 <?php echo $ahrefwebseite; ?>                                  
                                    <span class="coworkername">                                    
                                    <?php echo $name; ?>                                  
                                </span>
                                <?php echo $ahrefwebseiteclosing; ?>
                                <?php echo $ahrefwebseite; ?>
                                    <span class="coworkercompanyname" >                                                                                                        
                                        <?php echo $companyname; ?>                                   
                                    </span>
                                <?php echo $ahrefwebseiteclosing; ?>
                                <?php echo $ahrefwebseite; ?>                                
                                    <span class="coworkerlogo" >                                  	
                                        <?php if ($logo_src == "") { ?>                                   		
                                            <img src="/wp-content/uploads/blanklogo.jpg" alt="Noch kein Logo" />                                  	
                                        <?php } ?> 	                                                                  	
                                        <?php if ($logo_src != "") { ?>                                     	
                                            <img src="<?php echo $logo_src ?>" alt="Logo von <?php echo $name; ?>" />                                  	
                                        <?php } ?> 	                                 
                                    </span>
                                <?php echo $ahrefwebseiteclosing; ?>                                                            
                            </div>                                                         
                        </div>                                                
                        <?php
                    endwhile;
                endif;
                ?>                 
                <div style="clear:both; padding-bottom: 38px;">                
                </div>                
            </div>        
        </section>                          
        <section id="events" class="white centertext light">		
            <div class="seeourevents">
                <div class="inner-divider">			
                    <div class="seeourevents-head">See our <span class="bold">EVENTS</span>. You're invited! 			
                    </div> 
                    <div class="left">
                        <div class="divider dark">					
                            <div class="inner-divider">Need a place to host your 
                                <span class="bold">Event
                                </span>
                                <br><a href="mailto:<?php echo $cfs->get("emailaddress", 2); ?>" class="contactus">Contact <span class="bold">Us</span></a>          
                            </div>          
                        </div>
                    </div>			
                    <div class="events right">						
                        <?php
			$DISPLAYEVENTS=3;
			// wenn moeglich 3 events inda zukunft anzeigen
			// wenn keine zukuenftigen events da sind die fehlenden mit vergangenen events auffuellen
			$myrows = $wpdb->get_results("SELECT * FROM fbevents order by start_time asc", "ARRAY_A");

			$rest = $wpdb->num_rows;
                        //$myrows = $wpdb->get_results("SELECT * FROM (SELECT * FROM fbevents where uts_starttime > " . time() . " order by start_time asc limit 3) as dummy order by start_time asc", "ARRAY_A");
			$displayed=0;
                        foreach ($myrows as $row) {
				$rest--;
				if ($row["uts_starttime"] > time() || $rest <=$DISPLAYEVENTS-1) {
					$displayed++;
					if ($displayed==$DISPLAYEVENTS+1) {
						break;
					}

                            ?>								
                            <div class="yellowbg eventitem">									
                                <div class="blackcolor bold eventdate" style="float:left; border-right: 1px solid #d0cc07">										
                                    <div class="eventdateinfo">
                                        <?php echo date("d.m.", ($row["uts_starttime"])) ?>
                                    </div>										
                                    <div class="opacity30 regular eventtime" style="font-size: 25px;">
                                        <?php echo date("H:i", ($row["uts_starttime"])) ?>
                                    </div>									
                                </div>									
                                <div class="blacklink eventdescription bold">	

                                    <a target="_blank" href="https://facebook.com/<?php echo $row["id"]; ?>" class="eventlink">
                                        <?php 
					// wenn das 38. zeichen ein umlaut ist, werden komische zeichen angezeigt, todo: loesung finden
                                        if (strlen($row["name"]) > 38) 
                                        	echo substr(($row["name"]), 0, 38) . "..."; 
                                        else 
                                        	echo $row["name"];
                                        ?>
                                        </a>	

                                </div>


                                <div style="clear:both; overflow: hidden; border-bottom: 1px solid #d0cc07"></div>						
                            </div>								
                            <?php
                        	}
			}
                        ?>				
                    </div>		
                </div>

                <div class="clear: both;">

                </div>

            </div>


        </section>  
        
        <a id="about"></a> 
        <section id="aboutus" class="blackbg white centertext light">
			
				<div class="aboutus">
					
					
						<div class="whitebg blackcolor" style="width: 800px;
    font-size: 16px;
   
    text-align: left;
    width: 600px;
    display:block;margin-left: 100px;
    border-bottom: 1px solid black;
    padding-bottom: 20px;
    margin-top: 60px;
    padding: 20px;
    
">

					<span style="font-size: 40px">ABOUT <span class="bold">US</span></span>
					<br />
					<?php echo get_option("aboutus1"); ?>
						</div>
						
						
						
						<div class="whitebg blackcolor" style="width: 800px; font-size: 16px;
    text-align: left;
    width: 600px;
    display:block;
    margin-left: 100px;
    padding-left: 20px;
    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 70px;
">
					<div style="width:280px; float:left; padding-right: 30px;"><?php echo get_option("aboutus2"); ?></div>
					<div style="width: 20px;"></div>
					<div style=""><?php echo get_option("aboutus3"); ?></div>
					</div>
				</div>
				
        </section>
        <section id="thedowhatyouwantrevolution1" class="blackbg yellow centertext thedowhatyouwantrevolution">                  				
            <div class="divider dark">					
                <div class="inner-divider">        	"The 
                    <span class="bold">DO WHAT YOU WANT REVOLUTION
                    </span> started here"           
                </div>          
            </div>        
        </section>                          
        <a id="where"></a>        
        <section id="googlemapssayhello">        	
            <div class="yellowbox">           	 	
                <div class="divider light">					
                    <div class="inner-divider"><?php //  echo $cfs->get("contact_header", 2);             ?>
                        Stop by, say <strong>Hello</strong></div>
                    <font size="3"><p>COWORKING SALZBURG</p>
                    <p>Techno-Z (Techno 2)</p>
                    <p>Jakob-Haringer-Straße, 3</p>
                    <p>5020, Salzburg</p>
                    <p>Bus 6 (Jakob-Haringer)</p>
                    <p>Bus 3 (HTL Itzling)</p>
                    <p>Parking (Techno-Z oder Hofer)</p></font>
                    </div>          	 	
                <?php echo $cfs->get("contact_main", 2); ?>            	
                <?php echo $cfs->get("contact_post", 2); ?>        	
            </div> 			
            <div id="map_canvas" class="googlemaps">			         	
            </div>        
        </section>		


<?php
// new: sections queried (wordpress pages)
// baby
        $args = array(
                'sort_order' => 'asc',
                'sort_column' => 'menu_order',
                'hierarchical' => 1,
                'exclude' => '',
                'include' => '',
                'meta_key' => '',
                'meta_value' => '',
                'authors' => '',
                'child_of' => 0,
                'parent' => -1,
                'exclude_tree' => '',
                'number' => '',
                'offset' => 0,
                'post_type' => 'page',
                'post_status' => 'publish'
        );
        $pages = get_pages($args);
        foreach ($pages as $page) {

                $filename = get_theme_root() . "/cws/sections/" . $page -> post_name . ".php"; // e.g. /web/vhosts/.../cws/sections/coworkbaby.php
                if (file_exists($filename)) {
                        include($filename);
                }
        }
?>
        <footer class="footer">
            <ul class="socialmedialist">                    
                <li>
                    <a href="https://www.facebook.com/CoWorking.Salzburg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico_facebook.png" alt="Coworking Salzburg auf Facebook" /></a>
                </li>                    
                <li>
                    <a href="https://twitter.com/CoworkingSBG">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico_twitter.png" alt="Coworking Salzburg auf Twitter"/></a>
                </li>                    
                <li>
                    <a href="https://plus.google.com/114448710587785813186/about">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico_googleplus.png" alt="Coworking Salzburg auf Google Plus"/></a>
                </li>                    
                <li>
                    <a href="https://vimeo.com/coworkingsalzburg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico_vimeo.png" alt="Coworking Salzburg auf Vimeo"/></a>
                </li>                    
                <li>
                    <a href="https://pinterest.com/coworkingsbg/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico_pinterrest.png" alt="Coworking Salzburg auf Pinterest"/></a>
                </li>                    
                <li>
                    <a href="https://at.linkedin.com/pub/romy-sigl/52/27a/828">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico_linkedin.png" alt="Coworking Salzburg auf Linkedin"/></a>
                </li>                    
                <li>
                    <a href="https://www.xing.com/companies/coworkingsalzburg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico_xing.png" alt="Coworking Salzburg auf Xing"/></a>
                </li>                
            </ul>                                 
            <div class="yellow footerelement borderright" id="footercoworkingspace">&copy; <?php echo str_replace("##YEAR##", date('Y'), get_option("copyright")); ?>             
            </div>            
            <div class="yellow yellowlink footerelement borderright" id="press">            	
                <a href="https://firmen.wko.at/Web/DetailsKontakt.aspx?FirmaID=50a6f8f3-1542-4b48-a7f7-a2b765328c97&amp;StandortID=0">Press</a>            
            </div>            
            <div  class="yellow yellowlink footerelement" id="lastfooterelement">            	
                <div class="btn_imprint">
                <span id="btn_imprint">Imprint</span>
                <a target="_blank" href="<?php echo htmlspecialchars('https://validator.w3.org/check?uri=http%3A%2F%2Fcoworkingsalzburg.com%2F'); ?>" >
                <img class="html5css3" src="<?php echo get_template_directory_uri(); ?>/images/logo_html5.png" alt="html5 valid"/>
                </a>       
                <a target="_blank" href="<?php echo htmlspecialchars('https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.coworkingspacesalzburg.at%2Fincludes%2Fcws.css&profile=css3&usermedium=all&warning=1&vextwarning='); ?>" >
                <img class="html5css3" src="<?php echo get_template_directory_uri(); ?>/images/logo_css3.png" alt="css3 valid"/>  
                </a>
                <a target="_blank" href="<?php echo htmlspecialchars('https://ipv6.coworkingsalzburg.com/'); ?>" >
                <img class="html5css3" src="<?php echo get_template_directory_uri(); ?>/images/ipv6.png" alt="this site is running on ipv6"/>  
                </a>    
                </div>         
            </div>
                      		
        </footer>
        <section id="imprint" class="yellowbg" style="display:none">
			 <div class="divider light">					
                <div class="inner-divider">
					<table class="imprint">
						<tr>
							<td>
								<span class="bold">Imprint</span><br/>
									<br/>
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo nl2br(get_option("imprintleft")); ?>
								
							</td>
							<td>
								<?php echo nl2br(get_option("imprintright")); ?>

						</tr>
			
					</table>
        		</div>
        	</div>
        </section>		 		 		     

<!-- Start of Rocket.Chat Livechat Script -->
<script type="text/javascript">
(function(w, d, s, u) {
	w.RocketChat = function(c) { w.RocketChat._.push(c) }; w.RocketChat._ = []; w.RocketChat.url = u;
	var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
	j.async = true; j.src = 'https://rocket.langhofer.at/packages/rocketchat_livechat/assets/rocketchat-livechat.min.js?_=201702160944';
	h.parentNode.insertBefore(j, h);
})(window, document, 'script', 'https://rocket.langhofer.at/livechat');
</script>
<!-- End of Rocket.Chat Livechat Script -->

    </body>
</html>
