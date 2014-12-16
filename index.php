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
        $ArrivalCity = intval($_GET['ArrivalCity']);

        $con = mysqli_connect('localhost','khcy3nti_vic','V7ba2oPhQrkM','khcy3nti_g5-Airlines');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }
    ?>
    <script>
    function showFlights(str) {
        if (str=="") {
            document.getElementById("txtHint").innerHTML="";
        return;
        } 
        
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","index.php?q="+str,true);
        xmlhttp.send();
    }
</script>
</head>

  <body>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">G5 Airlines</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="searchResult.html">Choose Flight</a></li>
            <li><a href="bookFlight.html">Book Flight</a></li> 
            <li><a href="contact-us.html">Contact Us</a></li> 
          </ul>
        </div>
      </div>
    </nav>
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
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">From:</label>
          <div class="col-sm-10">
            <select class="form-control" id="from" name="flights" onchange="showFlights(this.value)">
                <option value="">Choose Departure City:</option>
                <option value="1">Kuala Lumpur (KUL)</option>
                <option value="2">Jakarta (CGK)</option>
                <option value="3">Singapore (SIN)</option>
                <option value="4">Bangkok (DMK)</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">To:</label>
          <div class="col-sm-10">
              <select class="form-control" id="to">
                  
            <?php

                mysqli_select_db($con,"khcy3nti_g5-Airlines");
                $sql="SELECT ArrivalCity FROM flights WHERE DepartureCity='".Kuala ."' '".Lumpur ."' '".(KUL)."'";
                $result = mysqli_query($con,$sql); 
                while($row = mysqli_fetch_array($result)) {
                    echo "<option>" . $row['ArrivalCity'] . "</option>";
                    
                }
                mysqli_close($con);
            ?>
                </select>
          </div>
        </div>
        </form>
    <form class="form-horizontal" role="form">
        <div class="form-group">        
          
          <label class="control-label col-sm-2" for="pwd">Flight Date:</label>
          <div class="col-sm-10">
            <div id="datetimepicker" class="input-append date">
              <input class="form-control col-sm-10" type="text"></input>
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
          </div>
          <script type="text/javascript"
           src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
          </script> 
          <script type="text/javascript"
           src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
          </script>
          <script type="text/javascript"
           src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
          </script>
          <script type="text/javascript"
           src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
          </script>
          <script type="text/javascript">
            $('#datetimepicker').datetimepicker({
              pickTime: false

            });
          </script>
          </div>

        </div>

        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Search</button>
          </div>
        </div>
      </form>
    </div>
    

    <div class="footer navbar-inverse">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p><span style="color:white"> &copy; 2014</span> <a href="https://github.com/victorng8/G53SQM">G53 SQM Group 5</a></p>
          </div>
        </div>

        
      </div>
    </div>
  </body>
</html>
