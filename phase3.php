<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dob = htmlspecialchars($_POST["dob"]);
    $gender = htmlspecialchars($_POST["gender"]);

    $_SESSION['phase3_data'] = [
        'dob' => $dob,
        'gender' => $gender
    ];

    header('Location: phase4.php');
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
      <!-- Your content goes here -->

      <h1 class="text-center mb-3">SignUP Form</h1>
      <div class="text-center">
        <div>
        <div class="flex d-flex justify-content-start mt-4 mb-4">
        <h5>Date of birth:</h5>
      </div>
      
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="dob" class="flex d-flex justify-content-start">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>

            <div class="mb-3">
                <label for="gender" class="flex d-flex justify-content-start">Gender:</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class='mb-3'>
      <button type="submit" id="pk" class="btn btn-primary"> <a href="phase2.php">PREVIOUS</a></button>
      <button type="submit" id="pk" class="btn btn-primary">NEXT</button>
</div> 
        </form>
   
      </div>
     
    </div>
  </div>
</div>
  </body>
</html>

