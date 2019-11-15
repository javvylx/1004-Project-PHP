// Declare Regular Expression
var emailregex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var numbernletterOnlyRegex = /^[a-zA-Z0-9-#,\s]*$/;
var lettersOnlyRegex =  /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
var numbersOnlyRegex = /^[0-9]*(?:\.\d{1,2})?$/;
var yearRegex = /^(201[9]|202\d|2030)$/

function validateForm() {
	
// Declare Variables for form inputs in payment.php
    var fullname = document.forms["paymentform"]["fullname"].value;
    var email = document.forms ["paymentform"]["email"].value;
    var address = document.forms ["paymentform"]["address"].value;
	var city = document.forms["paymentform"]["city"].value;
    var state = document.forms["paymentform"]["state"].value;
	var postalcode = document.forms["paymentform"]["postalcode"].value;
	
	var cname = document.forms["paymentform"]["cname"].value;
	var ccnum = document.forms["paymentform"]["ccnum"].value;
	var expmonth = document.forms["paymentform"]["expmonth"].value;
	var expyear = document.forms["paymentform"]["expyear"].value;
	var cvvcvc = document.forms["paymentform"]["expyear"].value;

// Full Name Validation
	if (fullname === null || fullname === "") {
		alert("Empty Field: Please enter your full name!"); 
		return false;
	} 
	else if (lettersOnlyRegex.test(fullname) === false){
		alert("Invalid full name input! Only letters are allowed. Please do not enter illegal characters & numbers!");
		return false;
	} 

// Email address Validation
    if (email === null || email === "") {
        alert("Empty Field: Please enter your email address!");
        return false;
	} else if (emailregex.test(email) === false){
		alert("Invalid Email Address Format! Please do not enter illegal characters & numbers!");
		return false;
	}
	
// Address Validation	
	if (address === null || address === "") {
         alert("Empty Field: Please enter your address!");
        return false;	
	} else if (numbernletterOnlyRegex.test(address) === false){
		alert("Invalid address input! Only letters & numbers are allowed. Please do not enter illegal characters!");
		return false;
	}
	
// City Validation	
	if (city === null || city === "") {
         alert("Empty Field: Please fill up your residence city!");
        return false;	
	} else if (lettersOnlyRegex.test(city) === false){
		alert("Invalid city input! Only letters are allowed. Please do not enter illegal characters & numbers!");
		return false;
	}
	
// State Validation	
	if (state === null || state === "") {
         alert("Empty Field: Please fill up your residence state!");
        return false;
	} else if (lettersOnlyRegex.test(state) === false){
		alert("Invalid state input! Only letters are allowed. Please do not enter illegal characters & numbers!");
		return false;
	}
	
// Postal Code Validation	
	if (postalcode === null || postalcode === "") {
         alert("Empty Field: Please fill up your postal code!");
        return false;
	} else if (numbersOnlyRegex.test(postalcode) === false){
		alert("Invalid postal code input! Only numbers are allowed. Please do not enter illegal characters & letters!");
		return false;
	}
	
// Name on CC Validation		
	if (cname === null || cname === "") {
         alert("Empty Field: Please fill up the name on your credit card!");
        return false;	
	} else if (lettersOnlyRegex.test(cname) === false){
		alert("Invalid Name on Credit Card! Only letters are allowed. Please do not enter illegal characters & numbers!");
		return false;
	}
// CC number Validation
	if (ccnum === null || ccnum === "") {
         alert("Empty Field: Please fill up your credit card number!");
        return false;
	} else if (numbersOnlyRegex.test(ccnum) === false){
		alert("Invalid credit card number input! Only numbers are allowed. Please do not enter illegal characters & letters!");
		return false;
	}
	
// Exp Month Validation	
	if (expmonth === null || expmonth === "") {
         alert("Empty Field: Please fill up your credit card expiry month!");
        return false;	
	} else if (lettersOnlyRegex.test(expmonth) === false){
		alert("Invalid credit card expiry month input! Only letters are allowed. Please do not enter illegal characters & numbers!");
		return false;
	}
	
// Exp Year Validation
	if (expyear === null || expyear === "") {
         alert("Empty Field: Please fill up your credit card expiry year!");
        return false;
	} else if (yearRegex.test(cvvcvc) === false){
		alert("Invalid credit card expiry year input! Credit Cards must be valid from 2019 onwards. Please do not enter illegal characters & letters!");
		return false;
	}
	
// CVV/CVC Validation
	if (cvvcvc === null || cvvcvc === "") {
         alert("Empty Field: Please fill up your CVC or CVV!");
        return false;
	} else if (numbersOnlyRegex.test(cvvcvc) === false){
		alert("Invalid CVC or CVV input! Only numbers are allowed. Please do not enter illegal characters & letters!");
		return false;
	}
}