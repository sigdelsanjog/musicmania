<?php 
//require_once('checklogin.php');
include("connect.php");
//session_start();
 //store session data
//$_SESSION['views'];
/*retrieve session data
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=0;
*/
?>
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
<div class = "wrapper" style="height:1220px;">
	
		<?php include'menubar.php';?>
		<div style="width:100px; height:100px;margin-top:0px;color:red;margin-left:0px; border-color:red; position:absolute;right;">
		<div style="width:100px; height:100px;margin-top:-100px;color:red;margin-left:920px; border-color:red; position:absolute;right;">
				<?php 
//							if ($_SESSION['id'])
//						include'tags.php';
//						else include'reg.php';
				?>
</div>
	<div class='centre_div' style="">
			<?php include'slider.php';?>
			
<?php 

//if(!isset($_SESSION['id'])) 
//{
	include("song10view.php");
//}
//else
//{
//	include("songview.php");
//}	
?>



</div>

<div class="footer1"style="margin-botton:down;margin-top:250px;margin-left:auto;margin-right:auto;">
<?php include'footer.php';?>
</div>
</body>
</html>
