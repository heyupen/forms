function myfun(){

	var ph = document.getElementById('phone').value;

	if(isNaN(ph)){
		document.getElementById('message').innerHTML="Please Fill Only Mobile Number.";
		return false;
	}

	if(ph.length<10){

		document.getElementById('message').innerHTML="Mobile Number Must Be Only 10 Digit.";
	}

	if(ph.length>10){

		document.getElementById('message').innerHTML="Mobile Number Must Be Only 10 Digit.";
	}


	var em = document.myform.email.value;

	if(em.indexOf('@')<0){

		document.getElementById('mess').innerHTML="**Invalid @ Position";
		return false;
	}


	if((em.charAt(em.length-4)!='.') && (em.charAt(em.length-4)!='.')){

		document.getElementById('mess').innerHTML="**Invalid Email";
		return false;
	}



}