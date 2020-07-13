/* 
 * @author e-salon
 * GitHub @e-salon
 */
function validateform(){  
var name=document.salonManager.mobileNumber.value;  
var password=document.salonManager.password.value;  
  
if (name===null || name==="")
{  
  alert("Namba ya simu lazima ijazwe");  
  return false;  
}
else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  

