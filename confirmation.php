<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/airplaneFavicon.ico">
    <title>Step 4: Confirm and Pay</title>  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/progress.css">
    <?php
    // Database connection
    require 'databaseConfig.php';
    ?>
</head>

  <body>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">G5 Airlines</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="contact-us.html">Contact Us</a></li> 
          </ul>
        </div>
      </div>
    </nav>
      
      <!-- Progress Bar -->
    <div class="container">
        <div class="row smpl-step" style="border-bottom: 0; min-width: 500px;">
            <div class="col-xs-3 smpl-step-step complete">
                <div class="text-center smpl-step-num">Step 1</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a class="smpl-step-icon"><i class="fa fa-user" style="font-size: 60px; padding-left: 12px; padding-top: 3px; color: black;"></i></a>
                <div class="smpl-step-info text-center">Search Flight</div>
            </div>

            <div class="col-xs-3 smpl-step-step complete">           
                <div class="text-center smpl-step-num">Step 2</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a class="smpl-step-icon"><i class="fa fa-dollar" style="font-size: 60px; padding-left: 18px; padding-top: 5px; color: black;"></i></a>
                <div class="smpl-step-info text-center">Choose Flight</div>
            </div>
            <div class="col-xs-3 smpl-step-step complete">          
                <div class="text-center smpl-step-num">Step 3</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a class="smpl-step-icon"><i class="fa fa-repeat" style="font-size: 60px; padding-left: 7px; padding-top: 7px; color: black;"></i></a>
                <div class="smpl-step-info text-center">Book Flight</div>
            </div>
            <div class="col-xs-3 smpl-step-step active">           
                <div class="text-center smpl-step-num">Step 4</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a class="smpl-step-icon"><i class="fa fa-download" style="font-size: 60px; padding-left: 8px; padding-top: 4px; color: black; opacity: 0.3;"></i></a>
                <div class="smpl-step-info text-center">Confirmation</div>
            </div>
        </div>
    </div>
      
      <!-- Confirmation Details -->
    <div class="container">
      <h2>Your Ticket Has Been Booked!</h2>
        
        <?php
// Read parameter values from the $_GET array and copy them into variables
            $surname = $_GET['surname'];
            $givenname = $_GET['givenname'];
            $gender = $_GET['gender'];
            $address = $_GET['address'];
            $nationality = $_GET['nationality'];
            $phonenumber = $_GET['phonenumber'];
            $passport = $_GET['passport'];
            $email = $_GET['email'];
            $cardType = $_GET['cardType'];
            $cardNo = $_GET['cardNo'];


            echo "<h3>Ticket From Kuala Lumpur (KUL) to Jakarta (CGK)</h3>
      <h4>Flight on 01 JAN 2015 (JT-808). Departure Time: 09:00. Arrival Time 10:00</h4>";
      

            echo "<table class='table table-responsive'>
        <tbody>
          <tr> 
            <td>Name:</td>
            <td>$givenname $surname </td>
          </tr>
          <tr> 
            <td>Gender: </td>
            <td>$gender</td>
          </tr>
          <tr> 
            <td>Address: </td>
            <td>$address</td>
          </tr>
          <tr> 
            <td>Nationality: </td>
            <td>$nationality</td>
          </tr>
          <tr> 
            <td>Phone Number: </td>
            <td>$phonenumber</td>
          </tr>
          <tr> 
            <td>Passport No: </td>
            <td>$passport</td>
          </tr>
          <tr> 
            <td>Email:</td>
            <td>$email</td>
          </tr>
          <tr> 
            <td>Card Type:</td>
            <td>$cardType</td>
          </tr>
          <tr> 
            <td>Card Number:</td>
            <td>$cardNo</td>
          </tr>";
        ?>
        </tbody>
        
      </table>
            
      <a href="javascript:void(0)" onclick=window.print()><button type="button" class="btn btn-primary btn-lg">Print</button></a>

    </div>
    
    <div class="footer navbar-inverse">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p><span style="color:white"> &copy; 2014</span> <a href="https://github.com/victorng8/G53SQM">G53 SQM Group E</a></p>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>
