/*---------------------------------------------------------------------------------------------------
################################################
JavaScript/JQuery file for the VCard template
enabled.be
################################################
----------------------------------------------------------------------------------------------------*/

/* Set some vars
----------------------------------------------------------------------------------------------------*/
var scrollerComplete;
var activeMenu;
var activeWorkPage;
var iexplorer;
var emailValues=new Array();
	
/* On document ready perform this actions
----------------------------------------------------------------------------------------------------*/
$(document).ready(function() {
	//Fade in the vcard
	$('#vcard').fadeIn(200);
	//Launch some functions.
	setupStage();
	setupAnchor();
	setupScroller();
	setupMenu();
	setupWork();
	setupLife();
	setupNetworks();
	setupContact();
	loadCufon();
	//Check if browser resizes
	$(window).resize(function() {
  		setupStage();
	});
});

/* Setup Stage - Center div
----------------------------------------------------------------------------------------------------*/
function setupStage() {
	//Calculate the margin
	marginTop = ($(window).height()-$('#vcard').height())/2;
	//Set the margin
	$('#vcard').css('marginTop',marginTop);
}

/* Setup Anchor - Listen to a anchor change
----------------------------------------------------------------------------------------------------*/
function setupAnchor() {
	//Check if anchor is set
	$(window).bind('hashchange', function () {
		var page = '#'+window.location.hash.slice(1);
		if(page != '#') {
			//If there is a page set scroll to the page
			scrollTo(page);
        }
    });
}

/* Setup Scroller - Content scroller
----------------------------------------------------------------------------------------------------*/
function setupScroller() {
	//Make sure the scroller can't scroll if the previous animation isn't done yet.
	scrollerComplete = 1;
	//Calculate the menuitems in the scroller
	contentItems = $(".contentitem").size();
	//Check what the width is of an item
	contentItem_width = $(".contentitem").width();
	//Calculate the total width of the scroller
	scroller_width = contentItem_width*contentItems;
	//Set the width (+30 for margin)
	$("#scroller").width(scroller_width+(contentItems*30));
	//Check if we need to go to a menu item
	myFile = document.location.toString();
	//If so
	if(myFile.match('#')) {
		//Set the anchor
 		myAnchor = "#" + myFile.split('#')[1];
 		//Remove the active class in the menu
 		$("#menu").children().removeClass('active');
 		//Set the active class in the menuitem
		$("a[href="+myAnchor+"]").parent().addClass('active');
		//Scroll to the content
		scrollTo(myAnchor,1);
 	}  else {
 		//If there is no anchor in our html we set the first menuitem
 		activeMenu = $('#menu').children('li:first').children().attr("href");
 		//Scroll to the content
 		scrollTo(activeMenu,1);
 	}
	//Fade in the content
	$(".contentitem").fadeIn(700);
}

/* Setup Menu - Setup the main menu
----------------------------------------------------------------------------------------------------*/
function setupMenu() {
	//Check if there is clicked on a menu item
	$("#menu").children().click(function() {
		//Scroll to the item
		scrollTo($(this).children().attr('href'));
	});
}

/* Setup Work - Setup the work tab
----------------------------------------------------------------------------------------------------*/
function setupWork() {
	//Count work pages and add to pagination
	workpages = Math.ceil($(".work").children().size()/6);
	//Add empty li items (6/page)
	addEmpty = (workpages*6)-$(".work").children().size();
	for(i=0;i<addEmpty;i++) {
		//Add empty li item
		$(".work").append('<li></li>');
	}
	//Give every 3th item .last class
	$(".work").children('li:nth-child(3n+3)').addClass('last');
	//Empty the #worknavigation div
	$('#worknavigation').html('');
	//Set the workpages
	if(workpages>1) {
		for(i=0;i<workpages;i++) {
			if(i) {
				$('#worknavigation').append('<li>'+(i+1)+'</li>');
			} else {
				$('#worknavigation').append('<li class="active">'+(i+1)+'</li>');
			}
		}
		//Setup click listener for work pagination
		activeWorkPage = 0;
		$("#worknavigation").children().click(function() {
			//If the page isn't already active
			if(activeWorkPage != $(this).index()) {
				//Set the active workpage
				activeWorkPage = $(this).index();
				//Remove the class active
				$("#worknavigation").children().removeClass('active');
				//Add to class active to the current page
				$("#worknavigation").children(':eq('+activeWorkPage+')').addClass('active');
				//Scroll to the content
				scrollWork(activeWorkPage);
			}
		});
	}
	//Work Rollover on item
	$(".work").children().hover(
	function() {
		//Show the title / Fade the image
		$(this).children('a').children(".worktitle").animate({marginTop: -55 }, 200);
		$(this).children('a').children("img").animate({opacity: 0.5 }, 200);
	},
	function() {
		//Hide the title / Fade the image
		$(this).children('a').children(".worktitle").animate({ marginTop: 0 }, 200);
		$(this).children('a').children("img").animate({opacity: 1 }, 200);
	});
}

/* Setup Life - Setup the work tab
----------------------------------------------------------------------------------------------------*/
function setupLife() {
	//Count work pages and add to pagination
	workpages = Math.ceil($(".life").children().size()/6);
	//Add empty li items (6/page)
	addEmpty = (workpages*6)-$(".life").children().size();
	for(i=0;i<addEmpty;i++) {
		//Add empty li item
		$(".life").append('<li></li>');
	}
	//Give every 3th item .last class
	$(".life").children('li:nth-child(3n+3)').addClass('last');
	//Empty the #worknavigation div
	$('#lifenavigation').html('');
	//Set the workpages
	if(workpages>1) {
		for(i=0;i<workpages;i++) {
			if(i) {
				$('#lifenavigation').append('<li>'+(i+1)+'</li>');
			} else {
				$('#lifenavigation').append('<li class="active">'+(i+1)+'</li>');
			}
		}
		//Setup click listener for work pagination
		activeWorkPage = 0;
		$("#lifenavigation").children().click(function() {
			//If the page isn't already active
			if(activeWorkPage != $(this).index()) {
				//Set the active workpage
				activeWorkPage = $(this).index();
				//Remove the class active
				$("#lifenavigation").children().removeClass('active');
				//Add to class active to the current page
				$("#lifenavigation").children(':eq('+activeWorkPage+')').addClass('active');
				//Scroll to the content
				scrollWork(activeWorkPage);
			}
		});
	}
	//Work Rollover on item
	$(".life").children().hover(
	function() {
		//Show the title / Fade the image
		$(this).children('a').children(".lifetitle").animate({marginTop: -55 }, 200);
		$(this).children('a').children("img").animate({opacity: 0.5 }, 200);
	},
	function() {
		//Hide the title / Fade the image
		$(this).children('a').children(".lifetitle").animate({ marginTop: 0 }, 200);
		$(this).children('a').children("img").animate({opacity: 1 }, 200);
	});
}

/* Setup Networks - Setup the networks page
----------------------------------------------------------------------------------------------------*/
function setupNetworks() {

	//Give every 3th item .last class
	$(".networks").children('li:nth-child(3n+3)').addClass('last');
	
	//fix for jumping in Internet Explorer
	$(".networks").children('li').children('a').children(".content").animate({ marginLeft: 1 }, 1);
	//On rollover
	$(".networks").children('li').hover(
	function() {
		//Move the li content to the right
		$(this).children('a').children(".background").fadeIn(150);
		$(this).children('a').children(".content").animate({ marginLeft: 5 }, 150);
	},
	function() {
		//Move the li content to the left
		$(this).children('a').children(".background").fadeOut(150);
		$(this).children('a').children(".content").animate({ marginLeft: 0 }, 150);
	});
}

/* Setup Contact - Setup the contact tab
----------------------------------------------------------------------------------------------------*/
function setupContact() {
	//When the user focuses an input field
	$('input:text[name=name],input:text[name=email],textarea[name=message]').focus(function() {
		//Remove the class error if exists
    	$(this).removeClass('error');
    	//Check if there is a default value
    	if(!emailValues[$(this).attr('name')]) {
    		//Set a default value
    		emailValues[$(this).attr('name')] = $(this).val();
    		//Empty the input
    		$(this).val('');
    		//Set the color to something darker
    		$(this).css('color','#555');
    	}
    	//If there is already a default value
    	if($(this).val() == emailValues[$(this).attr('name')]) {
    		//Empty the input
    		$(this).val('');
    		//Set the color to something darker
    		$(this).css('color','#555');
    	}
    });
    //When the user exists the input field
    $('input:text[name=name],input:text[name=email],textarea[name=message]').blur(function() {
    	//If the value is empty
    	if(!$(this).val()) {
    		//Change the color to the default
    		$(this).css('color','#999');
    		//Change the value to the first value in the input field
    		$(this).val(emailValues[$(this).attr('name')]);
    	}
    });	
	//Check if a user presses the sendmail button
	$('.sendmail').click(function() {
		//Set the error to 0
		mail_error = 0;
		//Get the input values
		mail_name = $('input:text[name=name]').val();
		mail_email = $('input:text[name=email]').val();
		mail_message = $('textarea[name=message]').val();
		//Check if the name is not empty
		if(!mail_name || mail_name == emailValues['name'] || !emailValues['name']) {
			//Add the class error
			$('input:text[name=name]').addClass('error');
			mail_error = 1;
		}
		//Check if the email has an error
		if(!mail_email || mail_email == emailValues['email'] || !emailValues['email']) {
			//Add the class error
			$('input:text[name=email]').addClass('error');
			mail_error = 1;
		//Check if the email is formatted correct
		} else {
			//If not add the class error
			if ((mail_email.indexOf('@') < 0) || ((mail_email.charAt(mail_email.length-4) != '.') && (mail_email.charAt(mail_email.length-3) != '.'))) {
				$('input:text[name=email]').addClass('error');
				mail_error = 1;
			}
		}
		//Check if the message is not empty
		if(!mail_message || mail_message == emailValues['message'] || !emailValues['message']) {
			$('textarea[name=message]').addClass('error');
			mail_error = 1;
		}
		//If there is not error, send the mail
		if(!mail_error) {
			$.post("sendmail.php", { 
				name: mail_name, email: mail_email, message: mail_message 
			}, function(data) {
				//Hide the div email_form
				$("#email_form").fadeOut(200,function() {
					//Show the div email_send
					$("#email_send").fadeIn(800);
				});
   			});
   		}
	});
}

/* Scroll To - Function for main scroller
----------------------------------------------------------------------------------------------------*/
function scrollTo(href,direct) {
	//If the href given isn't equal to the activeMenu
	if(href != activeMenu) {
		//If the previous animation is done
		if(scrollerComplete) {
			//Set active menu
			activeMenu = href;
			//activate the menu in the menu div
			$("#menu").children().removeClass('active');
			$("a[href="+href+"]").parent().addClass('active');
			//Reload the cufon fonts
			loadCufon();
			//Check where to scroll to
			menuId = href.split('#');
			menuIndex = $(".contentitem[id='menu_"+menuId[1]+"']").index();
			contentItem_width = $(".contentitem").width();
			scrollToPos = -((menuIndex*contentItem_width)+(menuIndex*30));
			//Set page title
			document.title = $(".contentitem[id='menu_"+menuId[1]+"']").children('.pagetitle').text();
			//scroll to menu
			if(scrollToPos<=0) {
				scrollerComplete = 0;
				//direct scroll - no animation needed (If there is a page given on initialise
				if(direct) {
					//Set the marginLeft
					$("#scroller").css('marginLeft',scrollToPos);
					//Set the completion to 1
					scrollerComplete = 1;
				} else {
					//If the page is not loaded by IExplorer enabled fadeOut & fadein
					if(!iexplorer) {
						//Animate the opacity and move the scroller
						$("#scroller").animate({ opacity: 0.4 }, 200,function() {
							$("#scroller").animate({ marginLeft: scrollToPos }, 500,function() {
								$("#scroller").animate({ opacity: 1 }, 200,function() {
									//Set the completion to 1
									scrollerComplete = 1;	
								});					
							});
						});
					} else {
						//If we're dealing with IExplorer (6 or 7) move the scroller
						$("#scroller").animate({ marginLeft: scrollToPos }, 500,function() {
							//Set the completion to 1
							scrollerComplete = 1;
						});
					}
				}
			}
		
		}
	}
}

/* Scroll Work - Function for work scroller
----------------------------------------------------------------------------------------------------*/
function scrollWork(page) {
	//Calculate the Y position
	scrollY = -(page*200);
	//If the page is not loaded by IExplorer (6 or 7) enabled fadeOut & fadein
	if(!iexplorer) {
		//Animate the opacity and move the scroller
		$("#workscroller").animate({ opacity: 0.4 }, 200,function() {
			$("#workscroller").animate({ marginTop: scrollY }, 400, function() {
				$("#workscroller").animate({ opacity: 1 }, 200);
			});
		});
	} else {
		//If we're dealing with IExplorer (6 or 7) move the scroller
		$("#workscroller").animate({ marginTop: scrollY }, 400);
	}
}

/* Scroll Life - Function for work scroller
----------------------------------------------------------------------------------------------------*/
function scrollLife(page) {
	//Calculate the Y position
	scrollY = -(page*200);
	//If the page is not loaded by IExplorer (6 or 7) enabled fadeOut & fadein
	if(!iexplorer) {
		//Animate the opacity and move the scroller
		$("#lifescroller").animate({ opacity: 0.4 }, 200,function() {
			$("#lifescroller").animate({ marginTop: scrollY }, 400, function() {
				$("#lifescroller").animate({ opacity: 1 }, 200);
			});
		});
	} else {
		//If we're dealing with IExplorer (6 or 7) move the scroller
		$("#lifescroller").animate({ marginTop: scrollY }, 400);
	}
}

/* Load Cufon - Function for clean text
----------------------------------------------------------------------------------------------------*/
function loadCufon() {
	Cufon('.sname', 	{ textShadow: '1px 1px 2px #fff' });
	Cufon('#menu', 		{ textShadow: '1px 1px 2px #fff', hover: { color: '#555' }});
	Cufon('.worktitle', { textShadow: '1px 1px 2px #fff' });
	Cufon('.lifetitle', { textShadow: '1px 1px 2px #fff' });
	Cufon('.topic', { textShadow: '1px 1px 2px #fff' });
	Cufon('h1', 		{ textShadow: '1px 1px 2px #fff' });
	Cufon('h2', 		{ textShadow: '1px 1px 2px #fff' });	
	Cufon('h3', 		{ textShadow: '1px 1px 2px #fff' });		
}