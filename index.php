<?php include_once("header.php") ?>
  

            <div class="col-md-12">
                <form action="submitregister.php" method="POST">
                    <div>
                        <label for="fo">First Name</label>
                        <input type="text" name="firstname" placeholder="Enter Your First Name">
                    </div>
                    <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" placeholder="Enter Your Last Name">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Last Email">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password">
                    </div>
                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>