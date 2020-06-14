<?php
   require "dbconfig-reservation.php";

   $fName = $_POST["firstName"];
   $lName = $_POST["lastName"];
   $email = $_POST["email"];
   $mobNumber = $_POST["mobileNumber"];
   $noOfPeople = $_POST["people"];

   $sql = "INSERT INTO reservation(first_name, last_name, email, mobile_number, num_of_people) VALUES('$fName', '$lName', '$email', $mobNumber, $noOfPeople)";

   if (mysqli_query($con,$sql))
	{
      ?><script type="text/javascript"> alert('Reservation has been successfully submitted'); </script>
   <?php
	}
	else
	{
		echo "Something went wrong</br>";
   }
   $con->close();
   ?>
   