<!DOCTYPE html>

    <head>
        <title>Customer Sign-in Form</title>
        
        <link rel="stylesheet" href="../../.css/styles.css" >
        
                
    </head>

    
    <body>
        <center>
           <div> 

                <h3 class="heading"> Welcome.Please enter your registered mobile number and password to proceed </h3>
               
                <form action="../../.php/.customer/customerAuthentication.php" method="post">
                <table>
                    <tbody>
                        <tr> <td> <b> Your registered mobile number<span><sup style="color:red">*</sup></span>: </b> </td>
                            <td> <input type="tel" name="mobileNumber" placeholder="Example 0765..." value="" required> </td> <tr> </tr>

                        <tr> <td> <b> Password<span><sup style ="color:red">*</sup></span>: </b> </td>
                            <td> <input type="Password" name="password" placeholder="Enter your password" value="" required> </td> </tr>

                        <tr> <td> <b> Confirm your details and </b> </td>
                            <td> <input type="submit" name="submit" value="Log in">  </td> </tr>

                        <tr> <td> <b> If you entered incorrect details </b> </td> 
                            <td> <input type="reset" value="Reset"> </td> </tr> 
                    </tbody>
                    </table>
           
                </form>
        
            </div>
          <p><b>Forgot your password? <a href="customerPasswordRecovery.html">Recover it here</a></b></p>
        </center>
    
     <hr>
    <center>
        <p id="footer">Unless explicitly stated otherwise,all material is copyright of &#169 2020 Msusi Technologies Co. Ltd</p>  
    </center>
    </body>
</html>
    




