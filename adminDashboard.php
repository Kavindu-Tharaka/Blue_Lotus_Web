<?php

    session_start();

    if (isset($_SESSION['uname'])) {

    } else {
      echo "<script>location.href='adminLogin.php'</script>";
    }

?>


<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>
  <body>


    <nav  class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="img/blueLotus.png" width="150" height="65"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavDropdown" aria-controls="NavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="NavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>    
        </ul>
      </div>
    </nav>

      <hr >

      <h2 class="text-center font-weight-bold" ><kbd>Customer Web Reservations</kbd></h2>

      <?php
          $serverName = "LAPTOP-BUUAJ2F4\SQLEXPRESS";
          $connectionInfo = array("Database" => "master" );
          $conn = sqlsrv_connect ($serverName, $connectionInfo);

          if ($conn) {
            $sql = "select * from Customer_Room where status = 'online' ";
            $stmt = sqlsrv_query($conn,$sql);

            if($stmt === false){
              die(print_r(sqlsrv_errors(), true));
            }

            echo "
            <div class='container'>
              <table class ='table table-bordered table-hover'>
                <tr>
                <thead bgcolor='#48c7ec'>
                  <th> Customer Name </th>
                  <th> Contact Number </th>
                  <th> Checkin date </th>
                  <th> Checkout date </th>

                </thead>
                </tr>
            </div>";

            

            while ($row = sqlsrv_fetch_Array($stmt,SQLSRV_FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td>" . $row['full_Name'] . "</td>";
              echo "<td>" . $row['phone'] . "</td>"; 
              echo "<td>" . $row['checkIn'] . "</td>";
              echo "<td>" . $row['checkOut'] . "</td>";

              echo "</tr>";
            }   
                
            echo "</table>";
          } 

          else {
            echo "connection is not established <br/>";
            die(print_r(sqlite_errors(), true));
          }
          
        ?>



        <br><br><br>

        <h2 class="text-center font-weight-bold" ><kbd>Customer Feedback</kbd></h2>


      <?php
          $serverName = "LAPTOP-BUUAJ2F4\SQLEXPRESS";
          $connectionInfo = array("Database" => "master" );
          $conn = sqlsrv_connect ($serverName, $connectionInfo);

          if ($conn) {
            $sql = "select * from WriteUs";
            $stmt = sqlsrv_query($conn,$sql);

            if($stmt === false){
              die(print_r(sqlsrv_errors(), true));
            }

            echo "
            <div class='container'>
              <table class ='table table-bordered table-hover'>
                <tr>
                <thead bgcolor='#48c7ec'>
                  <th> ID </th>
                  <th> Customer Name </th>
                  <th> Email </th>
                  <th> Message </th>
                </thead>
                </tr>
            </div>";

            while ($row = sqlsrv_fetch_Array($stmt,SQLSRV_FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['customerName'] . "</td>";
              echo "<td>" . $row['customerEmail'] . "</td>"; 
              echo "<td>" . $row['message'] . "</td>";
              echo "</tr>";
            }   
                
            echo "</table>";
          } 

          else {
            echo "connection is not established <br/>";
            die(print_r(sqlite_errors(), true));
          }
          

        ?>

        <form action="adminDashboard.php" method="get">
        	<button type="submit" name="deleteAllFeedback"  class="btn btn-lg btn-danger pull-right" onclick="return confirm('Do you want to delete all feedback?');" >Delete All Feedback</button>
		</form>

		  <?php
          $serverName = "LAPTOP-BUUAJ2F4\SQLEXPRESS";
          $connectionInfo = array("Database" => "master" );
          $conn = sqlsrv_connect ($serverName, $connectionInfo);

          if ($conn) {

            if (isset($_GET['deleteAllFeedback'])) {

				$query = 'DELETE FROM WriteUs';
				$result = sqlsrv_query($conn,$query);

                sqlsrv_close($conn);  
                echo "<script> location.href = 'adminDashboard.php' </script>";
            }
          } 
        ?>
        
        <br><br><br>

  <hr >

    <footer class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <h4><b>Find Us On</b></h4>
        <div class="w3-xlarge w3-padding-16">
<!--           <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i> -->
          <a href=""><img src="img/facebook.png"></a>
          <a href=""><img src="img/twitter.png"></a>
          <a href=""><img src="img/instagram.png"></a>
          <a href=""><img src="img/linkedin.png"></a>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <h4><b>Collaborates with</b></h4>
        <br>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="https://www.booking.com/hotel/lk/blue-lotus.en-gb.html?aid=356938;label=metagha-link-localuniversalLK-hotel-3336977_dev-desktop_los-1_bw-1_dow-Monday_defdate-1_room-0_lang-en_curr-LKR_gstadt-2_rateid-0_aud-0_cid-84;sid=32cb8c5937ebbcafe8f8438fe023b724;all_sr_blocks=333697703_164608394_2_0_0;checkin=2019-07-08;checkout=2019-07-09;dest_id=-2222251;dest_type=city;dist=0;group_adults=2;hapos=1;highlighted_blocks=333697703_164608394_2_0_0;hpos=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1562472333;srpvid=baa31cc61f0a0095;type=total;ucfs=1&#hotelTmpl">booking.com</a></li>
          <li><a class="text-muted" href="http://www.srilankanyellowpages.com/listing/blue-lotus-guest-balagolla-kandy/">srilankanyellowpages.com</a></li>
          <li><a class="text-muted" href="https://www.lankaholidays.com/holiday-homes/accommodation_details-44030.html">lankaholidays.com</a></li>
        </ul>
      </div>
      
      <div id="WriteUs" class="col-md-4 col-sm-12">

              <h4><b>Write Us</b></h4>
              <br>
              <p>If you have any questions, do not hesitate to ask them.</p>
              <form action="a.php" method="post">
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Name &nbsp &nbsp</span>
                  </div>
                  <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                </div>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email &nbsp &nbsp </span>
                  </div>
                  <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                </div>
                <div class="input-group input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Message</span>
                  </div>
                  <textarea class="form-control " name="msg" aria-label="With textarea" disabled></textarea>
                </div>
                <br>
                  <p>
                    <button class="btn button-blue-lotus pull-left " name="submitWriteUs" type="submit" disabled>SEND MESSAGE</button>
                    <a href="#" class="pull-right "><img src="img/up.png"></a>
                  </p>
              </form>
      </div>

    </div>

  </footer>
  <hr >

  <br>
</div>
</body>
</html>