function validateForm() {
  //username
  var name = /^[a-zA-Z0-9._-\s]+$/;
  var username = document.getElementById("username").value;

  if (username == "") {
    document.getElementById("usernameerror").innerHTML =
      "*Please fill out User Name";
    return false;
  }
  if (!name.test(username)) {
    document.getElementById("usernameerror").innerHTML =
      "*This username isn't allowed.Please,take another name";
    return false;
  }
  if (username.length < 5 || username.length > 20) {
    document.getElementById("usernameerror").innerHTML =
      "*Please,Check username length";
    return false;
  }

  //password
  var password = document.getElementById("password").value;
  if (password == "") {
    document.getElementById("passworderror").innerHTML =
      "*Please fill out Password";
    return false;
  }
  if (password.search(/[a-z]/) < 0) {
    document.getElementById("passworderror").innerHTML =
      "*Your password must contain at least one letter";
    return false;
  }
  if (password.search(/[0-9]/) < 0) {
    document.getElementById("passworderror").innerHTML =
      "*Your password must contain at least one Number";
    return false;
  }
  if (password.length < 5) {
    document.getElementById("passworderror").innerHTML =
      "*Please,Check Password length";
    return false;
  }

  //___________Full Name
  var fnamecheck = /^[a-zA-Z.\s]+$/;
  var fname = document.getElementById("fname").value;

  if (fname == "" || fname.length < 5) {
    document.getElementById("fnameerror").innerHTML =
      "*Please fill up your Full Name";
    return false;
  }
  if (!fnamecheck.test(fname)) {
    document.getElementById("fnameerror").innerHTML =
      "*This username isn't allowed.Please,take another name";
    return false;
  }

  //___________email
  var emailcheck =
    /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var email = document.getElementById("email").value;

  if (email == "") {
    document.getElementById("emailerror").innerHTML = "*Please fill up E-mail..";
    return false;
  }
  if (!emailcheck.test(email)) {
    document.getElementById("emailerror").innerHTML = "*Invalid Email!!..";
    return false;
  }

  //___________gender
  if (
    document.getElementById("male").checked == false &&
    document.getElementById("female").checked == false
  ) {
    document.getElementById("gendererror").innerHTML =
      "*Please select any radio button";
    return false;
  }
  //___________Mobile Number

  var numbercheck = /^[0-9+-]+$/;
  var mobileno = document.getElementById("mobileno").value;

  if (mobileno == "") {
    document.getElementById("mobilenumbererror").innerHTML =
      "*Please fill up Mobile Number";
    return false;
  }
  if (!numbercheck.test(mobileno)) {
    document.getElementById("mobilenumbererror").innerHTML =
      "*Incorrect Mobile Number";
    return false;
  }

  //_____________Date of Birth
  var dob = document.getElementById("dob").value;
  if (dob === "") {
    document.getElementById("doberror").innerHTML =
      "*Please fill up Your Date of Birth";
    return false;
  }

  //_____________Address
  var address = document.getElementById("address").value;
  if (address == "" || address.length < 20) {
    document.getElementById("addresserror").innerHTML =
      "*Please fill up Your Address";
    return false;
  }
}
