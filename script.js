function showPassword() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function register(){
    var x = document.getElementById("login");
    var y = document.getElementById("registration");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        y.style.display = "block";
    }
}

function dataValidation(){
    var lastNameValue = document.getElementById("lastName").value;
    /*var firstNameValue = document.getElementById("firstName").value;
    var midNameValue = document.getElementById("midname").value;
    var studNumValue = document.getElementById("studNum").value;
    var yearLevelValue = document.getElementById("yearLevel").value;
    var mobNumValue = document.getElementById("mobNum").value;
    var bdayValue = document.getElementById("bday").value;
    var emailValue  = document.getElementById("email").value;
    var usernameValue = document.getElementById("username").value;
    var passValue  = document.getElementById("pass").value;
    var rptPassValue  = document.getElementById("rptPass").value;
    */
    
    window.alert(lastNameValue);
}