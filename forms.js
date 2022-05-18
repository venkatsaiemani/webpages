
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

function validateForm() {
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var mobile = document.contactForm.mobile.value;
    var firstpassword = document.contactForm.firstpassword.value;
    var secondpassword = document.contactForm.secondpassword.value;

    var nameErr = emailErr = mobileErr = firstpasswordErr =secondpasswordErr = true;
    
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = true;
        }
    }
    

    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
      
        var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = true;
        }
    }

    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = true;
        }
    }
    if(firstpassword == "" ||secondpassword == ""){
        if(firstpassword == "") {
           printError("firstpasswordErr", "Please enter your password");
        }
        if(secondpassword == "") {
           printError("secondpasswordErr", "Please enter your password");
         }
   }else{
    if(firstpassword==secondpassword){
        printError("nameErr", "");
        firstpassword = true;
        secondpassword=true;
        }
        else{
            printError("secondpasswordErr", "password must be same!");
        }
   }
    if((nameErr && emailErr && mobileErr && secondpassword && firstpassword) == true) {
      
       alert("succesfully sign up");
        window.location.replace("profile.html"); 
    
    }else {
        alert("Recheck the values");
    }
};