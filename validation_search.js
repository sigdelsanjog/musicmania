
function validate_search(val)
		 {
		   if(val=="")
		   {
		     document.getElementById('search_valid').style.display="inline";
			 document.getElementById('search_valid').style.color="#f00";
			 document.getElementById('search_valid').innerHTML="invalid";//<img src=\"download1.png\"  style\"width:30px; height:30px;\"/>";
			 return false;
		   }
		    else if(isAlpha(val)==false)
			{
					document.getElementById('search_valid').style.display="inline";
			 document.getElementById('search_valid').style.color="#f00";
		 document.getElementById('search_valid').innerHTML="invalid";//<img src=\download1.png\"  style\"width:30px; height:30px;\"/>";
					return false;
		}
		   
		   else
		   {
		   document.getElementById('search_valid').style.display="inline";
		   document.getElementById('search_valid').style.color="#0f0";
document.getElementById('search_valid').innerHTML="valid";//<img src=\"images/decor/download.png\"  style\"width:30px; height:30px;\"/>";
	           return true;
		  }
		  
		  
		 
}

function isAlpha(argvalue) {
  argvalue = argvalue.toString();
  var validChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for (var n = 0; n < argvalue.length; n++) {
        if (validChars.indexOf(argvalue.substring(n, n+1)) == -1)
         return false;
    }
  return true;
}


function search()
{

			var srch= document.getElementById("src").value;
			
			
			
			if(srch=="" )
			{
			alert('fill up ');
			}
			
			else
			{
			alert('sucess');
			}
			
}