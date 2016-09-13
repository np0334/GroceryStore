
function plus(item) 
{	
	var name=item + 'text';
   var no=document.getElementById(name).value;
   no=parseInt(no)+1;
   document.getElementById(name).value = no;
}
function minus(item) 
{
	var name=item.concat("","text");
	   var no=document.getElementById(name).value;
	   no=parseInt(no)-1;
	   if(no<=0)
		   {
		   document.getElementById(name).value = "0";
		   }
	   else
		   {
		   document.getElementById(name).value = no;
		   }
	   
}


