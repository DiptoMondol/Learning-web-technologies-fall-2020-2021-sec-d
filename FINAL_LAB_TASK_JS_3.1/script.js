"use strict"


//alert('test');
//console.log('testing...');

//document.write('this is JS example');

//document.getElementById('head').innerHTML = 'this is js example';
//obj.innerHTML = "test";


//let student = ['alamin', '123', 'CS'];

function NameValidation()
{
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty name field ';		
	}
	else if(data.length <2){
		document.getElementById('head').innerHTML = 'Name required two words';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('head').innerHTML = 'Name is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Name is invalid';
	}
	

}


function EmailValidation()
{
	let data= document.getElementById('email').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty Name field ';		
	}
	else if(data.length <3 ){
		document.getElementById('head').innerHTML = 'Email is invalid !';	
	}
	else if( data.includes("@gmail.com")){
		document.getElementById('head').innerHTML = data;
		     }
	else if( data.includes("@yahoo.com")){
		document.getElementById('head').innerHTML = data;
		     }	
	else if( data.includes("@.edu")){
		document.getElementById('head').innerHTML = data;
		     }	          
      else{
		document.getElementById('head').innerHTML = 'Email is invalid !';
	}

}

