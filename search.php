


<?php

if(isset($_POST['search']))
{
	//$name=$_POST['Choose'];
	$user_search_request=$_POST['search'];
	echo $user_search_request;
	if(!empty($user_search_request))
	{	
		$query="SELECT * FROM song WHERE  song_name LIKE '%".$user_search_request."%'";
	}
	else
		$query="SELECT * FROM song ORDER BY song_name ASC";
}
else 
	$query="SELECT * FROM song ORDER BY song_name ASC";
?>