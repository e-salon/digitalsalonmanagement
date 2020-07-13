
function validateform(){
    
var firstName = document.customerRegistrationForm.firstName.value; 
var lastName=document.customerRegistrationForm.lastName.value;
var mobileNumber = document.customerRegistrationForm.mobileNumber.value;
var email = document.customerRegistrationForm.email.value;
var password=document.customerRegistrationForm.password.value;  
  
if (firstName === null || firstName === "")
{  
  alert("First name can't be blank");  
  return false;  
}
else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  

