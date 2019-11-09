/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 
function validateForm() {
    var x = document.forms["signup"]["First Name"].value;
    var x1 = document.forms ["signup"]["Last Name"].value;
    var e = document.forms["signup"]["email"].value;
    var ce = document.forms["signup"]["cemail"].value;
    var fem = document.getElementById("F");
    var male = document.getElementById("M");
    var password = document.forms["signup"]["password"].value;
    var cpassword = document.forms["signup"]["cpassword"].value;
    var mobile = document.forms["signup"]["phone_num"].value;
    var cmobile = document.forms["signup"]["cphone_num"].value;
    var value = true;
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var pw_test1 = /[a-z]/g;
    var pw_test2 = /[A-Z]/g;
    var pw_test3 = /[0-9]/g;
    var phone_no = /[9|8]\d{7}$/;
    if (x === null || x === "" ) {
        alert("Name must be filled out");
        return false;
    }else if (x1 === null || x1 === "") {
        alert("Name must be filled out");
        return false;
    }
    else if (x.length < 3 && x1.length < 3) {
        alert("Name must at least be 3 characters and above");
        return false;
    } else if (e === null || e === "") {
        alert("Email must be filled out");
        return false;
    } else if (re.test(e) === false) {
        alert("Email not valid");
        return false;
    } else if (ce === null || ce === "") {
        alert("Please confirm your email address");
        return false;
    } else if (e !== ce) {
        alert("Email does not match!");
        return false;
    } else if (fem.checked === false && male.checked === false) {
        alert("Please select a gender!");
        return false;
    } else if (password === null || password === "") {
        alert("Password must be filled out");
        return false;
    } else if (pw_test1.test(password) === false) {
        alert("Please enter a password with lowercase charaters!");
        return false;
    } else if (pw_test2.test(password) === false) {
        alert("Please enter a password with uppercase charaters!");
        return false;
    } else if (pw_test3.test(password) === false) {
        alert("Please enter a password with digits!");
        return false;
    } else if (password.length() < 8) {
        alert("Please enter a password with length of at least 8 charaters!");
        return false;
    } else if (password !== cpassword) {
        alert("Password does not match!");
        return false;
    } else if (phone_no.test(mobile) === false) {
        alert("Phone number is not valid!");
        return false;
    } else if (mobile !== cmobile) {
        alert("Phone number does not match!");
        return false;
    } else if (value === true) {
        alert("Full Name :" + x + " " + x1 + " \n Email :" + e);
        return true;
    }

}
function show_password() {

    var password = document.getElementById("p");
    var cpassword = document.getElementById("cpw");
    var check1 = document.getElementById("check1");
    var check2 = document.getElementById("check2");
    if (check1.checked) {
        if (password.type === "password") {
            password.type = "text";
        } else {
            password.type = "password";

        }
    } else if (check2.checked) {
        if (cpassword.type === "password") {
            cpassword.type = "text";

        } else {
            cpassword.type = "password";
        }

    }
}




document.getElementById("submit").addEventListener("click", validateForm());
document.getElementById("check1").addEventListener("click", show_password());
document.getElementById("check2").addEventListener("click", show_password());

function show_popup(){
    document.querySelector(".bg-modal").style.display ="flex";
}
document.getElementById("condition").addEventListener("click",show_popup());

function hide_popup(){
    document.querySelector(".bg-modal").style.display ="none";
}
document.querySelector(".close").addEventListener("click",hide_popup());