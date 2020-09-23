<?php

    $emailTo = $_POST["TO"];

    $subject = $_POST["SUBJECT"];

    $body = $_POST["MESSAGE"];

    $headers = "From: ".$_POST["FROM"];

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
    <input type="email" class="form-control" name="FROM" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="TO">Email To</label>
    <input type="email" class="form-control" name="TO" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="SUBJECT">Subject</label>
    <input type="text" class="form-control" name="SUBJECT" ">
  </div>
 
  <div class="form-group">
    <label for="MESSAGE">Message</label>
    <textarea class="form-control" name="MESSAGE" rows="3"></textarea>
  </div>
    <div class="form-group">
    <input type="submit" class="form-control" name="submit">
  </div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>