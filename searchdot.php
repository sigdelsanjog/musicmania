<?php

if(isset($_POST['searchdot']))
{
	//$name=$_POST['Choose'];
	$user_search_request=$_POST['searchdot'];
	//echo $user_search_request;
	$name=substr('$user_search_request',0,1);
	echo $name;
	if(!empty($user_search_request))
	{	
		$query="SELECT * FROM song WHERE  song_name LIKE '%".$name."%'";
	}
	else
		$query="SELECT * FROM song ORDER BY song_name ASC";
}
else 
	$query="SELECT * FROM song ORDER BY song_name ASC";
?>