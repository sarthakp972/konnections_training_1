<?php
session_start();

 if (!isset($_SESSION['phase1_data'])) {
     header('Location: index.php');
     exit;
 }

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $phone_number = htmlspecialchars($_POST["phone_number"]);

    $_SESSION['phase2_data'] = [
        'email' => $email,
        'phone_number' => $phone_number
    ];

    header('Location: phase3.php');
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
      <div class="flex d-flex justify-content-start mt-4 mb-4">
      <h5 >Contact info:</h5>
      </div>
  

      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="mb-3">
        <label for="email" class="form-label flex d-flex justify-content-start mb-3">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" >
       
      <div class="mb-3">
        <label for="phone" class="form-label flex d-flex justify-content-start mt-4 mb-3">Phone Number</label>
        <input type="tel" name="phone_number" class="form-control" id="phone" required pattern="[0-9]{10}" placeholder="Enter your 10 digit phone no.."/>
      </div>
      <div class='mb-3'>
      <button type="submit" id="pk" class="btn btn-primary"> <a href="phase1.php">PREVIOUS</a></button>
      <button type="submit" id="pk" class="btn btn-primary">NEXT</button>
</div> 
     
    </form>
   
      </div>
     
    </div>
  </div>
</div>

  </body>
</html>