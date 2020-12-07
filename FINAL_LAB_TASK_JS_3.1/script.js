"use strict"


//alert('test');
//console.log('testing...');

//document.write('this is JS example');

//document.getElementById('head').innerHTML = 'this is js example';
//obj.innerHTML = "test";


let student = ['alamin', '123', 'CS'];

function f1()
{
	var name = document.getElementById("Name").value;

   if (name == "")
   {  
      alert("Please enter name first");
      return false;
   }
   else if((name.charAt(0) <= 'a' || name.charAt(0) >= 'z') && (name.charAt(0) <= 'A' || name.charAt(0) >= 'Z'))
	{
		alert("Name must start with a letter");
		return false;
	}
	else if(name.split(" ").length<2)
	{
		alert("Name must contain at least two words");
		return false;
	}
	else
	{ 
		return true;
	}

}
}