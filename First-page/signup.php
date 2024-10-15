
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <style>
      .email{
   border: 1px solid #cccccc;
   border-radius: 5px;
   height:40px;
   padding: 0 10px;
   outline-color: rgba(8,35,172,0.8);
   width: 100%;
}
.formContainer{
   width: 300px;
   background-color: #ffffff;
   border:8px solid #a8a8a8;
   border-radius: 20px;
   min-height: 550px;
   padding: 20px;

   margin:100px auto;
}
   </style>
   <title>Signup page</title>
</head>
<body>
   <div class="formContainer">
      <form method="post" action="signup_action.php">
         <h2 class="title">Sign up</h2>
         <div class="tip">
            Join to our community today
         </div>
         
         <?php
         if(isset($_SESSION['error'])){
            echo "<div class='errorMsg'>{$_SESSION['error']}</div>";
            unset($_SESSION['error']);
         }
         if(isset($_SESSION['success'])){
            echo "<div class='successMsg'>{$_SESSION['success']}</div>";
            unset($_SESSION['success']);
         }
         ?>
         <label for="name">Name</label>
         <input type="text" name="name" autocomplete="off">
         <label for="email">Email</label>
         <input type="email" class="email" name="email" autocomplete="off">
         <label for="password">Password</label>
         <input type="password" name="password">
         <input type="submit" value="SIGNUP">
      </form>
      <div class="link">
         Already have an account? <a href="login.php">Login</a>
      </div>
   </div>
</body>
</html>