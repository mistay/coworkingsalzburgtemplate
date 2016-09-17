<?php
/*
  Template Name: cwssimplepage
 */
?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/simplepage.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/simplepage.css">


<head>
<!-- Google Analytics -->
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

<a href="/" class="logolink" >
	<img class="logo" alt="Logo des Coworkingspace Salzburg" src="<?php echo get_template_directory_uri(); ?>/images/logo_coworkingsalzburg.png">
</a>

<p></p>

<div class="simpletitle">
<h1>
<?php echo get_the_title(); ?>
</h1>
</div>

<div class="simplepost">
<span style="color: white;"><center><?php
print_r(get_post()->post_content);
?></center></span>
</div>



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
								<?php echo $cfs->get("imprintleft", 2); ?>
								
							</td>
							<td>
								<?php echo $cfs->get("imprintright", 2); ?>

						</tr>
			
					</table>
        		</div>
        	</div>
        </section>		 		 		     
    </body>
</html>

