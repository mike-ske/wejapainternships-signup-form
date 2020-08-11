//text validate

var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var email = document.getElementById("email");
var dob = document.getElementById("dob");
var color = document.getElementById("color");
var male = document.getElementById("male");
var fmale = document.getElementById("fmale");
var depart = document.getElementById("depart");

//error messages
var errormessage = document.getElementById("errormessage");
var errormessage2 = document.getElementById("errormessage2");
var errormessage3 = document.getElementById("errormessage3");
var errormessage4 = document.getElementById("errormessage4");
var errormessage5 = document.getElementById("errormessage5");




//password validate
var message = document.getElementById("message");
var pass = document.getElementById("pass");
var psw = document.getElementById("pass").value;
var form = document.getElementById("form");
// //when the user clicks on the input field

function loadform() {
    message.style.display="none";
    errormessage.style.display="none";
    errormessage2.style.display="none";
    errormessage3.style.display="none";
    errormessage4.style.display="none";
    errormessage5.style.display="none";
}


//validating the password 
    var uppercase = /[A-Z]/g;
    var lowercase = /[a-z]/g;
    var number = /[0-8]/;
    var chars = /^\w+$/;

//   pass.onfocus = function () {
//       message.style.display = "block";
      
//   } 
  
  pass.onblur = function () {
      message.style.display = "none";
      errormessage.style.display="none";
  } 

  //validating form fields
function validate() {
   if (fname.value.length < 2) {
       fname.style.border = "1px solid red";
       errormessage.style.display = "block";
       fname.focus();
        return false;
   }else{ fname.style.border = "1px solid green";
        errormessage.style.display = "none";
        }
       


   if (lname.value.length < 2) {
       lname.style.border = "1px solid red";
       errormessage2.style.display = "block";
       lname.focus();
        return false;
   }else{ lname.style.border = "1px solid green";
        errormessage2.style.display = "none";
        }

   if (email.value.length < 9) {
       email.style.border = "1px solid red";
       errormessage3.style.display = "block";
       email.focus();
        return false;
   }else{ email.style.border = "1px solid green";
        errormessage3.style.display = "none";
        }

   if (dob.value == "") {
       dob.style.border = "1px solid red";
       errormessage4.style.display = "block";
       dob.focus();
        return false;
   }else{ dob.style.border = "1px solid green";
        errormessage4.style.display = "none";
        }

   if (color.value == "#000000") {
       color.style.border = "1px solid red";
       color.focus();
        return false;
   }else{ color.style.border = "1px solid green";}

   if (male.value == "") {
       male.style.border = "1px solid red";
       male.focus();
        return false;
   }else{ male.style.border = "1px solid green"; }

   if (fmale.value == "") {
       fmale.style.border = "1px solid red";
       fmale.focus();
        return false;
   }else{ fmale.style.border = "1px solid green";}
        
   if (depart.value >= 20) {
       depart.style.border = "1px solid red";
       errormessage5.style.display = "block";
       depart.focus();
        return false;
   }else{ depart.style.border = "1px solid green";
        errormessage.style.display = "none";
        }

   if (pass.value.length < 5) {
       pass.style.border = "1px solid red";
       message.style.display="block";
       pass.focus();
       return false;
   }
   

   if (pass.value.match(uppercase) ) {
       pass.style.border = "1px solid red";
       message.style.display="block";
       pass.focus();
       return false;
        }
        
        if (pass.value.match(number)) {
        depart.style.border = "1px solid green";
        errormessage.style.display = "none";
       return true;
        }

        if (pass.value.match(lowercase)) {
        depart.style.border = "1px solid green";
        errormessage.style.display = "none";
        return true;
        }

        if (pass.value.match(char)) {
        depart.style.border = "1px solid green";
        errormessage.style.display = "none";
        return true;
        }

        if (pass.value <= 8) {
        depart.style.border = "1px solid green";
        errormessage.style.display = "none";
        return true;
        }
}