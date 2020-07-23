<!DOCTYPE>
<html lang="eng" > 
    <head>
        
        <link rel="stylesheet" href="../.css/styles.css" > 
    </head>
    
    <body>
        
        
     <?php

echo 'Congratulations!<br>';

echo 'You are now logged in<br>'
. 'you can now create a catalogue of your services.<br>';

echo 'If you alreaddy have a catalogue, click here to manage your customer bookings'
. '<a href="#" > My booking</a>' ;

?>
    
 <form name="saloManagerServicesForm" action="../.php/bossiInfo.php"
                  onsubmit="" method="post" >

                <table>
                    <tbody>
                        <tr> <td> <strong> Salon name <sup class="asterisk">*</sup>: </strong>> </td>
                            <td> <input type="text" name="salonName" value="" required=""> </td> </tr>

                        <tr> <td> <b> Location <sup class="asterisk">*</sup>: </b> </td> 
                            <td> <input type="text" name="lastName" value="" required=""> </td> </tr>         
           

                        <tr> <td> <b> Mobile Number <sup class="asterisk">*</sup>: </b> </td>
                            <td> <input type="tel" name="mobileNumber" value="" required=""> </td> </tr>

                        <tr> <td> <b> Email<sup class="asterisk">*</sup>: </b> </td>
                            <td> <input type="email" name="email" value=""> </td> </tr>         

                        <tr> <td> <b> Number of hair dressers:</b> </td>
                            <td> <input type="number" name="age" value=""> </td> </tr>

                        <tr> <td> <b> Password<sup class="asterisk">*</sup>: </b> </td>
                            <td> <input type="password" name="password" value="" required=""> </td> </tr>
                        
                        <tr> <td> <b>Re-Enter Password<sup class="asterisk">*</sup>: </b> </td>
                            <td> <input type="password" name="password2" value="" required=""> </td> </tr>


                
                        <tr>  <td> <b> SEX <sup class="asterisk">*</sup> : </b> </td>>  
                            <td> <input type="radio" name="male" value="" required> <b> Male </b> 
                              <input type="radio" name="female" value="" required=""> <b> Female </td> </tr>
       
                              <tr> <td> <b> Birth date <sup class="asterisk">*</sup> : </b> </td>
                                  <td>  <input type="date" name="date" value="" required=""> </td> </tr>
      

                              <tr> <td> <b> You are all set </b> </td>
                                  <td> <input type="submit" name="submit" value="Create an account"> </td> </tr>

                              <tr> <td> <strong> Filled in incorrect details? </strong>> </td>
                                  <td> <input type="reset" name="reset" value="Reset"> </td> </tr>
             
                    </tbody>
                </table> 
            </form>   
        
        
        
    </body>

 </html>