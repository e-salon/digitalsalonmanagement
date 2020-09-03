<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Digital Salon:Homepage </title>
        <link rel="stylesheet" href="pages/.css/styles.css" >
    </head>
    <body>
    <center>
        <?php
        
        echo '<h1 class = "heading"> Welcome to Nisuke <br> a digital salon management system <br> '
        . ' Transforming the salon experience, one salon at a time </h1>';    
         ?>
        <div class="row">         
             
            
            <div class="column">
                
                <h2>Are you customer?<br>Arranging appointments with your favourite <br>
                    hairdresser has been made easier<br>
                    <a href="pages/.html/.customer/customerRegistration.html">Click here to book a service at your favorite salon</a> </h2>
        <br>
            </div>
            
            <div class="column">
                <h2>Are you a salon owner/manager? <br> For the first time in Tanzania,
                    <br> managing customers' bookings <br> to your salon is a piece of cake<br>
                    <a href="pages/.html/.boss/bossRegistration.html">Click here to manage your bookings</a></h2>
            </div>       
       
        
        </div>
       
        <table class="mawasiliano"> <caption> <h3> Encountered a problem? Let us know </h3> </caption>
            <tbody>
                <tr> <td> <a href= " tel:+255 629 831 936 " > Tupigie </a> </td> 
                    <td> <a href="https://api.whatsapp.com/send?phone=255629831936">
                            <strong>Wasiliana nasi kirahisi zaidi kwa WhatsApp</strong> </a> </td></tr> 
            <tr> <td><a href="sms:+255 629 831 936 ">
                                <strong>Tutumie SMS sasa </strong> </a> </td>
                                <td> <a href= " mailto:karibu@kunonu.tech " > 
                                        <strong> Tutumie barua pepe </strong> </a> </td></tr> 
            <tr> <td colspan="2" > <strong> Tutembelee </strong> <br>
                            Chuo Kikuu Cha Dar es Salaam <br> 
                            Ndaki ya Teknolojia Za Habari 
                            <br> na Mawasiliano <br> </td> </tr>
            
            </tbody>
            
        </table>
    </center>
   
      <?php
         include_once 'footer.php';
      ?>
    </body>
</html>
