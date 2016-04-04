<?php

if(isset($_POST['search']))
{
	$user_search_request=$_POST['search'];
	echo $user_search_request;
	if(!empty($user_search_request))
	{	
		$query="SELECT * FROM top10 WHERE   song_name LIKE '%".$user_search_request."%'";
	}
	else
		$query="SELECT * FROM top10 ORDER BY song_name ASC";
}
else 
	$query="SELECT * FROM top10 ORDER BY song_name ASC";
?>