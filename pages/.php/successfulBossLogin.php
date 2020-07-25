<!DOCTYPE html>
<html lang="en" > 
    <head>
        <title>Salon Manager's successful login</title>
        <link rel="stylesheet" href="../.css/styles.css" > 
    </head>
    
    <body>
        <div>
            <center>
               
     <?php

echo 'Congratulations!<br>';

echo 'You are now logged in<br>'
. 'You can now create a catalogue of your services.<br>';

echo 'If you alreaddy have a catalogue, click here to manage your customer bookings'
. '<a href="#" > My booking </a> <br><br>' ;

?>
    
                <form name="saloManagerServicesForm" action="../.php/uploadSalonInformation.php"
                  onsubmit="" method="post" >

                <table>
                    <tbody>
                        <tr> <td> <strong> Salon name <sup class="asterisk">*</sup>: </strong> </td>
                            <td> <input type="text" name="salonName" value="" required=""> </td> </tr>
                        
                         <tr> <td> <b> Location: </b> </td> 
                               <td><select name="location" >
                                  <option value="temeke" >Temeke</option>
                                  <option value="kinondoni" selected="selected"> Kinondoni</option>
                                  <option value="ubungo"> Ubungo</option>
                                  <option value="kigamboni"> Kigamboni</option>
                                  <option value="kawe"> Kawe</option>
                                  <option value="mbagala"> Mbagala</option>
                                  <option value="sinza">Sinza</option>
                                  <option value="mwenge">Mwenge</option>
                                  <option value="makumbusho">Makumbusho</option>
                                   </select> </td> </tr> 
                         
                          <tr> <td> <b> Services Available: </b> </td> 
                              <td><select name="services" size="1" multiple="multiple">
                                  <option value="croteching" >crotchets</option>
                                  <option value="Weaving" selected="selected"> Weaving</option>
                                  <option value="vitunguu"> Vitunguu</option>
                                  <option value="braiding"> braids</option>
                                  <option value="yeboyebo"> yeboyebo</option>
                                  <option value="deadlocks"> deadlock</option>
                                  <option value="Business person">Business person</option>
                                  <option value="Accountant">Accountant</option>
                                  <option value="Driver">Driver</option>
                                   </select> </td> </tr>
                    

                        <tr> <td> <strong> Extra services <sup class="asterisk">*</sup>: </strong> </td> 
                            <td> <input type="text" name="extras" value="" required=""> </td> </tr> 
                        
           

                        <tr> <td> <strong> Contact Mobile Number <sup class="asterisk">*</sup>: </strong> </td>
                            <td> <input type="tel" name="mobileNumber" value="" required=""> </td> </tr>
                        
                        <tr> <td> <b> Number of hair dressers:</b> </td>
                            <td> <input type="number" name="numberOfAttendants" value="10"> </td> </tr>
                        
                         <tr> <td> <strong> Working Hours<sup class="asterisk">*</sup>: </strong> </td>
                            <td> <input type="text" name="workingHours" value="0800-1800 hrs" required=""> </td> </tr>                        

                        <tr> <td> <b> Email<sup class="asterisk">*</sup>: </b> </td>
                            <td> <input type="email" name="gender" value=""> </td> </tr>                 
                         
                          <tr>  <td> <strong> SEX <sup class="asterisk">*</sup> : </strong> </td> 
                            <td> <input type="radio" name="gender" value="male" > <b> Male </b> 
                              <input type="radio" name="gender" value="female" > <b> Female </td> </tr>
       
                              <tr> <td> <b> Birth date <sup class="asterisk">*</sup> : </b> </td>
                                  <td>  <input type="date" name="date" value="" required=""> </td> </tr>
      

                              <tr> <td> <b> You are all set </b> </td>
                                  <td> <input type="submit" name="submit" value="Upload my salon information"> </td> </tr>

                              <tr> <td> <strong> Filled in incorrect details? </strong> </td>
                                  <td> <input type="reset" name="reset" value="Reset"> </td> </tr>
             
                    </tbody>
                </table> 
            </form>   
        <hr>
    <footer>
        <p id="footer">
       
            Unless explicitly expressed otherwise <br>
            all material is copyright of &#169; 2020 Msusi Technologies Co. Ltd
        </p>
        
    </footer>
        
        </center>
        </div> 
        
    
    </body>

 </html>