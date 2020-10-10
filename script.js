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

function validateAll(){
    if (dataValidation){
        document.form.submit();
    }
}

function setErrorFor(input, message){
    var formControl = input.parentElement;
    var small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input){
    var formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function dataValidation(){
    var lastNameValue = document.getElementById("lastName").value;
    var firstNameValue = document.getElementById("firstName").value;
    var midNameValue = document.getElementById("midName").value;
    var studNumValue = document.getElementById("studNum").value;
    var yearLevelValue = document.getElementById("yearLevel").value;
    var mobNumValue = document.getElementById("mobNum").value;
    var bdayValue = document.getElementById("bday").value;
    var emailValue  = document.getElementById("email").value;
    var usernameValue = document.getElementById("username").value;
    var passValue  = document.getElementById("pass").value;
    var rptPassValue  = document.getElementById("rptPass").value;
    
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
    
    //Last Name
    if (lastNameValue == ""){
        setErrorFor(lastName, 'Last Name cannot be blank');
        return false;
    } else {
        setSuccessFor(lastName);
    }
    if (letters.test(lastNameValue)){
        setSuccessFor(lastName);
    } else {
        setErrorFor(lastName, 'Alphabets Only');
        return false;
    }
    
    //First Name
    if (firstNameValue == ""){
        setErrorFor(firstName, 'First Name cannot be blank');
        return false;
    } else {
        setSuccessFor(firstName);
    }
    if (letters.test(firstNameValue)){
        setSuccessFor(firstName);
    } else {
        setErrorFor(firstName, 'Alphabets Only');
        return false;
    }
    
    //Middle Initial
    if (letters.test(midNameValue) || midNameValue==""){
        setSuccessFor(midName);
    } else {
        setErrorFor(midName, 'Alphabets Only');
        return false;
    }
    
    //Student Number
    if (numbers.test(studNumValue)){
        setSuccessFor(studNum);
    } else {
        setErrorFor(studNum, 'Numeric Characters Only');
        return false;
    }
    
    
    var testing = Number(document.getElementById("bday"));
    //Birth Date
    if (bdayValue >= 2002-10-10){
        setErrorFor(bday, 'Legal Age Only');
        return false;
        
    } else {
        setSuccessFor(bday);
    }
    
    
    alert(testing);
    
    //Mobile Number
    if (numbers.test(mobNumValue)){
        setSuccessFor(mobNum);
    } else {
        setErrorFor(mobNum, 'Numeric Characters Only');
        return false;
    }
    
    
    
}