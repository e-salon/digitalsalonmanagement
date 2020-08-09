<!DOCTYPE html>
<html lang="en" > 
    <head>
        <title>Salon Manager's successful login</title>
        <link rel="stylesheet" href="../../.css/styles.css" > 
    </head>
    
    <body>
        <p id="home"> <a href="../../../index.php" > Home </a> </p>
        <div>
            <center>
               
     <?php
     
     include_once 'bossDatabaseConnection.php';
echo "<h3 class=\"heading\"> As a Nisuke member, you can create a"
     . " catalogue of your salon services.<br>"
     . "and manage customer bookings on the go <br><br> "

     . " If you already have a services catalogue, "
        . "<br> <a href=\"bookingsBossSide.php\" > "
        . "View and manage customers bookings </a> <br><br> " 

     ."If you have not registered your salon in our system,"
        . " kindly fill in the form below <br><br> </h3>";

$sql = "SELECT photos FROM salon WHERE "
        . "mobileNumber = '$_SESSION[bossMobileNumber]'";
$imageresult = mysqli_query($connection,$sql);

while ($rows = mysqli_fetch_assoc($imageresult)){
    $image = $rows ['photos'];
    echo " AI <img src=\"$image\" alt=\"image\" > <br> ";
}
?>
    
                <form  id="form" name="saloManagerServicesForm" action="uploadSalonInformation.php"
                  onsubmit="" method="post" >

                <table>
                    <tbody>
                        <tr> <td> <strong> Salon name <sup class="asterisk">*</sup>: </strong> </td>
                             <td> <input type="text" name="salonName" value="" required=""> </td> </tr>
                        
                        <tr> <td> <strong> Location<sup class="asterisk">*</sup>: </strong> </td> 
                              <td><select name="location" >
                                  <option value="Temeke" >Temeke</option>
                                  <option value="Kinondoni" selected="selected"> Kinondoni</option>
                                  <option value="Ubungo"> Ubungo</option>
                                  <option value="Kigamboni"> Kigamboni</option>
                                  <option value="Kawe"> Kawe</option>
                                  <option value="Mbagala"> Mbagala</option>
                                  <option value="Sinza">Sinza</option>
                                  <option value="Mwenge">Mwenge</option>
                                  <option value="Makumbusho">Makumbusho</option>
                                   </select>
                              </td> </tr> 
                         
                         <tr> <td> <strong> Services Available<sup class="asterisk">*</sup>: </strong> </td> 
                              <td><select name="services" >
                                  <option value="croteching" >crotchets</option>
                                  <option value="Weaving" selected="selected"> Weaving</option>
                                  <option value="vitunguu"> Vitunguu</option>
                                  <option value="braiding"> braids</option>
                                  <option value="yeboyebo"> yeboyebo</option>
                                  <option value="deadlocks"> deadlock</option>
                                  <option value="minyoosho">Braiding</option>
                                  <option value="steaming">Steaming</option>
                                  <option value="maji moto">Maji moto</option>
                                   </select> </td> </tr>
                    

                        <tr> <td> <strong> Extra Services <sup class="asterisk">*</sup>: </strong> </td> 
                             <td> <select name="extras">
                                    <option value="soft drinks"> Soft drinks</option>
                                    <option value="All networks vouchers"> All networks Vouchers</option>
                                    <option value="Tunauza mafuta ya nywele"> Tunauza mafuta ya nywele </option>
                                    <option value="Nail service"> Nail service</option>
                                    <option value="Off-Office service" selected="selected"> Off-Office service</option>
                                    <option value="Mobile phone charging "> Mobile phone charging service </option>
                                    <option value="Lavy sanitary pads">Lavy's very own Sanitary pads available at discount</option>
                                </select>
                            </td> </tr> 
                        
           

                        <tr> <td> <strong> Office mobile number <sup class="asterisk">*</sup>: </strong> </td>
                             <td> <input type="tel" name="mobileNumber" value="" required=""> </td> </tr>
                        
                        <tr> <td> <strong> Number of hair dressers<sup class="asterisk">*</sup>:</strong> </td>
                             <td> <input type="number" name="numberOfAttendants" value="10"> </td> </tr>
                        
                         <tr> <td> <strong> Working Hours<sup class="asterisk">*</sup>: </strong> </td>
                              <td> <input type="text" name="workingHours" value="0800-1800 hrs" required=""> </td> </tr>                        

                        <tr> <td> <b> Salon description<sup class="asterisk">*</sup>: </b> </td>
                            <td> <input type="text" name="salonDescription" maxlength="500" value=""> </td> </tr> 
                        
                        <tr> <td> <b> Some pictures <sup class="asterisk">*</sup> : </b> </td>
                             <td>  <input type="file" name="photos" required=""> </td> </tr>
                              
                         
                        <tr> <td> <strong> You are all set </strong> </td>
                             <td> <input type="submit" name="submit" value="Upload my salon information"> </td> </tr>

                              <tr> <td> <strong> Filled in incorrect details? </strong> </td>
                                  <td> <input type="reset" name="reset" value="Reset"> </td> </tr>
             
                    </tbody>
                </table> 
            </form>   
        <hr>
    <footer>
        <p id="footer">
       
             &#169; 2020 Unless explicitly expressed otherwise <br>
            all material is copyright of Msusi Technologies Co. Ltd
        </p>
        
    </footer>
        
        </center>
        </div> 
        
    
    </body>

 </html>