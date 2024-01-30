<?php
// session_start();


// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $username = htmlspecialchars($_POST["username"]);
//     $password = htmlspecialchars($_POST["password"]);

//     $_SESSION['phase4_data'] = [
//         'username' => $username,
//         'password' => $password
//     ];

//     header('Location: savedata.php');
//     exit;
// }
?>
<?php

session_start();



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

 
    $allData = array_merge($_SESSION['phase1_data'], $_SESSION['phase2_data'], $_SESSION['phase3_data'], [
        'username' => $username,
        'password' => $password
    ]);
    $firstname = $allData['firstname'];
    $lastname = $allData['lastname'];
    $email = $allData['email'];
    $phone_number = $allData['phone_number'];
    $dob = $allData['dob'];
    $gender = $allData['gender'];
    $username = $allData['username'];
    $password = $allData['password'];

    $conn=mysqli_connect("localhost","root","","signup_form") or  die("connection failed");
$sql = "INSERT INTO student(first_name,last_name,email_address,phone_number,date,gender,username,password) VALUES ('$firstname','$lastname','$email','$phone_number','$dob','$gender',' $username','$password')";
$result=mysqli_query($conn,$sql) or die("query unsuccsesfull");


session_unset();
session_destroy();

$conn->close();
header('Location: thanks.php');
exit;
}
?>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>SignUP Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="common.css">
  </head>
  <body>
 


     <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
  <div class="card">
    <div class="card-body">
  


      <h1 class="text-center mb-3">SignUP Form</h1>
      <div class="text-center">
      <div class="flex d-flex justify-content-start mb-3 mt-4">
      <h5>Login details:</h5>
      </div>
      
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="mb-3">
        <label for="text" class="form-label flex d-flex justify-content-start mb-3">User Name</label>
        <input type="text" name="username" class="form-control" id="username" required>
       
      <div class="mb-3">
        <label for="password" class="form-label flex d-flex justify-content-start mt-4 mb-3" required>Password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
      
      <div class='mb-3'>
      <button type="text" id="pk" class="btn btn-primary"> <a href="phase3.php">PREVIOUS</a></button>
      <button type="submit" id="pk" class="btn btn-primary">NEXT</button>
</div> 
    </form>
   
      </div>
     
    </div>
  </div>
</div>
<script>

</script>
  </body>
</html>