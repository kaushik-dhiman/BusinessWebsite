<?php
         $to = "info@companymate.in";
         $subject = $_GET['subject'];
         $name = $_GET['name'];
         $message = "From: "."<h3>$name</h3>"."<br>".$_GET['message'];

         $header = "From:".$_GET['email']." \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $retval = mail ($to,$subject,$message,$header);
         if( $retval == true ) {
            echo "Thank you ".$name."<br> Your message has been sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
