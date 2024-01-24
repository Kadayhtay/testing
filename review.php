<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bootstrap Textarea Example</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    session_start();

    require "login_connect.php";
       if(isset($_POST['sumbit_button'])){
        $comment = $_POST['review'];

        $query = "INSERT INTO comment(review) VALUES('$comment')";
        mysqli_query($db,$query);

        header('location:review.php');
        
       }
    ?>
 


<form action="" method="POST">
<div class="container mt-5">
  <div class="mb-3">
    <label for="exampleTextarea" class="form-label">Your Message</label>
    <textarea class="form-control" name="review" id="exampleTextarea" rows="5" placeholder="Enter your message here..."></textarea>
  </div>
<button type="submit" name="sumbit_button" class="btn btn-primary">Send</button>
</div>
</form>
<!-- Bootstrap JS and Popper.js (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
