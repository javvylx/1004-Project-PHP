var emailregex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var lettersOnlyRegex =  /[A-Za-z]/;
var pw_test1 = /[a-z]/g;
var pw_test2 = /[A-Z]/g;
var pw_test3 = /[0-9]/g;


function validateForm() {
    var fn = document.forms["Register"]["fname"].value;
    var ln = document.forms ["Register"]["lname"].value;
    var em = document.forms["Register"]["email"].value;

    var password = document.forms["Register"]["pwd"].value;
    var cpassword = document.forms["Register"]["cpwd"].value;
    
    if (fn === null || fn === "") {
		alert("Empty Field: Please enter your first name!"); 
		return false;
	} 
	else if (lettersOnlyRegex.test(fn) === false){
		alert("Invalid first name input! Only letters are allowed. Please do not enter illegal characters & numbers!");
		return false;
	} 
	if (ln === null || ln === "") {
		alert("Empty Field: Please enter your last name!"); 
		return false;
	}
	else if (lettersOnlyRegex.test(fn) === false){
		alert("Invalid last name input! Only letters are allowed. Please do not enter illegal characters & numbers!");
		return false;
	}
	
	if (em === null || em === "") {
        alert("Empty Field: Please enter your email address!");
        return false;
	} else if (emailregex.test(em) === false){
		alert("Invalid Email Address Format! Please do not enter illegal characters & numbers!");
		return false;
    } 
	
	if (password === null || password === "") {
        alert("Empty Field: Please enter your password! ");
        return false;
	} else if (pw_test1.test(password) === false) {
        alert("Please enter a password with lowercase alphabet!");
        return false;
    } else if (pw_test2.test(password) === false) {
        alert("Please enter a password with uppercase alphabet!");
        return false;
    } else if (pw_test3.test(password) === false) {
        alert("Please enter the password with at least a number!");
        return false;
	} else if (password.value.length < 8) {
        alert("Please enter the password with at least a 8!");
        return false;
    } else if (password != cpassword) {
        alert("Password does not match! Please try again!");
        return false;
    }

}

function gotocontact(){
    alert("Redirecting to Contact Us page. Please send us a request to change your password. Thank you.");
    location.href = "../contact_us/contactus.php";
}


   // document.getElementById("register").addEventListener("click", validateForm());
//    document.getElementById("check1").addEventListener("click", show_password());
//    document.getElementById("check2").addEventListener("click", show_password());
