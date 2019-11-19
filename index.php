
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





<script> 
	function validatefeedbackform()
	{ 
		 var name = document.feedbackform.name.value;
		 var email = document.feedbackform.email.value;
		 var msg = document.feedbackform.msg.value; 

		 var mailformat = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
		 
		 if (name == null || name == "")
		 { 
       		swal("Incomplete details", "Please Enter your name", "info");
			 return false; 
		 }
		 else if (email == null || email == "")
		 { 
			 swal("Incomplete details", "Please Enter your email", "info");
			 return false; 
		 }
		 else if (!email.match(mailformat))
		 { 
			 swal("Invalid Email", "Please reenter email correctly", "info");
			 return false; 
		 }
		 else if (msg == null || msg == "")
		 { 
     		 swal("Incomplete details", "Please Enter your message bofore send", "info");
			 return false; 
		 }
	 }

	 	function validatebookingform()
	{ 
		 var name = document.bookingform.name.value;
		 var contactNumber = document.bookingform.contactNumber.value;
		 var checkin = document.bookingform.checkin.value; 
		 var checkout = document.bookingform.checkout.value; 

		 var letters = /^[a-zA-Z\s]*$/;
		 var numbers = /^[0-9]+$/;

		 
		 if (name == null || name == "")
		 { 
       		swal("Invalid details", "Please Enter your name", "info");
			 return false; 
		 }
		 else if ( !name.match(letters) )
		 { 
			 swal("Invalid details", "Name Can only be letters", "info");
			 return false; 
		 }
		 else if (contactNumber == null || contactNumber == "")
		 { 
			 swal("Invalid details", "Please Enter your contactNumber", "info");
			 return false; 
		 }
		 else if ( !contactNumber.match(numbers) )
		 { 
			 swal("Invalid details", "Contact Number Can only be numbers", "info");
			 return false; 
		 }
		 else if ( contactNumber.length != 10 && contactNumber.length != 15 )
		 { 
			 swal("Invalid details", "Contact Number can contain 10 or 15 numbers only", "info");
			 return false; 
		 }
		 else if (msg == null || msg == "")
		 { 
     		 swal("Invalid details", "Please Enter your message bofore send", "info");
			 return false; 
		 }
	 }
	
</script> 

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
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#BookNow">Book Now</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="#Rooms">Rooms</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#AboutUs">About Us</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#Facilities">Facilities</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="#WriteUs">Write Us</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="adminLogin.php">Admin Login</a>
            </li>    
        </ul>
      </div>
    </nav>


<header class="masthead">
    <div class="intro-text">
      <div class="intro-lead-in">Welcome To Blue Lotus Hotel!</div>
      <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
    </div>
</header>



<div id="BookNow" class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">BOOK NOW</h1>

  <br>

<form name="bookingform" method="post" action="index.php" onsubmit="return validatebookingform()">
<div class="row jumbotron">
    <div class="col-md-3">
      <label><i class="fa fa-user"></i> Customer Name</label>
      <input class="form-control" name="name" type="text" placeholder="John Carpenter">
    </div>
    <div class="col-md-2">
      <label><i class="fa fa-phone"></i> Contact Number</label>
      <input class="form-control" name="contactNumber"  type="text" placeholder="+87465789779">
    </div>
    <div class="col-md-3">
      <label><i class="fa fa-calendar-o"></i> Check In</label>
      <input class="form-control" name="checkin" value="2019-09-05" type="date" placeholder="">
    </div>
    <div class="col-md-3">
      <label><i class="fa fa-calendar-o"></i> Check Out</label>
      <input class="form-control" name="checkout"  value="2019-09-05" type="date" placeholder="">
    </div>
    <div class="col-md-1">
      <label>&nbsp</label>
      <button name="submitBooking" type="submit" class="btn button-blue-lotus btn-block">Book</button>
    </div>
  </div>
</div>
  </form>


        <?php
          $serverName = "LAPTOP-BUUAJ2F4\SQLEXPRESS";
          $connectionInfo = array("Database" => "master" );
          $conn = sqlsrv_connect ($serverName, $connectionInfo);

          if ($conn) {

            if (isset($_POST['submitBooking'])) {

              $name = $_POST['name'];
              $contactNumber = $_POST['contactNumber'];
              $checkin = $_POST['checkin'];
              $checkout = $_POST['checkout'];


              if ($name == null || $contactNumber == null || $checkin == null || $checkout == null) {
              echo "<script>
                swal('No details entered', 'Please enter you details and Submit', 'warning');
              </script>";
              } 
              else{

                $query = "INSERT INTO Customer_Room (full_Name,phone,checkIn,checkOut,status) VALUES(?, ?, ?, ?, ?)";
                $params1 = array($name, $contactNumber, $checkin, $checkout, "online");                       
                $result = sqlsrv_query($conn,$query,$params1);




                echo "<script>
                  swal('Thank You...!', 'Booking has submitted. One of our agents will contact you.', 'success');
                </script>";

                sqlsrv_close($conn);  
              }
            }
          } 

          else {
            echo "connection is not established <br/>";
            die(print_r(sqlite_errors(), true));
          }
          

        ?>







      <?php
          $serverName = "LAPTOP-BUUAJ2F4\SQLEXPRESS";
          $connectionInfo = array("Database" => "master" );
          $conn = sqlsrv_connect ($serverName, $connectionInfo);

          if ($conn) {

            /* <!-- for deluxe --> */
            $sql1 =   "select count(*) as numberOfDeluxeRooms
                  from Accomodation a, Room r
                  where a.accID = r.roomId and a.status = 'not occupied' and r.roomName = 'Deluxe'
                  group by r.roomName";



            $stmt1 = sqlsrv_query($conn,$sql1);

            if($stmt1 === false){
              die(print_r(sqlsrv_errors(), true));
            }

            $row1 = sqlsrv_fetch_Array($stmt1,SQLSRV_FETCH_ASSOC);

            if($row1['numberOfDeluxeRooms'] == null || $row1['numberOfDeluxeRooms'] == 0 ){
              $numberOfDeluxeRooms = "No ";
            }
            else{
              $numberOfDeluxeRooms = $row1['numberOfDeluxeRooms'];
            }

            /* <!-- for Superior --> */
            $sql2 =   "select count(*) as numberOfSuperiorRooms
                  from Accomodation a, Room r
                  where a.accID = r.roomId and a.status = 'not occupied' and r.roomName = 'Superior'
                  group by r.roomName";



            $stmt2 = sqlsrv_query($conn,$sql2);

            if($stmt2 === false){
              die(print_r(sqlsrv_errors(), true));
            }


            $row2 = sqlsrv_fetch_Array($stmt2,SQLSRV_FETCH_ASSOC);

            if($row2['numberOfSuperiorRooms'] == null || $row2['numberOfSuperiorRooms'] == 0 ){
              $numberOfSuperiorRooms = "No ";
            }
            else{
              $numberOfSuperiorRooms = $row2['numberOfSuperiorRooms'];
            }     

            /* <!-- for Premium --> */
            $sql3 =   "select count(*) as numberOfPremiumRooms
                  from Accomodation a, Room r
                  where a.accID = r.roomId and a.status = 'not occupied' and r.roomName = 'Premium'
                  group by r.roomName";



            $stmt3 = sqlsrv_query($conn,$sql3);

            if($stmt3 === false){
              die(print_r(sqlsrv_errors(), true));
            }

            $row3 = sqlsrv_fetch_Array($stmt3,SQLSRV_FETCH_ASSOC);

            if($row3['numberOfPremiumRooms'] == null || $row3['numberOfPremiumRooms'] == 0 ){
              $numberOfPremiumRooms = "No ";
            }
            else{
              $numberOfPremiumRooms = $row3['numberOfPremiumRooms'];
            }
          }
        ?>




      <div id="Rooms" class="container">
        <div class="container" >
          <h1 class="text-center">ROOMS</h1>
        <div class="card-deck mb-3 text-left ">
          <div class="card mb-4 shadow-sm card-custom">
            <div class="card-header">
              <img src="img/single.jpg">
            </div>
            <div class="card-body ">
                
              <?php
                echo '<h2 class="card-title pricing-card-title"> ' . $numberOfDeluxeRooms . '</h2> <h1>Deluxe </h1> <h4>Rooms are Available </h4>'
              ?>

              <ul class="list-unstyled mt-3 mb-4 ">
                <li><i class="fas fa-check"></i> &nbsp One Single Bed</li>
    <!--             <li><i class="fas fa-check"></i> &nbsp Email support</li>
                <li><i class="fas fa-check"></i> &nbsp Help center access</li> -->
              </ul>

              <p class="card-text"><small class="text-muted">Suitable for one person</small></p>
            </div>
          </div>
          <div class="card mb-4 shadow-sm card-custom">
            <div class="card-header">
              <img src="img/double.jpg">
            </div>
            <div class="card-body">
                
              <?php
                echo '<h2 class="card-title pricing-card-title">' . $numberOfPremiumRooms  . '</h2> <h1>Premium </h1> <h4>Rooms are Available </h4>'
              ?>

              <ul class="list-unstyled mt-3 mb-4">
                <li><i class="fas fa-check"></i> &nbsp One Double Bed</li>
    <!--             <li><i class="fas fa-check"></i> &nbsp Priority email support</li>
                <li><i class="fas fa-check"></i> &nbsp Help center access</li> -->
              </ul>
              <p class="card-text"><small class="text-muted">Suitable for a couple</small></p>              
            </div>
          </div>
          <div class="card mb-4 shadow-sm card-custom">
            <div class="card-header">
              <img src="img/superior.jpg">
            </div>
            <div class="card-body">
                
              <?php
                echo '<h2 class="card-title pricing-card-title"> ' . $numberOfSuperiorRooms . '</h2> <h1>Superior </h1> <h4>Rooms are Available </h4>'
              ?>

              <ul class="list-unstyled mt-3 mb-4">
                <li><i class="fas fa-check"></i> &nbsp One Single Bed</li>
                <li><i class="fas fa-check"></i> &nbsp One Double Bed</li>
    <!--             <li><i class="fas fa-check"></i> &nbsp Phone and email support</li>
                <li><i class="fas fa-check"></i> &nbsp Help center access</li> -->
              </ul>
              <p class="card-text"><small class="text-muted">Suitable for a small family</small></p>                            
            </div>
          </div>
        </div>

  <hr >

        <div id="AboutUs">
          <h1 class="text-center">ABOUT US</h1>
          <p class="lead jumbotron">Situated in Kandy within 3.8 km of Lakeside Adventist Hospital and 4.3 km of Kandy Museum, Blue Lotus provides rooms with free WiFi. 4.4 km from Sri Dalada Maligawa, the property is also 5 km away from Kandy City Center Shopping Mall. The property is set 5 km from Pallekele International Cricket Stadium.
          All rooms in the guest house are fitted with a flat-screen TV with satellite channels. With a private bathroom, certain units at Blue Lotus also boast a balcony.
          Bogambara Stadium is 5 km from the accommodation. The nearest airport is Bandaranaike International Airport, 88 km from the property.
          We speak your language!</p>
        </div>



  <hr >

<div id="Facilities" class="container">
  <h1 class="text-center">OUR FACILITIES</h1>
  <br>
<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <div class="our-services-wrapper mb-60">
            <div class="services-inner">
              <div class="our-services-text">
                <img src="img/poolss.png" ><h4> Swimming Pool</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <div class="our-services-wrapper mb-60">
            <div class="services-inner">
 
              <div class="our-services-text">
                <img src="img/food.png"><h4>Resturant</h4> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <div class="our-services-wrapper mb-60">
            <div class="services-inner">

              <div class="our-services-text">
                <img src="img/gymss.png"><h4>Gym</h4>
              </div>
            </div>
          </div>
        </div>
</div>
<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <div class="our-services-wrapper mb-60">
            <div class="services-inner">

              <div class="our-services-text">
                <img src="img/spass.png"><h4>Spa</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <div class="our-services-wrapper mb-60">
            <div class="services-inner">

              <div class="our-services-text">
                <img src="img/rece.png"><h4>24x7 Reception</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <div class="our-services-wrapper mb-60">
            <div class="services-inner">

              <div class="our-services-text">
                <img src="img/wifiss.png"><h4>Free WiFi</h4>
              </div>
            </div>
          </div>
        </div>
</div>
</div>

<hr >

  <footer>
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
              <form name="feedbackform" action="index.php" method="post" onsubmit="return validatefeedbackform()">
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Name &nbsp &nbsp</span>
                  </div>
                  <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email &nbsp &nbsp </span>
                  </div>
                  <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Message</span>
                  </div>
                  <textarea class="form-control" name="msg" aria-label="With textarea"></textarea>
                </div>
                <br>
                  <p>
                    <button class="btn button-blue-lotus pull-left" name="submitWriteUs" type="submit">SEND MESSAGE</button>
                    <a href="#" class="pull-right "><img src="img/up.png"></a>
                  </p>
              </form>
      </div>

        <?php
          $serverName = "LAPTOP-BUUAJ2F4\SQLEXPRESS";
          $connectionInfo = array("Database" => "master" );
          $conn = sqlsrv_connect ($serverName, $connectionInfo);

          if ($conn) {

            if (isset($_POST['submitWriteUs'])) {

              $name = $_POST['name'];
              $email = $_POST['email'];
              $msg = $_POST['msg'];

              if ($name == null || $email == null || $msg == null) {
              echo "<script>
                swal('No details entered', 'Please enter you details and send', 'warning');
              </script>";
              } 
              else{

                $query = "INSERT INTO WriteUs (customerName,customerEmail,message) VALUES(?, ?, ?)";
                $params1 = array($name,$email,$msg);                       
                $result = sqlsrv_query($conn,$query,$params1);

                echo "<script>
                  swal('Thank You...!', 'Your ideas are very important to us.', 'success');
                </script>";

                sqlsrv_close($conn);  
              }
            }
          } 

          else {
            echo "connection is not established <br/>";
            die(print_r(sqlite_errors(), true));
          }
          

        ?>




    </div>
  </footer>
  <hr >

  <br>
</div>
</body>
</html>


