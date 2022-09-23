
//alert("test");

function myvalidate() {

//	let f = false;

	let name = $(".fname").val();
	let pattern = /^([a-zA-Z]{0,10})$/;

	if (name=="" || name=="undefine") {

		$(".msg1")
		.html("**First neme is required**");

		f = false;

	}else if(pattern.test(name)==false){

		$(".msg1")
		.html("**First neme is invalid**");

		f = false;

	}else{

		$(".msg1")
		.html("OK")
		.removeClass("text-danger")
		.addClass("text-success");

		f = true;

	}



	let lname = $(".lname").val();
	let pattern1 = /^([a-zA-Z]{0,10})$/;

	if (lname=="" || lname=="undefine") {

		$(".msg2")
		.html("**Last neme is required**");

		f = false;

	}else if(pattern1.test(lname)==false){

		$(".msg2")
		.html("**Last neme is invalid**");

		f = false;

	}else{

		$(".msg2")
		.html("OK")
		.removeClass("text-danger")
		.addClass("text-success");

		f = true;

	}


	let email = $(".emails").val();
	let pattern2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if (email=="" || email=="undefine") {

		$(".msg3")
		.html("**Email is required**");

		f = false;

	}else if(pattern2.test(email)==false){

		$(".msg3")
		.html("**Email is invalid**");

		f = false;

	}else{

		$(".msg3")
		.html("OK")
		.removeClass("text-danger")
		.addClass("text-success");

		f = true;

	}


	let ph = $(".phones").val();
	let pattern3 = /^[7-9]{1}[0-9]{9}$/;

	if (ph=="" || ph=="undefine") {

		$(".msg4")
		.html("**Phone number is required**");

		f = false;

	}else if(pattern3.test(ph)==false){

		$(".msg4")
		.html("**Phone number is invalid**");

		f = false;

	}else{

		$(".msg4")
		.html("OK")
		.removeClass("text-danger")
		.addClass("text-success");

		f = true;

	}
	

	return f;
}	