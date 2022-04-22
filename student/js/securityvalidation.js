function securityvalidation() {
  var oldpassword = document.getElementById("oldpassword").value;

  if (oldpassword == "") {
    document.getElementById("oldpassworderror").innerHTML =
      "*Please fill out Password";
    return false;
  }
  document.getElementById("oldpassworderror").innerHTML = "";

  var newpassword = document.getElementById("newpassword").value;
  if (newpassword == "") {
    document.getElementById("newpassworderror").innerHTML =
      "*Please fill out Password";
    return false;
  }

  if (newpassword.search(/[a-z]/) < 0) {
    document.getElementById("newpassworderror").innerHTML =
      "*Your password must contain at least one letter";
    return false;
  }
  if (newpassword.search(/[0-9]/) < 0) {
    document.getElementById("newpassworderror").innerHTML =
      "*Your password must contain at least one Number";
    return false;
  }
  if (newpassword.length < 5) {
    document.getElementById("newpassworderror").innerHTML =
      "*Please,Check Password length";
    return false;
  }
  document.getElementById("newpassworderror").innerHTML = "";

  var confirmpassword = document.getElementById("confirmpassword").value;
  if (confirmpassword == "") {
    document.getElementById("confirmpassworderror").innerHTML =
      "*Please fill out Password";
    return false;
  }
  document.getElementById("confirmpassworderror").innerHTML = "";
}
