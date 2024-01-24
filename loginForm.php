<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Form</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
    session_start();

    require "login_connect.php";
    $titleError = "";
    $descError ="";
       if(isset($_POST['create_login_button'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        if(empty($username)){
          $titleError = "The username field is required";
        }  
        if(empty($password)){
          $descError = "The password field is required";
        }  
        if(!empty($username) && !empty($password)){
          $query = "INSERT INTO login_info(username,password) VALUES('$username','$password')";
       mysqli_query($db,$query);
       header('location:review.php');
        }
       }
    ?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Login</h3>
        </div>
        <div class="card-body">
       

          <form action="" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" value="<?php echo $username; ?>" class="form-control <?php if($titleError !=''): ?>is-invalid<?php endif ?>" placeholder="Enter the username or E-mail">
                                <span class="text-danger"><?php echo $titleError?></span>            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="text" name="password" value="<?php echo $password; ?>" class="form-control <?php if($descError !=''): ?>is-invalid<?php endif ?>" placeholder="Enter the password">
                                <span class="text-danger"><?php echo $descError?></span>            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" name="create_login_button" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
