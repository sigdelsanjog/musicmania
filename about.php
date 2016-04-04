<?php session_start(); ?>
<html>
<head>
<title>MusicMania</title>
<link type="text/css" rel="stylesheet" href="style_sheet/style.css"></link>
<link type="text/css" rel="stylesheet" href="css/generic.css"></link>
<link href="style_sheet/style1.css" rel="stylesheet" type="text/css"></link>
<script src="themes/1/js-image-slider.js" type="text/javascript"></script>
<link href="themes/7/js-image-slider.css" rel="stylesheet" type="text/css"/>
<link href="css/generic1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div class = "wrapper" style="height:600px;">
		<?php include'menubar.php';?>
    <div id="footer">
        <ul class="footer_menu" style="text-font:30px;">
			<li><a href="about.php">MUSIKMANIA</a></li>
			<li><a href='aboutus.php' target="_parent">AboutUs</a></li>
		</ul>
	</div>
	<div style="float:right;margin-right:200px; position:relative; padding:20px; text-font:30px;width:700px;color:black;height:auto;"><p>MUSIKMANIA ,its another music downloading site.This ia a semester project performed by the II year I semester students  of Department of Computer Science and Engineering,Kathmandu University.This project is supervised by Instructor <a href="http://ku.edu.np/cse/faculty/prabingautam">Mr. Prabin Gautam </a> and co-ordinated by project co-ordinator <a href="http://ku.edu.np/cse/faculty/sushil/">Mr. Sushil Nepal</a>. This project is an approach of letting the users freely download the music and listen to it.</p>
	<p><ul><li>First the user should register an account,<br>get a username and password.</li>
	<li>Then the user needs to sign in</li>
	</ul></p></div>
<div class="footer1"style="margin-top:480px;margin-botton:0px;margin-right:auto;margin-left:0px;">
<?php include'footer.php';?>
</div>

</div>
