<?php session_start(); ?>

<?php


  $serverName = "LAPTOP-BUUAJ2F4\SQLEXPRESS";
  $connectionInfo = array("Database" => "master" );
  $conn = sqlsrv_connect ($serverName, $connectionInfo);


  if (isset($_SESSION['uname'])) 
  {
    echo "<script> location.href = 'adminDashboard.php' </script>";
  } 
  else{
      if (isset($_POST['loginSubmitBtn'])) {
            
            $uname = $_POST['uname']; //get user input values
            $pwd = $_POST['pwd'];

            //prepare a query,  email->user name, NIC->password ,  Receptionist and customer manager can log in
            $query = " SELECT * FROM Emplyoees WHERE NIC = ? AND Email = ?  ";  


                    $parameters = array($pwd,$uname);    
                    $result = sqlsrv_query($conn,$query,$parameters);  //executes a query

                    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC); //Returns a row as an array

                    if ($row != NULL or $row != false) {
                            $_SESSION['uname'] = $uname;
                            echo "<script> location.href = 'adminDashboard.php' </script>";
                    }
                    else{
                            echo "<script> alert('Incorrect user credentials!\\nRe enter details correctly.') </script>";
                            echo "<script> location.href = 'adminLogin.php' </script>";
                    }

      }
  }    

	
?>