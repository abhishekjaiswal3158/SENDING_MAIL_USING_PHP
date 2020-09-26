<?php

    $emailTo = $_POST["TO"];

    $subject = $_POST["SUBJECT"];

    $body = $_POST["MESSAGE"];

    $headers = "From: " . $_POST["FROM"];

    if (mail($emailTo, $subject, $body, $headers)) {
        
        echo "The email was sent successfully";
        
    } else {
        
        echo "The email could not be sent.";
        
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      
   <form method="post">
       
   <div class="form-group">
    <label for="FROM">Email From</label>
    <input type="email" class="form-control" name="FROM" placeholder="from@some.in">
  </div>
  <div class="form-group">
    <label for="TO">Email To</label>
    <input type="email" class="form-control" name="TO" placeholder="to@some.in">
  </div>

  <div class="form-group">
    <label for="sub">Subject</label>
    <input type="text" class="form-control" name="sub">
  </div>
 
  <div class="form-group">
    <label for="MESSAGE">Message</label>
    <textarea class="form-control" name="MESSAGE" rows="3"></textarea>
  </div>
    <div class="form-group">
    <input type="submit" class="form-control" name="submit">
  </div>
</form>
  </body>
</html>
