<?php
    if(isset($_POST['name'])){
    $server="localhost";
    $username="cubotsor_demo1";
    $pass="1YM^p*LsR]dE";

    $con = mysqli_connect($server,$username,$pass);

    if(!$con){
        die("connection to this database failed due to  ".mysqli_connect_error());
    }
    else{

        $name = $_POST['name'];
        $mobile=$_POST['mobile'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `cubotsor_trial1`.`trynew` (`name`, `mobile`, `password`) VALUES ('$name', '$mobile', '$password');";

        if($con->query($sql)==1){
          //redirect to dashboard on succesfull connection
            header('Location: dashboard/dashboard.html');
            // echo "Succesfully Inserted!";
        }
        else{
            echo "ERROR : ".$con.error;
        }
        $con->close();

        // echo "Succesful!";
        
        // ftp://cubotsor@cubots.org/public_html/tr1/dashboard
    }
}
//Trial => login
        // => dashboard

?>



<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-image: linear-gradient(to bottom right, rgb(56, 75, 152) 20%, rgb(80, 136, 164) 50%, white 30%);


    }

    .logo-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      padding: 20px;
    }

    .logo {
      height: 40px;
    }

    .form-container {
      background-color: #fff;
      ;
      padding: 60px;
      border-radius: 20px;
      box-shadow: 6px 10px 20px 10px rgb(0 0 0 / 60%);
      margin-bottom: 20px;
      width: 300px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }


    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .btn {
      width: 105%;
      padding: 20px;
      border-radius: 4px;
      border: none;
      background-image: linear-gradient(to bottom right, rgb(56, 75, 152) 40%, rgb(80, 136, 164) 60%);

      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }

    .btn:hover {
      background-color: black;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="logo-container">
      <!-- <img class="logo" src="logo1.png" alt="Logo 1">
      <img class="logo" src="logo2.png" alt="Logo 2"> -->
      <!-- <?php
      // if ($insert == true) {
      //  //Redirecting to Dashboard
      //  header( ' Location : dashboard/dashboard.php');
      //  exit;
      // }  
      ?> -->
    </div>
    <div class="form-container">
      <form action="login.php" method="post">

        <div class="form-group">
          <label for="login here">
            <h1>Login here</h1>
          </label><br>
          <label for="name">Enter Name:</label>

          <input name="name" id="name" required="required" type="text" class="form-input error-focus" placeholder="Enter your Name">

        </div>
        <div class="form-group">
          <label for="mobile">Enter Mobile Number:</label>
          <input name="mobile" id="mobile" required="required" type="number" class="form-input error-focus" placeholder="Give your mobile number">

        </div>
        <div class="form-group">
          <label for="password">Enter Password:</label>
          <input name="password" id="password" required="required" type="password" class="form-input error-focus" placeholder="Make a strong password">

        </div>
        <!-- <div class="form-group">
          <input type="submit" value="LOGIN">
        </div> -->
        <button class="btn">Submit</button>
        <div class="login-options">

          <label for="or">OR</label><br>
          <a href="#">Forgot Password?</a>
        </div>
      </form>
    </div>

</html>
