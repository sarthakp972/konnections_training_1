
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);

    $_SESSION["phase1_data"] = [
        'firstname' => $firstname,
        'lastname' => $lastname
    ];

    header('Location: phase2.php');
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
      <div class="text-center mb-3">
        <div class="flex d-flex justify-content-start mt-4 mb-4">
        <h5>Basic info:</h5>
      </div>
      <form  method="post" action="<?php  htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="mb-3">
        <label for="first_name" class="form-label flex d-flex justify-content-start mb-3">First Name</label>
        <input type="text" class="form-control" name="firstname" id="first_name" required>
       
      <div class="mb-3">
        <label for="second_name" class="form-label flex d-flex justify-content-start mb-3 mt-4">Last Name</label>
        <input type="text" class="form-control" name="lastname" id="second_name" required>
      </div>
      
      <button type="submit" id="pk" class="btn btn-primary">NEXT</button>
  
    </form>
   
      </div>
     
    </div>
  </div>
</div>
  </body>
</html>