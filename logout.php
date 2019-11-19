<?php

	session_start();

	if (isset($_SESSION['uname'])) {
		session_destroy();
		header("Cache-Control", "no-cache, no-store, must-revalidate");
		echo "<script>location.href='adminLogin.php'</script>";
	} else {
		echo "<script>location.href='adminLogin.php'</script>";
	}

?>