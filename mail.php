<?php 
  $myEmail = "webmaster@redoaktireandwheel.com";
  $myName = "Red Oak Tire & Wheel Webmaster";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $from = testInput($_POST["Name"]);
      $phone = testInput($_POST["Phone"]);
      $emailAddress = testInput($_POST["Email"]);
      $option = testInput($_POST["Option"]);
      $message = testInput($_POST["Message"]);
    }

    function testInput($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

	$formcontent = "\rFrom: $from \n\n Phone Number: $phone \n\n Email: $emailAddress \n\n Subject: $option \n\n Message: $message";
	$recipient = "buster@redoaktireandwheel.com";
	$subject = "Website Contact Form Submission";
	$mailheader = "From: $myName <$myEmail> \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location:https://redoaktireandwheel.com/success.html");
?>