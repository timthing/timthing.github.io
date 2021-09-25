<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js gt-ie9 non-ie" lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Timthing</title>
		<meta name="description" content="Tim de Groot's personal website. Specialised in web/UI and print design." />
		<meta name="keywords" content="interface design, web design, HTML, CSS, usability, UI, UX" />
		<meta name="author" content="Tim de Groot" />
		<meta name="robots" content="index, follow">
		<link rel="canonical" href="http://www.timthing.me/" />
        <meta name="viewport" content="width=device-width, initital-scale=1.0, user-scalable=no">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
        
        <!-- JQuery -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        	    
        <!-- Import Typekit fonts -->
		<script type="text/javascript" src="//use.typekit.net/gyy1fih.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<!-- Contact Form -->
		<script type="text/javascript">                                 
		// we will add our javascript code here
		jQuery(document).ready(function($) {
		
			$("#ajax-contact-form").submit(function() {
				var str = $(this).serialize();
		
				$.ajax({
					type: "POST",
					url: "includes/contact-process.php",
					data: str,
					success: function(msg) {
		    			// Message Sent? Show the 'Thank You' message and hide the form
		    			if(msg == 'OK') {
		    				result = '<div class="notification_ok">Your message has been sent. <br />Thank you!</div>';
		    				$("#fields").hide();
		    			} else {
		    				result = msg;
		    			}
		    			$('#note').html(result);
					}
				});
				return false;
			});
		});
		</script>  

            
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<section id="section_header">
			
			<header class="header">
				<div class="logo"></div>
				<div class="portrait rotate" onclick="return true"></div>
			</header>
			
		</section>
		<section>
		
			<article class="intro">
				<header>
					<h1>It's a Timthing</h1>
					<p>Hi there, my name is Tim.</p><p>I'm a designer from the Netherlands working on web/UI and print. Passionate about design, music, photography, hiking and whisky.</p>
					<p>Have a look at some of my work<br />and feel free to contact me.</p>
					<p>Slàinte mhath.</p><!-- I wish you good health! -->
				</header>
			</article>
			
		</section>
		<section>		
		
				<nav class="menu_contact">
					<ul>
						<li class="dribbble"><a href="http://www.dribbble.com/timthing" target="_blank"></a><span class="tooltip">Dribbble</span></li>
						<li class="twitter"><a href="http://www.twitter.com/timthing" target="_blank"></a><span class="tooltip">Twitter</span></li>
					</ul>
				</nav>
				
		</section>

		<section id="portfolio">
			<article>
				<h2>Work</h2>
				<ul>
					 <li>
						 <div class="fr"><a href="http://freekrooze.nl" title="Go to freerooze.nl" target="_blank"></a></div>
						 <h4>Freek Rooze</h4>
						 <p class="description">Official website</p>
						 <p class="tags">Design HTML CSS</p>
						 <a href="http://freekrooze.nl" title="Go to freerooze.nl" target="_blank">Go to freekrooze.nl</a>
					 </li>					
					 <li>
						 <div class="ice"><a href="http://dribbble.com/shots/642698-I-C-E-App" title="View I.C.E. App on Dribbble" target="_blank"></a></div>
						 <h4>I.C.E. App</h4>
						 <p class="description">iOS app mockup</p>
						 <p class="tags">Personal project</p>
						 <a href="http://dribbble.com/shots/642698-I-C-E-App" title="View I.C.E. App on Dribbble" target="_blank">View on Dribbble</a>
					 </li>
					 <li>
						 <div class="nesshop"><a href="http://dribbble.com/shots/774734-Dear-Nespresso-Shop" title="View Nespresso Shop on Dribbble" target="_blank"></a></div>
						 <h4>Nespresso Shop</h4>
						 <p class="description">iOS app mockup</p>
						 <p class="tags">Unofficial</p>
						 <a href="http://dribbble.com/shots/774734-Dear-Nespresso-Shop" title="View Nespresso Shop on Dribbble" target="_blank">View on Dribbble</a>
					 </li>
					 <li>
						 <div class="neslogin"><a href="http://dribbble.com/shots/771101-Dear-Nespresso-Login" title="View Nespresso Login on Dribbble" target="_blank"></a></div>
						 <h4>Nespresso Login</h4>
						 <p class="description">iOS app mockup</p>
						 <p class="tags">Unofficial</p>
						 <a href="http://dribbble.com/shots/771101-Dear-Nespresso-Login" title="View Nespresso Login on Dribbble" target="_blank">View on Dribbble</a>
					 </li>
					 <li>
						 <div class="artist"><a href="http://dribbble.com/shots/628132-Artist-Profile" title="View Artist Profile on Dribbble" target="_blank"></a></div>
						 <h4>Artist Profile</h4>
						 <p class="description">Profile Widget</p>
						 <p class="tags">Personal project</p>
						 <a href="http://dribbble.com/shots/628132-Artist-Profile" title="View Artist Profile on Dribbble" target="_blank">View on Dribbble</a>
					 </li>
				</ul>
			</article>
		</section>

		<footer>
		
			<article class="top">		
		
				<h2>Contact</h2>
				
				<div id="note"></div>			
			
				<div id="fields">
				<form id="ajax-contact-form" action="">
					<fieldset>    
					 
					<label for="name">Name</label>
					<input type="text" name="name" placeholder="Frodo Baggins" required="required">
					 
					<label for="email">E-mail</label>
					<input type="email" name="email" placeholder="frodo@theshire.com" required="required">
					 
					<label for="message">Question/Comment</label>
					<textarea name="message" placeholder="Mordor, Gandalf, is it left or right?" required="required"></textarea>

					<input class="btn" type="submit" name="submit" value="Send Message" />
					
					<span><a href="mailto:its@timthing.me">its @ timthing .me</a></span>
					 
					</fieldset>
				</form>	
							
				</div>		
		
			</article>
			
			<article class="bottom">
		
				<div class="logomini"></div>
		
			</article>
		
		</footer>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <!-- Google Analytics -->
		<script type="text/javascript">		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-20922102-2']);
		  _gaq.push(['_trackPageview']);
		  		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();		
		</script>
        
        <!-- Gosquared Analytics -->
        <script type="text/javascript">
		  var GoSquared = {};
		  GoSquared.acct = "GSN-282671-Z";
		  (function(w){
		    function gs(){
		      w._gstc_lt = +new Date;
		      var d = document, g = d.createElement("script");
		      g.type = "text/javascript";
		      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
		      var s = d.getElementsByTagName("script")[0];
		      s.parentNode.insertBefore(g, s);
		    }
		    w.addEventListener ?
		      w.addEventListener("load", gs, false) :
		      w.attachEvent("onload", gs);
		  })(window);
		</script>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

		
    </body>
</html>
