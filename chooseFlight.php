<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="chooseFlight.php">Choose Flight</a></li>
            <li><a href="bookFlight.html">Book Flight</a></li> 
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
      <form role="form">
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
                
                $DepartureCity=$_POST['departFlight'];
                $ArrivalCity=$_POST['arrival'];
                $DepartureDate=$_POST['departdate'];

                $query="SELECT * FROM flightX WHERE DepartureCity=$DepartureCity AND ArrivalCity = $ArrivalCity AND DepartureDate = $DepartureDate";
                $result=mysqli_query($query);

                $num=mysqli_numrows($result);
                mysql_close();

                $i=0;
                while ($i < $num) {
                    $prefix=mysqli_result($result,$i,"prefix");
                    $id=mysqli_result($result,$i,"id");
                    $DepartureTime=mysqli_result($result,$i,"DepartureTime");
                    $ArrivalDate= mysqli_result($result,$i,"ArrivalDate");
                    $ArrivalTime=mysqli_result($result,$i,"ArrivalTime");
                    $Price =mysqli_result($result,$i,"Price");
    
                echo "<tr>";
                echo "<td><input type='radio' name='chooseflight'></td>";
                echo "<td>$prefix-$id</td>";
                echo "<td>$DepartureCity</td>";
                echo "<td>$ArrivalCity</td>";
                echo "<td>$DepartureDate</td>";
                echo "<td>$DepartureTime</td>";
                echo "<td>$ArrivalDate</td>";
                echo "<td>$ArrivalTime</td>";
                echo "<td>$Price</td>";
                echo "</tr>";
                    
                $i++;
                }
            ?>
            
          </tbody>
        </table>
            
        <div class="form-group">        
          <div class="col-sm-offset-1 col-sm-10">
            <input type="submit" class="btn btn-default" value = 'Flight Chosen'>
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
  </body>
</html>
