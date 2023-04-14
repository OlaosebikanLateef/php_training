<?php
include_once ('config.php');

$user = new Config();

$userDetails = $user->fetchUserProfile(1);




?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
          <!-- form start -->
          <form action="submitprofile.php" class="form-action form-control" method="post">
              <div class="row container">
        
                    <div>
                        <label for="fo">First Name</label><br>
                        <input type="text" name="firstname" placeholder="Enter Your First Name" value="<?php echo $userDetails['firstname'] ?>">
                    </div>
                    <div>
                        <label for="lastname">Last Name</label><br>
                        <input type="text" name="lastname" placeholder="Enter Your Last Name" value="<?php echo $userDetails['lastname'] ?>">
                    </div>
                    <div>
                        <label for="email">Email</label><br>
                        <input type="email" name="email" placeholder="Enter Your Last Email" value="<?php echo $userDetails['email'] ?>">
                    </div>
                   
                    <button type="submit" class="btn btn-success">Update</button>
              </div>
            </form>
  

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
