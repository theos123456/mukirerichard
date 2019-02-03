//<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var categoryLists = new Array(2);
 categoryLists["empty"] = ["Select category"]; 
 categoryLists["Computer"] = ["Laptops", "Desktops", "Softwares", "Networking" ,"Computer spare parts" ,"Computer Accessories"]; 
 categoryLists["Video & Audio device"] = ["Digital cameras", "Recorder & Microphones", "Headphone & speaker", "TV & Video" ,"Video Games & Consoles" ,"Cameras Accessories"];  
 categoryLists["Home & Office supply"]= ["Furniture", "Solar system", "Printer & Scanner" ,"Sound & Display system", "Home Appliances", "Security & Accessibility"];
 categoryLists["Fashion"]= ["Men Styles", "Women Styles", "Bags" ,"Watches"];
 categoryLists["Mobile phone & Tablets"]= ["Mobile phones", "Tablets", "Accessories"];
 categoryLists["Vehicles"]= ["Spare parts & accessories", "Rental", "Cars" ,"Bikes", "Boats & Sailing", "Heavy Duty Vehicles"];
 categoryLists["Real Estate"]= ["Apartment for sale", "Apartment for rent", "Furnished apartment" ,"Studio & Room for rent", "House for sale", "House for rent" ,"Land & Plots" ,"Offices & Stores" ,"Industrial Building"];
 categoryLists["Leisure"]= ["Sport & Fitness" ,"Travel & Tourism" ,"Musical Instruments" ,"Art & Craft" ,"Books, Films, Toys"];
 categoryLists["Jobs & Training"]= ["Training & Courses", "Job Offers"];
 
 categoryLists["Beauty & Make up"]= ["Pro Massage" ,"Hair & Hairdressing" ,"Cosmetics & Skincare" ,"Perfumes" ,"Health & Medicine" ,"Beauty Accessories"];
 //categorytLists["OTHERS"]= ["Other product, Specify in type Field"];
 
 /* 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function categoryChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = categoryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("category"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
