<?php
   include 'connection.php';
   if(isset($_POST['submit'])) {
   $name = stripcslashes($_POST['name']);
   $email = stripcslashes($_POST['email']);
   $subject = stripcslashes($_POST['subject']);
   $message = stripcslashes($_POST['message']);

  
  
              	$result = mysqli_query($link,"insert into contact(name,email,subject,message)values ('$name','$email','$subject','$message')");
                 
                header ("Content-type: text/html");
                header ("Location: contact.php"); 
          
   }
?>
