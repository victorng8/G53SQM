<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/airplaneFavicon.ico">
    <title>Step 2: Choose Flight</title> 
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">

    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/progress.css">
       <?php
    // Database connection
    require 'databaseConfig.php';
    ?>
</head>

  <body>
      <!-- Navigation menu bar-->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">G5 Airlines</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="chooseFlight.php">Choose Flight</a></li>
            <li><a href="contact-us.html">Contact Us</a></li> 
          </ul>
        </div>
      </div>
    </nav>
      <!--Progress bar-->
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

            <div class="col-xs-3 smpl-step-step active">           
                <div class="text-center smpl-step-num">Step 2</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a class="smpl-step-icon"><i class="fa fa-dollar" style="font-size: 60px; padding-left: 18px; padding-top: 5px; color: black;"></i></a>
                <div class="smpl-step-info text-center">Choose Flight</div>
            </div>
            <div class="col-xs-3 smpl-step-step disabled">          
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

    
      
    <div class="container">
      <h2>Choose Your Flight</h2>
        
        <!--*** The flight search results ***-->
      <form role="form" method="post" action="bookFlight.php">
        <table class="table"> 
          <thead>
            <tr>
                <th>#</th>
                <th>Flight No</th>
                <th>Departure City</th>
                <th>Arrival City</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
                <th>Arrival Date</th>
                <th>Arrival Time</th>
                <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <?php

            //echo 'hello';
                
                $departure=$_POST['departure'];
                $arrival=$_POST['arrival'];
                $departdate=$_POST['departdate'];
                

                //echo $departdate;


                $query="SELECT id, prefix, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price FROM flightsX WHERE prefix=$departure AND ArrivalCity = '$arrival' AND DepartureDate='$departdate'";
                //print $query;

                //$departCity = "SELECT DepartureCity, ArrivalCity FROM flightsX WHERE prefix=1 AND ArrivalCity=";
                //print $departCity;
                /*$departCityResult = $dbo->query($departCity);
                return $departCityResult->fetchAll(PDO::FETCH_ASSOC);*/

                $result2 = mysqli_query($con,$query);
                if(mysqli_num_rows($result2) == 0)
                {
                 echo "<tr>";
                echo "<td>Sorry! No available flight!</td>";
                echo '</tr>';   
                }

                
                while($row = mysqli_fetch_assoc($result2)) {
                   
                $chooseID = $row["id"];
                $choosePrefix = $row["prefix"];
                $chooseDepartureCity = $row["DepartureCity"];
                $chooseArrivalCity = $row["ArrivalCity"];
                $chooseDepartureDate = $row["DepartureDate"];
                $chooseDepartureTime = $row["DepartureTime"];
                $chooseArrivalDate = $row["ArrivalDate"];
                $chooseArrivalTime = $row["ArrivalTime"];
                $choosePrice = $row["Price"];

                echo "<tr>";
                echo "<td><input type='radio' name='chooseflight'></td>";
                echo '<td>' .$chooseID["id"]. '</td>';
                echo '<td>' .$chooseDepartureCity. '</td>';
                echo '<td>' .$chooseArrivalCity. '</td>';
                echo '<td>' .$chooseDepartureDate. '</td>';
                echo '<td>' .$chooseDepartureTime. '</td>';
                echo '<td>' .$chooseArrivalDate. '</td>';
                echo '<td>' .$chooseArrivalTime. '</td>';
                echo '<td>' .$choosePrice. '</td>';
                echo "</tr>";
                


                }

                //echo $chooseID;



                
                
            ?>
            
          </tbody>
        </table>
          <?php 
          if(mysqli_num_rows($result2) == 0)
                {
                 echo "Please click <a href='index.php'>HERE</a> to go back to homepage!";  
                }
          

else {
?>
    
        <div class="form-group">        
          <div class="col-sm-offset-1 col-sm-10">
            
            <input type="submit" class="btn btn-default" value="Flight Chosen">
            <input type="hidden" name="chooseID" value="<?php echo $chooseID ?>">
            <input type="hidden" name="chooseDepartureCity" value="<?php echo $chooseDepartureCity ?>">
            <input type="hidden" name="chooseArrivalCity" value="<?php echo $chooseArrivalCity ?>">
            <input type="hidden" name="chooseDepartureDate" value="<?php echo $chooseDepartureDate ?>">
            <input type="hidden" name="chooseDepartureTime" value="<?php echo $chooseDepartureTime ?>">
            <input type="hidden" name="chooseArrivalDate" value="<?php echo $chooseArrivalTime ?>">
            <input type="hidden" name="chooseArrivalTime" value="<?php echo $chooseArrivalTime ?>">
            <input type="hidden" name="choosePrice" value="<?php echo $choosePrice ?>">
            </form>
          </div>
        </div>
    
<?php } ?>

    </div>
            
      
    <div class="footer navbar-inverse">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p><span style="color:white"> &copy; 2014</span> <a href="https://github.com/victorng8/G53SQM">G53 SQM Group E</a></p>
          </div>
        </div>

        
      </div>
  </body>
</html>
