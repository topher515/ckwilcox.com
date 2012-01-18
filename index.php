<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Chris Wilcox | The Most Interesting Man in the World</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8">
		<style>
		.window {
		  position:absolute;
		  left:0;
		  top:0;
		  min-width:400px;
		  min-height:200px;
		  display:none;
		  z-index:9999;
		  padding:20px;
		  border-radius: 1em;
		  background: #EEE url(images/vcard/wrapper.gif);
		}
		
		.window-content {
			position: relative;
		}
		
		.overlay {
			display: block;
			position: absolute;
			bottom:20px;
			right: 0px;
			width: 100%;
			/* Fallback for web browsers that doesn't support RGBa */
			background: rgb(0, 0, 0) transparent;
			/* RGBa with 0.6 opacity */
			background: rgba(0, 0, 0, 0.8);
			/* For IE 5.5 - 7*/
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
			/* For IE 8*/
			-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
		}
		
		.overlay * {
			color:white;
			text-shadow: 1px 1px 1px #DDD;
		}
		
		.window-content .overlay > * {
			padding: 1em;
		}
		
		#mask {
		  position:absolute;
		  left:0;
		  top:0;
		  z-index:9000;
		  background-color:#000;
		  display:none;
		}
		</style>
		<script type="text/javascript" src="scripts/jquery.js"></script>
		<script type="text/javascript" src="scripts/cufon.js"></script>
		<script type="text/javascript" src="scripts/cufon.font.js"></script>
		<script type="text/javascript" src="scripts/vcard.js"></script>
		<!-- script type="text/javascript" src="scripts/jquery.prettyPhoto.js"></script -->
		<!--[if lt IE 8]><script> iexplorer = 1; </script><![endif]-->
		<script>
		$(function() {
			/*$('#menu a.biggify').click(function() {
				$('#vcard').animate({height:625}, 500)
				$('.contentitem').animate({height:485},500)
			})
			$('#menu a:not(.biggify)').click(function() {
				$('#vcard').animate({height:425}, 500)
			})*/
			
			//select all the a tag with name equal to modal
			$('a[name=modal]').click(function(e) {
				//Cancel the link behavior
				e.preventDefault();

				//Get the A tag
				var id = $(this).attr('href');

				//Get the screen height and width
				var maskHeight = $(document).height();
				var maskWidth = $(window).width();

				//Set heigth and width to mask to fill up the whole screen
				$('#mask').css({'width':maskWidth,'height':maskHeight});

				//transition effect		
				$('#mask').fadeTo(500,0.5);
				$('#mask').fadeIn(500);

				//Get the window height and width
				var winH = $(window).height();
				var winW = $(window).width();

				//Set the popup window to center
				$(id).css('top',  winH/2-$(id).height()/2);
				$(id).css('left', winW/2-$(id).width()/2);

				//transition effect
				$(id).fadeIn(500); 

			});

			//if close button is clicked
			$('.window .close').click(function (e) {
				//Cancel the link behavior
				e.preventDefault();

				$('#mask').fadeOut(500);
				$('.window').fadeOut(500);
			});		

			//if mask is clicked
			$('#mask').click(function () {
				$(this).fadeOut(500);
				$('.window').fadeOut(500);
			});			

			
		})
		</script>
		<meta name="title" content="Chris Wilcox" />
		<meta name="description" content="description" />
		<link rel="image_src" type=" image/jpeg" href="images/vcard/profile.jpg" />
	</head>
	<body>
		
	<div id="mask"></div>
	
	<!-- Work windows -->
	<div class="window" id="chatsockets">
		<h1>HTML5 Websockets Chat (2011)</h1>
		<div class="window-content">
			<img src="images/work/chatsockets.jpg">
			<div class="overlay">
				<p>A websockets experiment--instantaneous browser to browser chatting via websockets.</p>
				<ul>
					<li>Primary language: Javascript</li>
					<li>Chat system front/backend comm: Websockets via Socket.io</li>
					<li>Server: Node.js</li>
					<li><a href="https://github.com/topher515/chatsockets">https://github.com/topher515/chatsockets</a></li>
				</ul>
			</div>
		</div>

	</div>
	
	<div class="window" id="lightwall">
		<h1>Multithreaded realtime LED driver (2011)</h1>
		<div class="window-content">
			<img src="images/work/lightwall.jpg">
			<div class="overlay">
				<p>My buddy Andy built an LED lightwall, I built a driver for it in Python. It's not really the Snake game that you see in the Video which is particularly interesting, but the framework that enabled the game to be created easily.</p>
				<ul>
					<li>Primary driver language: Python</li>
					<li>Hardware Interface: DMX via Arduino via MAX/MSP</li>
					<li>Python--MAX/MSP interface: TCP/IP</li>
					<li><a href="http://vimeo.com/19761386" >http://vimeo.com/19761386</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="window" id="ecommerce">
		<h1>RowApparel.com (2011)</h1>
		<div class="window-content">
			<img src="images/work/ecommerce.jpg">
			<div class="overlay">
				<p>An eCommerce application for presenting an apparel customization broker's vendor's
					catalog in a simple to search and view format.</p>
				<ul>
					<li>Primary languages: Python/Javascript</li>
					<li>Web framework: Django</li>
					<li>eCommerce framework: Satchmo</li>
					<li>DB: MySQL</li>
					<li>Hosting: Webfaction</li>
					<li><a href="http://rowapparel.com">www.rowapparel.com</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="window" id="playground">
		<h1>Experimental Java Physics/Collision Engine (2006) )</h1>
		<div class="window-content">
			<img src="images/work/playground.jpg">
			<div class="overlay">
				<ul>
					<li>Engine: Written from the ground-up in Java</li>
					<li>UI: Java Swing</li>
					<li>IDE: Eclipse</li>
					<li>Lesson learned: colliding arbitrary polygons is hard--but oh so rewarding.</li>
					<li>Download: <a href="http://ckwilcox.com/playground/index.html">http://ckwilcox.com/playground/index.html</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="window" id="art">
		<h1>Artist portfolio website (2008)</h1>
		<div class="window-content">
			<img src="images/work/art.jpg">
			<div class="overlay">
				<p>Artist's portfolio page and blog.</p>
				<ul>
					<li>Primary language: PHP</li>
					<li>DB: MySQL</li>
					<li>Designed in Photoshop</li>
					<li><em>Site not longer available online</em></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="window" id="videochat">
		<h1>Flash Videoconferencing (2008)</h1>
		<div class="window-content">
			<img src="images/work/videochat.jpg">
			<div class="overlay">
				<p>This was my UC Santa Barbara Capstone Project. Enable client-less video conferencing--just use your web browser. Flash client can connect to open source version of Flash Media Server for video and SIP servers so that other VoIP clients (including traditional handsets/mobiles) can participate.</p>
				<ul>
					<li>Flash Client built in Flex (Actionscript)</li>
					<li>Video server backend built with Red5 open source Flash Media Server (Java)</li>
					<li>Integrated Browser SIP Client for VoIP</li>
					<li>Asterisk VoIP Server</li>
					<li><a href="http://ckwilcox.com/connectrd/">Old Project Page</a></li>
					<li><a href="http://www.youtube.com/user/connectrd/">http://www.youtube.com/user/connectrd/</a></li>
				</ul>
			</div>
		</div>
	</div>
		
	<div class="window" id="counteur">
		<h1>Fun with Google App Engine (2010)</h1>
		
		<div class="window-content">
			<img src="images/work/counteur.jpg">
			<div class="overlay">
				<p>Used intelligent text parsing to keep track of *whatever* the user wants, however they want to input it--through the web interface, via email or text message. Used http://www.zeepmobile.com/ API for text messaging interface.</p>
				<ul>
					<li>Primary language: Python</li>
					<li>Backend/DB: Google App Engine/GAE Datastore</li>
					<li>SMS Gateway: Zeepmobile</li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Life Windows -->
	<div class="window" id="blognow">
		<h1>iamwilcox.posterous.com</h1>
		<div class="window-content">
			<img src="images/life/goldengate.jpg">
			<div class="overlay">
				<p>Read whatever the latest thing I'm rambling about at <a href="http://iamwilcox.posterous.com">iamwilcox.posterous.com</a>.</p>
			</div>
		</div>
	</div>
	
	<div class="window" id="tnt2011">
		<h1>Team in Training (2011)</h1>
		<div class="window-content">
			<img src="images/life/tnt.jpg">
			<div class="overlay">
				<p>Training for my first triathlon, the 2011 Big Kahuna Half Ironman in Santa Cruz, with Team in Training.</p>
				<p>Help me fundraise! <a href="http://pages.teamintraining.org/sf/bigktri11/ckwilcox">Donate to the cause.</a></p>
			</div>
		</div>
	</div>
	
	<div class="window" id="biketour2010">
		<h1>Touring the Pacific Coast (2010)</h1>
		<div class="window-content">
				<img src="images/life/highway1.jpg">	
					<div class="overlay">
				<p>The blog I kept while cycling down the US Pacific coast from Vancouver B.C. to Tiajuana, Mexico.</p>
				<p><a href="http://roadtrippin.posterous.com/">http://roadtrippin.posterous.com/</a></p>
			</div>
		</div>
	</div>
	
	<div class="window" id="marathon2010">
		<h1>LA Marathon Training (2010)</h1>
		<div class="window-content">
			<img src="images/life/road.jpg">	
				<div class="overlay">
			<p>Tracking my progress training for the LA Marathon while traveling for work
				through Massachusetts, Oregon and So. Cal.</p>
			<p><a href="http://wilcoxmarathon.posterous.com">wilcoxmarathon.posterous.com</a></p>	
			</div>
		</div>
	</div>
		

		
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Vcard -->
		<div id="vcard">
			<div class="clearpx"></div>
			<!-- Header -->
			<div id="header">
				<div class="profilepicture"><img src="images/vcard/profile.jpg" alt="profile"/></div>
				<div id="logo">Chris Wilcox</div>
				<ul id="menu">
					<li class="active"><a href="#home">Home</a></li>
					<li><a href="#life">Life</a></li>
					<li><a href="#skills">Code</a></li>
					<li><a href="#work" class="biggify">Projects</a></li>
					<li><a href="#networks">Networks</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
			<!-- End Header -->
			<hr/>
			
			
			<!-- Content -->
			<div id="content">
				
				
				<!-- Scroller -->
				<div id="scroller">
					
					<!-- Menu Home -->
					<div id="menu_home" class="contentitem">
					
						<div class="main">
							<div class="pagetitle">Chris Wilcox - Welcome</div>
							<h1>Sup, G?</h1> 
							<p><img src="images/vcard/welcome.jpg" style="width:200px;float:right" />Chris Wilcox is a computer guy in <a href="http://www.flickr.com/map?&fLat=37.763&fLon=-122.3965&zl=3">San Francisco</a>. He is <em>not</em> a <a href="http://www.google.com/search?q=how+tall+is+chris+wilcox">6'10"</a> <a href="http://www.nba.com/playerfile/chris_wilcox/">Detroit Pistons power forward</a>.</p>
							<p>Chris spends <a href="http://stackoverflow.com/users/273637">inordinate amounts of time</a> <a href="http://github.com/topher515">programming in Pyt</a><a href="http://code.google.com/u/topher515/">hon and Javascript</a> and otherwise building websites. Sometimes people even pay him to do this!</p>
							<p><a class="button" href="#contact">Contact me</a></p>
							
							
						
						</div>
						
						<!-- UPDATES -->
						
						<div class="sidebar">

						</div>
						
						<!-- END UPDATES -->
						
						
					</div>
					<!-- End Menu Home -->
					
					<!-- Menu Life -->
					<div id="menu_life" class="contentitem">
						<div class="pagetitle">Chris Wilcox - My Life</div>
						<ul class="navigation" id="lifenavigation"><li>here comes menu</li></ul>
						
						

						
						<h1>Stuff + Junk</h1>
						<!-- work mask -->
						<div id="lifemask">
							<div id="lifescroller">
								<ul class="life">
									<li>
										<a href="#blognow" name="modal">
											<div class="img">
											<img src="images/life/goldengate.jpg" style="height:300px" alt="work1"/>
											</div>
											<span class="lifetitle">My Blog</span>
										</a>
									</li>
									<li>
										<a href="#tnt2011" name="modal">
											<div class="img">
											<img src="images/life/tnt.jpg" style="width:350px" alt="work1"/>
												</div>
											<span class="lifetitle">Team in Training (2011)</span>
										</a>
									</li>
									<li>
										<a href="#biketour2010" name="modal">
											<div class="img">
											<img src="images/life/highway1.jpg" style="width:350px" alt="work1"/>
												</div>
											<span class="lifetitle">Cycle Across America (2010)</span>
										</a>
									</li>
									<li>
										<a href="#marathon2010" name="modal">
											<div class="img">
											<img src="images/life/road.jpg" style="width:350px" alt="work1"/>
												</div>
											<span class="lifetitle">LA Marathon (2010)</span>
										</a>
									</li>
								
								</ul>
							</div>
						</div>
						<!-- End work mask -->
					</div>
					<!-- End menu work -->
					
					<div id="menu_skills" class="contentitem">
						<div class="pagetitle">Chris Wilcox - Skills</div>
						<div class="main">
						<h1>If this were an MMORPG, these would be my stats</h1>
							<ul class="skills">
								<li>
									<span class="topic">Python</span>
									<span class="stars">
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
									</span>
									Python scripting, Django framework
								</li>
								
								<li>
									<span class="topic">Javascript</span>
									<span class="stars">
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/stargrey.png" alt="star" width="16" height="16" />
									</span>
									jQuery, Node.js
								</li>
								<li>
									<span class="topic">Html</span>
									<span class="stars">
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/stargrey.png" alt="star" width="16" height="16" />
									</span>
									HTML 5 / xHtml
								</li>
								<li>
									<span class="topic">Css</span>
									<span class="stars">
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/star.png" alt="star" width="16" height="16" />
										<img src="images/vcard/stargrey.png" alt="star" width="16" height="16" />
									</span>
									CSS 3
								</li>
							</ul>
							
						</div>
						<div class="sidebar">
							<h2>Code like you mean it</h2>
							<ul>
								<p class="nopadding"><a href="http://www.github.com/topher515/">Fork me on Github</a>!</p>
								<p><a href="http://code.google.com/u/topher515@gmail.com/">Check out my Google Code page</a></p>
							</ul>
						</div>
					</div>
					
					<!-- Menu Work -->
					<div id="menu_work" class="contentitem">
						<div class="pagetitle">Chris Wilcox - My Work</div>
						<ul class="navigation" id="worknavigation"><li>here comes menu</li></ul>
						
						

						
						<h1>Past projects</h1>
						<!-- work mask -->
						<div id="workmask">
							<div id="workscroller">
								<ul class="work">
									<li>
										<a href="#chatsockets" name="modal" > <!-- rel="prettyPhoto" -->
											<div class="img"><img src="images/work/chatsockets.jpg" alt="work1"/></div>
											<span class="worktitle">HTML5 Websockets Chat (2011)</span>
										</a>
									</li>
									<li>
										<a href="#art" name="modal" >
											<div class="img"><img src="images/work/art.jpg" alt="work1"/></div>
											<span class="worktitle">Artist Profile (2009)</span>
										</a>
									</li>
									<li>
										<a href="#counteur" name="modal" >
											<div class="img"><img src="images/work/counteur.jpg" alt="work1"/></div>
											<span class="worktitle">counteur.com (2010)</span>
										</a>
									</li>
									<li>
										<a href="#ecommerce" name="modal" >
											<div class="img"><img src="images/work/ecommerce.jpg" alt="work1"/></div>
											<span class="worktitle">eCommerce (2011)</span>
										</a>
									</li>
									<li>
										<a href="#lightwall" name="modal" >
											<div class="img"><img src="images/work/lightwall.jpg" alt="work1"/></div>
											<span class="worktitle">LED Lightwall Driver (2011)</span>
										</a>
									</li>
									<li>
										<a href="#playground" name="modal" >
											<div class="img"><img src="images/work/playground.jpg" alt="work1"/></div>
											<span class="worktitle">Physics Playground (2006)</span>
										</a>
									</li>
									
									<li>
										<a href="#videochat" name="modal" >
											<div class="img"><img src="images/work/videochat.jpg" alt="work1"/></div>
											<span class="worktitle">Flash Video Conferencing</span>
										</a>
									</li>
		
								</ul>
							</div>
						</div>
						<!-- End work mask -->
					</div>
					<!-- End menu work -->
					

					
					<!-- Menu Networks -->
					<div id="menu_networks" class="contentitem">
						<div class="pagetitle">Chris Wilcox - Networks</div>
						<h1>Let's get social, baby...</h1>
						<ul class="networks">
							<li>
								<a href="http://www.facebook.com/chriskwilcox/" target="_blank">
									<span class="background"></span>
									<span class="content">
										<img src="images/networks/facebook.png" alt="facebook"/>
										<span class="title">
											<span class="sname">Facebook</span>
											<span class="surl"><br/>facebook.com/chriskwilcox/</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="http://www.flickr.com/photos/chriswilcox/" target="_blank">
									<span class="background"></span>
									<span class="content">
										<img src="images/networks/flickr.png" alt="flickr"/>
										<span class="title">
											<span class="sname">Flickr</span>
											<span class="surl"><br/>flickr.com/photos/chriswilcox/</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="http://www.twitter.com/chriskwilcox/" target="_blank">
									<span class="background"></span>
									<span class="content">
										<img src="images/networks/twitter.png" alt="twitter"/>
										<span class="title">
											<span class="sname">Twitter</span>
											<span class="surl"><br/>twitter.com/chriskwilcox/</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="http://iamwilcox.posterous.com" target="_blank">
									<span class="background"></span>
									<span class="content">
										<img src="images/networks/posterous.png" alt="posterous"/>
										<span class="title">
											<span class="sname">Posterous Blog</span>
											<span class="surl"><br/>iamwilcox.posterous.com</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="http://www.reddit.com/user/topher515" target="_blank">
									<span class="background"></span>
									<span class="content">
										<img src="images/networks/reddit.png" alt="reddit"/>
										<span class="title">
											<span class="sname">reddit</span>
											<span class="surl"><br/>reddit.com/user/topher515</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="http://www.youtube.com/topher515" target="_blank">
									<span class="background"></span>
									<span class="content">
										<img src="images/networks/youtube.png" alt="YouTube"/>
										<span class="title">
											<span class="sname">YouTube</span>
											<span class="surl"><br/>youtube.com/topher515</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="http://www.linkedin.com/profile/view?id=50715891" target="_blank">
									<span class="background"></span>
									<span class="content">
										<img src="images/networks/linkedin.png" alt="linkedin"/>
										<span class="title">
											<span class="sname">LinkedIn</span>
											<span class="surl"><br/>linkedin.com/profi...</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="http://www.vimeo.com/ckwilcox" target="_blank">
									<span class="background"></span>
									<span class="content">
										<img src="images/networks/vimeo.png" alt="vimeo"/>
										<span class="title">
											<span class="sname">Vimeo</span>
											<span class="surl"><br/>vimeo.com/ckwilcox</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<span class="background"></span>
									<span class="content">
										<img src="images/networks/googletalk.png" alt="gchat"/>
										<span class="title">
											<span class="sname">GChat</span>
											<span class="surl"><br/>topher515</span>
										</span>
									</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- End Menu Networks -->
					<!-- Menu Contact -->
					<div id="menu_contact" class="contentitem">
						<div class="pagetitle">Chris Wilcox - Let's chat</div>
						
						
						<div class="main contact">
							<h1>Contact</h1>

							<div id="email_form">
								<input type="text" name="name" value="name"/>
								<input type="text" name="email" value="email"/>
								<textarea name="message" rows="4" cols="4">message</textarea>
								<input type="submit" class="sendbutton sendmail" value="send"/>
							</div>
							<div id="email_send">
								<h2>Thanks for your email!</h2>
								<p>I'll get back to you as soon as possible.<br/>
								In the meanwhile check out my <a href="#networks">social network profiles</a>.
								</p>
							</div>
						</div>
							
						<div class="sidebar">
							<h2>Chris Wilcox</h2>
							<p>
							The Dogpatch<br/>
							San Francisco<br/> 
							California 94107 USA<br/><br/>
							Cell: +805 6996496<br/>
							Email: <a href="mailto:ckwilcox@gmail.com">ckwilcox@gmail.com</a><br/>
							</p>
							<hr class="spacer">
							<a class="button" href="ckwilcox.vcf">Dowload vCard</a>
						</div>
						
					</div>
					<!-- End Menu Contact -->
				
				</div>
				<!-- End Scroller -->
			</div>
			<!-- End Content -->
		</div>
		<!-- End Vcard -->
	</div>
	<!-- End Wrapper -->
	</body>
</html>