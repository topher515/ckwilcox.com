<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--
		
		Well... this is embarrassing...
		
		
		Hello, source-viewer, please realize that most of this isn't my code. This is 
		some template I got off themeforest thinking it would make the basic design of a 
		site *at least* sort of easier. Little did I realize the shocking amount of 
		cruft that would be left over once I macheted away all the useless junk the theme
		maker left in.
		
		Anyway, don't judge me for this god-awful mess.
		
		
		-->
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

		
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Vcard -->
		<div id="vcard">
			<div class="clearpx"></div>
			<!-- Header -->
			<div id="header">
				<div id="logo">Chris Wilcox</div>
				
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
							<h1>Howdy there.</h1> 
							<p>Chris Wilcox is a computer guy in <a href="http://www.flickr.com/map?&fLat=37.763&fLon=-122.3965&zl=3">San Francisco</a>. He is <em>not</em> a <a href="http://www.google.com/search?q=how+tall+is+chris+wilcox">6'10"</a> <a href="http://www.nba.com/playerfile/chris_wilcox/">Detroit Pistons power forward</a>.</p>
							
							<h2 style="margin:25px 0 0 0;">Fork Chris:</h2>
							<a href="http://www.github.com/topher515/">Chris on Github</a>
							
							
							<h2 style="margin:25px 0 0 0;">Say hello and/or creepily stalk Chris:</h2>
							<ul class="networks">
								<li>
									<a href="http://www.facebook.com/chriskwilcox/" target="_blank">
										<span class="background"></span>
										<span class="content">
											<img src="images/networks/facebook.png" alt="facebook"/>
										</span>
									</a>
								</li>
								<li>
									<a href="http://www.twitter.com/chriskwilcox/" target="_blank">
										<span class="background"></span>
										<span class="content">
											<img src="images/networks/twitter.png" alt="twitter"/>
										</span>
									</a>
								</li>
								<li>
									<a href="http://iamwilcox.posterous.com" target="_blank">
										<span class="background"></span>
										<span class="content">
											<img src="images/networks/posterous.png" alt="posterous"/>
										</span>
									</a>
								</li>
								<li>
									<a href="http://www.linkedin.com/profile/view?id=50715891" target="_blank">
										<span class="background"></span>
										<span class="content">
											<img src="images/networks/linkedin.png" alt="linkedin"/>
										</span>
									</a>
								</li>
							</ul>
							
							
						
						</div>
						
						<!-- UPDATES -->
						
						<div class="sidebar">
<img src="images/vcard/welcome.jpg" style="width:200px;float:right" />
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
					
					<!-- Menu Work -->
					<div id="menu_work" class="contentitem">
						<div class="pagetitle">Chris Wilcox - My Work</div>
						<ul class="navigation" id="worknavigation"><li>here comes menu</li></ul>
						
						

						
						<h1>Code</h1>
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