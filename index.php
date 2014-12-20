<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G5 Landing Page</title>      
      
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
      
    
    <script>
    function reload(form){
        var val=form.departure.options[form.departure.options.selectedIndex].value;
        self.location='index.php?departure=' + val ;
    }
    </script>


 

</head>
    
<body>
    <!--Navigation menu bar -->
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
    <!--Progress Bar-->
    <div class="container">
        <div class="row smpl-step" style="border-bottom: 0; min-width: 500px;">
            <div class="col-xs-3 smpl-step-step active">
                <div class="text-center smpl-step-num">Step 1</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a class="smpl-step-icon"><i class="fa fa-user" style="font-size: 60px; padding-left: 12px; padding-top: 3px; color: black;"></i></a>
                <div class="smpl-step-info text-center">Search Flight</div>
            </div>

            <div class="col-xs-3 smpl-step-step disabled">           
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
          <h2>Flight Search</h2>


       
        
        <!--Departure Flight--> 
        <?php

            // Use this line or below line if register_global is off
            $departure=$_GET['departure'];
            // to check if $departure is numeric data or not. 
            if(strlen($departure) > 0 and !is_numeric($departure)){ 
                echo "Data Error";
                exit;
            }
            // Getting data for first list box
            $quer2="SELECT DISTINCT departure,flight_id FROM departure order by departure"; 

            // Getting data for second drop down list we will check if departure is selected else we will display all the arrival flights
            if(isset($departure) and strlen($departure) > 0){



                $quer="SELECT DISTINCT arrival FROM arrival where flight_id=$departure order by arrival"; 
            }

            else{$quer="SELECT DISTINCT arrival FROM arrival order by arrival"; } 

            echo "<form class='form-horizontal' role='form' method=post action='chooseFlight.php'>";
            echo "<div class='form-group'>";
            echo "<label class='control-label col-sm-2' for='Depart'>From:</label>";
            echo "<div class='col-sm-10'>";
            echo "<select name='departure' onchange=\"reload(this.form)\"><option value=''>Select Departure Flight:</option>";
            foreach ($dbo->query($quer2) as $noticia2) {
                if($noticia2['flight_id']==@$departure){
                    echo "<option selected value='$noticia2[flight_id]'>$noticia2[departure]</option>"."<br>";
                }else{
                    echo  "<option value='$noticia2[flight_id]'>$noticia2[departure]</option>";
                }
            }
            echo "</select>";
            echo "</div>";
            echo "</div>";      

            //Starting of second drop downlist
            echo "<div class='form-group'>";
            echo "<label class='control-label col-sm-2' for='Arrive'>To:</label>";
            echo "<div class='col-sm-10'>";
            echo "<select name='arrival'><option value=''>Select Arrival Flight:</option>";
            foreach ($dbo->query($quer) as $noticia) {
                echo  "<option value='$noticia[arrival]'>$noticia[arrival]</option>";
            }
            echo "</select>";
            echo "</div>";
            echo "</div>";    
            
            // Flight Date
            echo "<div class='form-group'>";
            echo "<label class='control-label col-sm-2' for='flightdate'>Flight Date:</label>
            <div class='col-sm-10'>";
            echo "<input type = 'date' name = 'departdate'>";
            echo "</div>";

            echo "<div class='form-group'>        
          <div class='col-sm-offset-2 col-sm-10'>
            <input type='submit' class='btn btn-default' value='Search'>
          </div>
        </div>
      </form>
    </div>";
?>

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
