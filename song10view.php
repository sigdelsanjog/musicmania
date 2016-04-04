<html>
<div  class="search" style="height:70px;">		
			<form  name='search' action='mainsearch10.php' method='POST' >
				<table border="1" style="border-color:red;">
			<tr>
				<td><input  style=" color:white;width:750px; height:60px; text-align:tight; background-color:#116643;border-color:transparent; border-radius:7px;"type="text" name="search" placeholder="Enter a Music Name to Search"></td>
				
			</tr>
		</table>
			</form>
	</div>
	<?php 
include("config.php");
include("search10.php");
$query_run=mysql_query($query);
$count=mysql_num_rows($query_run);
if($count==0)
	echo "NO ITEM Found";
else
{?>
<table border="0" cellpadding="5px" style="border-background:red;margin-left:10px;">
<tr><th >TOP 10 PLAYLIST</th></tr> 
<?php

	if(!isset($_SESSION['id'])) 
	{
	while ($row=mysql_fetch_assoc($query_run))
	{?>
		<tr ><td style="color:blue; border-radius:10px;width:400px;height:40px;"><a href="login.php"><?php  echo $row['song_name']; ?></a></td><td><a href="login.php?file=<?php echo $row['path']; ?>">download</a></td><td><a href="login.php?file=<?php echo $row['lyrics']; ?>">lyrics</a></td></tr>
 	<?php }
 	}
 	else
 	{
 		while ($row=mysql_fetch_assoc($query_run))
	{?>
		<tr ><td style="color:blue; border-radius:10px;width:400px;height:40px;"><?php  echo $row['song_name']; ?></td><td><a href="downloadmusic.php?file=<?php echo $row['path']; ?>">download</a></td><td><a href="downloadmusic.php?file=<?php echo $row['lyrics']; ?>">lyrics</a></td></tr>
 	<?php
 	}	
 		
	}	
?>
</table>
<?php } ?>


</html>