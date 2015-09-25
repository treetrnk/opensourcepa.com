<?php
	if ($_GET['page']) {
		$page = $_GET['page'];
		$pageurl = $page . '.php';
	} else {
		$page = 'home';
	}
	
	//SET NAVIGATION LINKS
	$pagels = array('about', 'services', 'resources', 'contact');
?>
<html>
<head><title>OPEN SOURCE PA | <?= ucfirst($page) ?></title>
<meta name='Open Source PA' content='Computer Simplification. Computers are confusing, but we can make them a little bit more simple. We make computers faster, safer, and more simple.'>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<!-- GOOGLE'S: FOR PAGE RESIZING FOR PHONES --> 
<meta name=viewport content="width=device-width, initial-scale=.5">
<style type="text/css">
	body {
		margin-top: 0px;
		margin-left: 0px;
		margin-right: 0px;
		margin-bottom: 0px;
		font-family: Helvetica, Trebuchet MS, sans-serif;
		font-size: 13pt;
		color: #424242;
		line-height: 25px;
	}		
	div.navbar {
		background: #424242;
		width: 100%;
		text-align: center;
		height: 50px;
		line-height: 30px;
	}
	a.navbar:active, a.navbar:link, a.navbar:visited {
		padding: 10px;
		color: #e5e5e5;
    /*font-family: Lucida Console, Monaco, monospace;*/
		font-size: 14pt;
		text-decoration: none;
    /*font-weight: bold;*/
	}
	a.navbar:hover {
		paddding: 10px;
		color: #00AEFF;
		font-size: 14pt;
		text-decoration: none;
	}
	a:active, a:link, a:visited {
		color: #005D88;
		text-decoration: underline;
	}
	a:hover {
		color: #00AEFF;
		text-decoration: underline;
	}
	a.bnavbar:active, a.bnavbar:link, a.bnavbar:visited {
		color: #e5e5e5;
		font-size: 10pt;
		text-decoration: none;
	}
	a.bnavbar:hover {
		color: #00AEFF;
		font-size: 10pt;
		text-decoration: none;
	}
	.content {
		/* border-top-width: 0px;
		border-right-width: 1px;
		border-bottom-width: 1px;
		border-left-width:1px;
		border-style:solid;
    border-color: #424242; 
    width: 950px; */
    width: 100%;
		background: #FFFFFF;
		margin: 0 auto;
	}
	.slides {
		width: 550px;
		display: none;
		padding: 0px;
		position: absolute;
	}
	.slidetxt {
		background: #424242;
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 0, .7);
		position: absolute;
		top:350px;		
		color: #FFFFFF; 
		max-width: 400px;
		font-size: 18pt;
		font-weight: bold;
		display: none;
	}
	.serviceslides {
		width: 300px;
		display: none;
		padding: 0px;
	}
	.slideswitch {
		font-size: 24pt;
		cursor: pointer;
	}
	img.active {
		display: block;
	}
	.active2 {
		display: block;
	}
	span.active {
		color: #00AEFF;
		text-shadow: 1px 1px #424242;
	}
	p {
		padding: 5px;
	}
	a span.header_grey {
		font-family: Arial Black;
		font-size: 50pt;
		text-decoration: none;
		color: #121212;
	}
	a span.header_blue {
		font-family: Arial Black;
		font-size: 50pt;
		text-decoration: none;
		color: #00AEFF;
	}
	.float {
		margin: 0 auto;
		max-width:900px;
	}
	.togglebtn {
		width: 100%;
		border-top-width: 1px;
		border-right-width: 1px;
		border-bottom-width: 1px;
		border-left-width:1px;
		border-style:solid;
		border-color: #424242;
		background: #E5E5E5;
		cursor: pointer;
		height: 35px;
		line-height: 35px;
	}
	.blue {
		color: #00AEFF;
		background: #424242;
	}
	.togglediv {
		display: none;
		width: 100%;
	}
  
  .myads {
    background: #f5f5f5;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px; /* future proofing */
    -khtml-border-radius: 10px; /* for old Konqueror browsers */  
	  border-top-width: 4px;
	  border-right-width: 4px;
	  border-bottom-width: 4px;
	  border-left-width: 4px;
	  border-style:solid;
    border-color: #cccccc; 
  }

  a.mybtn {
    background: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#bbb)); 
    background: -moz-linear-gradient(top,  #eee,  #bbb); 
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#bbbbbb');
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px; /* future proofing */
    -khtml-border-radius: 4px; /* for old Konqueror browsers */  
	  border-top-width: 1px;
	  border-right-width: 1px;
	  border-bottom-width: 1px;
	  border-left-width: 1px;
	  border-style:solid;
    border-color: #999999;
    padding: 4;
    cursor: pointer;
    text-decoration: none;
    color: #424242;
  }

  a.mybtn:hover {
    background: -webkit-gradient(linear, left top, left bottom, from(#aaa), to(#ccc)); 
    background: -moz-linear-gradient(top,  #aaa,  #ccc); 
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#aaaaaa', endColorstr='#cccccc');
  }

  td.myads img:hover {
    -webkit-box-shadow: 2px 2px 4px rgba(0,0,0,0.8);
    -moz-box-shadow: 2px 2px 4px rgba(0,0,0,0.8);
    box-shadow: 2px 2px 4px rgba(0,0,0,0.8);
    -webkit-border-radius: 150px;
    -moz-border-radius: 150px;
    border-radius: 150px;
    -webkit-transition: all 400ms linear;
    -moz-transition: all 400ms linear;
    -o-transition: all 400ms linear;
    -ms-transition: all 400ms linear;
    transition: all 400ms linear;
  }

	nav ul ul {
		display: none;
	}

	nav ul li:hover > ul {
		display: block;
	}
	
	nav ul { 
		padding: 0px 40px;
		list-style: none;
		position: relative;
		bottom: 17px;
		display: inline-table;
	}
		nav ul:after {
			content: ""; clear: both; display: block;
		}
	nav ul li {
		float: left;
	}
		nav ul li:hover {
			background: none;
		}
			nav ul li:hover a {
				color: #ffffff;
				text-decoration: none;
			}
		
		nav ul li a {
			display: block; 
			padding: 0px 50px;
			color: #ffffff; 
			background: #424242;
			text-decoration: none;
		}
	nav ul ul {
		background: #424242; 
		border-radius: 0px; 
		padding: 0;
		position: absolute; 
		top: 100%;
	}
		nav ul ul li {
			float: none; 
			border-top: 1px solid #484a52;
			border-bottom: 1px solid #333333;
			position: relative;
		}
			nav ul ul li a {
				padding: 5px 50px;
				color: #ffffff;
				background: #424242;
				text-decoration: none;
			}	
				nav ul ul li a:hover {
					color: #00aeff;
					background: #222222;
				}	
	nav ul ul ul {
		position: absolute; left: 100%; top:0;
	}
</style>
<script type="text/javascript">
	// Add a script element as a child of the body
	function downloadJSAtOnload() {
		var element = document.createElement("script");
		element.src = "//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js";
		document.body.appendChild(element);
	} // Check for browser support of event handling capability
	if (window.addEventListener)
		window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
		window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
	//https://developers.google.com/speed/docs/insights/BlockingJS

	
	// SLIDE TOGGLE DIVS
	function hidediv(d) {
		var did = '#' + d;
		$('.togglebtn').css('color', '#424242');
		$('.togglebtn').css('background-color', '#E5E5E5');
		$('.togglediv').slideUp("slow");
		$(did).slideDown("slow");
		var tid = did + 'btn';
		$(tid).css('color', '#00AEFF');
		$(tid).css('background-color', '#424242');
	}
	
	// SET DEFAULTS FOR SLIDES
	var slidenum = 0;
	var nextslide = 1;
	var timer = 0;
		
	// CYCLE IMAGES FUNCTION
	function cycleslides() {
		timer = setInterval(function() {
			if (slidenum == 6) {
				slidenum = 7;
				nextslide = 1;
				console.log("if");
			} else {
				slidenum = nextslide;
				nextslide = slidenum + 1;
				console.log("else");
				console.log(slidenum);
				console.log(nextslide);
			}
			
			$("#slide" + slidenum).fadeOut("slow");
			$("#sltxt" + slidenum).fadeOut("slow");
			$("#bull" + slidenum).removeClass("active");
			console.log(slidenum);
			$("#slide" + nextslide).fadeIn("slow");
			$("#sltxt" + nextslide).fadeIn("slow");
			$("#bull" + nextslide).addClass("active");
			return slidenum;
		}, 5000);
	}
	
	
	// SWITCH SLIDE ON CLICK
	function clickSlide(n) {
		$("#slide" + nextslide).fadeOut();
		$("#sltxt" + nextslide).fadeOut("slow");
		$("#bull" + nextslide).removeClass("active");
		
		slidenum = n-1;
		nextslide = n;
		
		$("#slide" + nextslide).fadeIn();
		$("#sltxt" + nextslide).fadeIn("slow");
		$("#bull" + nextslide).addClass("active");
		clearInterval(timer);
		cycleslides();
	}
	
	
	// WHEN PAGE IS LOADED (NO JQUERY TILL AFTER (BECAUSE GOOGLE SAYS SO))
	var tid = setInterval( function () {
    if ( document.readyState !== 'complete' ) return;
    clearInterval( tid );      
    
    // ACTION
    $(function() {			
			cycleslides();
		});
		
	}, 1000 );
	
</script>
</head>
<body bgcolor=#424242>
	<br />
	<a name='top'></a><center><!---<a href='http://opensourcepa.com' ><span class='header_grey'>OPEN</span><span class='header_blue'>SOURCE</span><span class='header_grey'>PA</span>---><a href='http://opensourcepa.com' ><img src='images/logo_drk.png' style='max-width: 588px;' /></a><br /></center>
	<br />
	<div class='navbar'>  <!-- TOP NAVIGATION LINKS -->
  <!-- Guide on Drop Down: http://line25.com/tutorials/how-to-create-a-pure-css-dropdown-menu -->
  <nav>
	<ul>
		<li><a href="http://opensourcepa.com" class='navbar'>HOME</a></li>
		<li><a href="?page=about" class='navbar'>ABOUT</a></li>
		<li><a href="?page=services" class='navbar'>SERVICES</a>
			<ul>
				<li><a href="?page=services">Refurbish</a></li>
				<li><a href="?page=services&tab=simplify">Simplify</a></li>
				<li><a href="?page=services&tab=solve">Solve</a></li>
			</ul>
		</li>
		<li><a href="?page=resources" class='navbar'>RESOURCES</a>
			<ul>
				<li><a href="?page=resources">Distributions</a></li>
				<li><a href="?page=resources&tab=tutorials">Tutorials</a></li>
				<li><a href="?page=resources&tab=links">Other Links</a></li>
			</ul>
		</li>
		<li><a href="?page=contact" class='navbar'>CONTACT</a></li>
	</ul>
	</nav>
	</div>
	<div class='content'>
		<?php 
		if ($page != 'home') { 
			include($pageurl);
		}else { ?>
			
			<div style="width: 100%; background: -webkit-gradient(linear, left top, left bottom, from(#0cf), to(#0ad)); background: -moz-linear-gradient(top,  #0cf,  #0ad); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#AAE4FF', endColorstr='#5CCBFF');">
				<div style="max-width: 800px; height: 300px; margin: 0 auto;">
					<table width=100% border=0>
						<tr>
							<td width=50%>
								<br />
								<br />
								<a href='?page=about'><img src="images/tuxpc.png" width="300" /></a>
							</td>
							<td width=50%> 
                <h2>Computers made simple!</h2>
                <span style="font-size: 18pt;">
                  We use Linux, an open source operating system, to make computers faster, virus free, and more secure.
                </span> <br />
                <a href='?page=about' style='float: right;' class='mybtn'>More about Linux</a>
							</td>
						</tr>
					</table>
					
					<!--- <img src="images/desk_empty.png" class="slides active" id="slide1" />
					<img src="images/desk_youtube.png" class="slides" id="slide2" />
					<img src="images/desk_calc.png" class="slides" id="slide3" />
					<img src="images/desk_libre.png" class="slides" id="slide4" />
					<img src="images/desk_steam.png" class="slides" id="slide5" />
					<img src="images/desk_menu.png" class="slides" id="slide6" />
					<img src="images/desk_writer.png" class="slides" id="slide7" />
					<span class="slidetxt active2" id="sltxt1"  style="top: 300px;">&nbsp;&nbsp;A clean, user-friendly&nbsp;&nbsp;<br/>&nbsp;&nbsp;experience</span>
					<span class="slidetxt" id="sltxt2" style="top: 330px;">&nbsp;&nbsp;Browse all of your&nbsp;&nbsp;<br/>&nbsp;&nbsp;favorite sites&nbsp;&nbsp;</span>
					<span class="slidetxt" id="sltxt3">&nbsp;&nbsp;The programs needed to&nbsp;&nbsp;<br/>&nbsp;&nbsp;get back to work&nbsp;&nbsp;</span>
					<span class="slidetxt" id="sltxt4" style="top: 300px;">&nbsp;&nbsp;A fully functional&nbsp;&nbsp;<br/>&nbsp;&nbsp;office suite</span>
					<span class="slidetxt" id="sltxt5">&nbsp;&nbsp;New games&nbsp;&nbsp;<br/>&nbsp;&nbsp;added daily&nbsp;&nbsp;</span>
					<span class="slidetxt" id="sltxt6" style="top: 200px;">&nbsp;&nbsp;Infinitely Customizable&nbsp;&nbsp;</span>
					<span class="slidetxt" id="sltxt7">&nbsp;&nbsp;Compatible with many of&nbsp;&nbsp;<br/>&nbsp;&nbsp;the programs you're used to&nbsp;&nbsp;</span> --->
				</div>
			</div> 
			<!--- <center>
				<span class="slideswitch active" id="bull1" onClick="clickSlide(1)">&nbsp;&nbsp;&bull;&nbsp;&nbsp;</span>
				<? /* for ( $i = 2; $i <= 7; $i ++ ) { echo '<span class="slideswitch" id="bull' . $i . '" onClick="clickSlide(' . $i . ')">&nbsp;&nbsp;&bull;&nbsp;&nbsp;</span>'; } */ ?>
			</center> --->
			<br /><br />
			<div class='float'>
				<!--HOME CONTENT-->

        <table cellspacing='10' cellpadding='10' width=100% border=0>
					<tr>
						<td width=33% valign="top" class='myads'>
							<center><a href="?page=services&tab=refurbish">
								<img src="images/refurbish-icon.png" width="150" /> <br />
								<h3>We Refurbish</h3>
							</a></center>
							Need a budget computer that is eco-friendly? Looking for a place to get rid of your old computer in a "green" way? We work directly with <a href="http://www.ecoyork.com/computer-recycling" target="_blank">Eco York</a> to recycle/refurbish computers and keep them out of the landfill.
              <a href='?page=services&tab=refurbish' style='float: right;' class='mybtn'>Learn more</a>
						</td>
						<td width=33% valign="top" class='myads'>
							<center><a href="?page=services&tab=simplify">
								<img src="images/simplify-icon.png" width="150"  /> <br />
								<h3>We Simplify</h3>
							</a></center>
							We can renew your current computer by installing a new operating system on it. Whether your computer is old and slow or you just want a modern and easy look and feel on your computer, we can do it.
              <a href='?page=services&tab=simplify' style='float: right;' class='mybtn'>Learn more</a>
						</td>
						<td width=33% valign="top" class='myads'>
							<center><a href="?page=services&tab=solve">
								<img src="images/solve-icon.png" width="150"  /> <br />
								<h3>We Solve</h3>
							</a></center>
							Anything from Linux support to computer repair to cost effective business solutions, we can help you out!
              <a href='?page=services&tab=solve' style='float: right;' class='mybtn'>Learn more</a>
						</td>
					</tr>
				</table>
			

			</div>
		<?php } ?>
		<br />
		<br />
		<br />
  </div>
  <br />
  <div style="max-width: 900px;margin: 0 auto;">
    <table width=100% border='0'>
      <tr>
        <td width=50% valign='top' align='left'>
          <span style='color:#e5e5e5;font-weight:bold;'><a href='?page=sitemap' class='bnavbar'>SITE MAP</a></span><br />
		      <ul style='color: #121212;'><li><a href='http://opensourcepa.com' class='bnavbar'>HOME</a></li> 
		      <?php foreach ( $pagels as $i ) { echo "<li><a href='http://opensourcepa.com/?page=" . $i . "' class='bnavbar'>" . strtoupper($i) . "</a></li>"; } ?>
        </ul>
        </td>
        <td width=50% valign='top' align='right'>
          <span style='color: #e5e5e5;font-weight:bold;font-size:10pt;'>Contact:</span><br />
          <a href="mailto:opensourcepa@gmail.com" class='bnavbar'>opensourcepa@gmail.com</a><br />
          <span style='color: #e5e5e5;font-size:10pt;'>York County, PA <br />
          17304</span><br />
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
