function sel()
{
	var name=document.getElementById("table_name").value;
	if(name=="fresh_prod")
	{
		var html=['<option value="fruit">Fruits</option>',
				'<option value="veggie">Vegetables</option>'].join();
		document.getElementById("sel1").innerHTML=html;
	}
	else if(name=="bakery")
	{
		var html=['<option value="bread">Bread</option>',
		  		'<option value="biscuits">Biscuits</option>',
		  		'<option value="toast">Toast</option>',
		  		'<option value="baked">Baked</option>'].join();
  		document.getElementById("sel1").innerHTML=html;
	}
	else if(name=="freezer")
	{
		var html=['<option value="veggies">Frozen Veggies</option>',
		          '<option value="yoghurt">Frozen Yoghurt</option>',
		          '<option value="icecream">Ice Tubes</option>',
		          '<option value="desert">Desert</option>'].join();
		document.getElementById("sel1").innerHTML=html;
	
	}
	else if(name=="pantry")
	{
		var html=[ '<option value="oil">Oil/Ghee</option>',
		           '<option value="spices">Herbs and Spices</option>',
		           '<option value="addons">Add ons</option>',
		           '<option value="sauces">Sauces</option>',
		            '<option value="masala">Masala</option>',
		           '<option value="rice">Rice</option>',
		           '<option value="pickles">Pickles</option>',
		           '<option value="pulses">Pulses</option>'].join();
		document.getElementById("sel1").innerHTML=html;
	}
	else if(name=="readytomake")
	{
		var html=[ '<option value="southindian">South Indian</option>',
		           '<option value="punjabi">Punjabi</option>',
		           '<option value="desert">Desert</option>'].join();
		document.getElementById("sel1").innerHTML=html;
	}
	else if(name=="Snacks and Drinks")
	{
		var html=[ '<option value="breakfast">Breakfast</option>',
		           '<option value="friedproducts">Fried Products</option>',
		           '<option value="drinks">Drinks</option>',
		           '<option value="nuts">Rice</option>'].join();
		document.getElementById("sel1").innerHTML=html;
	}
	else if(name=="beauty")
	{
		var html=['<option value="soap">Soap</option>',
		  '<option value="ladyproducts">Feminine Health and Beauty</option>',
		  '<option value="hair">Hair</option>',
		  '<option value="bathroom">Bathroom</option>'].join();
		document.getElementById("sel1").innerHTML=html;
	}
	else if(name=="enterandhome")
	{
		var html=[  '<option value="temple">Mandir</option>',
		            '<option value="kitchen">Kitchen Utensils</option>',
		            '<option value="movies">Movies DVDs</option>',
		            '<option value="music">Music DVDs</option>'].join();
				document.getElementById("sel1").innerHTML=html;
	}
	else
	{
		document.getElementById("sel1").innerHTML="error";
	}
}


