<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/airplaneFavicon.ico">
    <title>Step 3: Book Flight </title>  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/progress.css">
</head>

  <body>

    <?php
    $chooseID=$_POST['chooseID'];
    $chooseDepartureCity=$_POST['chooseDepartureCity'];
    $chooseArrivalCity=$_POST['chooseArrivalCity'];
    $chooseDepartureDate=$_POST['chooseDepartureDate'];
    $chooseDepartureTime=$_POST['chooseDepartureTime'];
    $chooseArrivalDate=$_POST['chooseArrivalDate'];
    $chooseArrivalTime=$_POST['chooseArrivalTime'];
    $choosePrice=$_POST['choosePrice'];

    if (empty($chooseID)) {
    echo 'variable empty';
}
    /*echo $chooseID;
                echo $chooseDepartureCity;
                echo $chooseArrivalCity;
                echo $chooseDepartureDate;
                echo $chooseDepartureTime;
                echo $chooseArrivalDate;
                echo $chooseArrivalTime;
                echo $choosePrice;*/
    ?>

    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">G5 Airlines</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="bookFlight.html">Book Flight</a></li> 
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
            <div class="col-xs-3 smpl-step-step active">          
                <div class="text-center smpl-step-num">Step 3</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a class="smpl-step-icon"><i class="fa fa-repeat" style="font-size: 60px; padding-left: 7px; padding-top: 7px; color: black;"></i></a>
                <div class="smpl-step-info text-center">Book Flight</div>
            </div>
            <div class="col-xs-3 smpl-step-step disabled">           
                <div class="text-center smpl-step-num">Step 4</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a class="smpl-step-icon"><i class="fa fa-download" style="font-size: 60px; padding-left: 8px; padding-top: 4px; color: black; opacity: 0.3;"></i></a>
                <div class="smpl-step-info text-center">Confirmation</div>
            </div>
        </div>
    </div>
      
      <!-- Booking Details -->
    <div class="container">
      <h2>Fill Your Booking Details</h2>
      <form class="form-horizontal" role="form" id="bookFlight" action="confirmation.php" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="Name:">Surname:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" autofocus required id="surname" name="surname">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Name:">Given Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" autofocus required id="givenname" name="givenname">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Gender:">Gender:</label>
          <div class="radio col-sm-10">
            <label><input type="radio" name="gender" id="gender" value ="Male">Male</label>
            <label><input type="radio" name="gender" id="gender" value ="Female">Female</label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Name:">Address:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="5" id="address" name="address"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Name:" >Nationality:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" autofocus required id="nationality" name ="nationality">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Name:">Phone Number</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" autofocus required id="phonenumber" name ="phonenumber">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Name:">Passport No:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" autofocus required id="passport" name="passport">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Name:">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" autofocus required id="email" name ="email">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="Gender:">Payment Method:</label>
          <div class="radio col-sm-10">
            <label><input type="radio" name="cardType" id="method" value= "Visa">Visa</label>
            <label><input type="radio" name="cardType" id="method" value = "MasterCard">MasterCard</label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Name:">Card Number:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" autofocus required id="cardNo" name ="cardNo">
          </div>
        </div>

        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-default" value = "Book">
            <input type="hidden" name="chooseID" value="<?php echo $chooseID ?>">
            <input type="hidden" name="chooseDepartureCity" value="<?php echo $chooseDepartureCity ?>">
            <input type="hidden" name="chooseArrivalCity" value="<?php echo $chooseArrivalCity ?>">
            <input type="hidden" name="chooseDepartureDate" value="<?php echo $chooseDepartureDate ?>">
            <input type="hidden" name="chooseDepartureTime" value="<?php echo $chooseDepartureTime ?>">
            <input type="hidden" name="chooseArrivalDate" value="<?php echo $chooseArrivalTime ?>">
            <input type="hidden" name="chooseArrivalTime" value="<?php echo $chooseArrivalTime ?>">
            <input type="hidden" name="choosePrice" value="<?php echo $choosePrice ?>">
          </div>
        </div>
      </form>
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
