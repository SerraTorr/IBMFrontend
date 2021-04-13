<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Zehar</title>
  </head>
  <body>
    <div class="offset-md-4 col-md-4 col-8 offset-2 " >
        <div class="row"></div>
        <form style="margin-top: 30%" class="bg-light px-4 py-4 card" action="./login.php" method="POST">
          <center> <h1> User Login </h1> </center>
          <?php session_destroy(); ?>
          <input type="text" name="uname" placeholder="Username" class="col-12 offset-3 offset-md-0 col-md-6 my-2 mx-auto form-control">
          <input type="text" name="pass" placeholder="Password" class="col-12 offset-3 offset-md-0 col-md-6 my-2 mx-auto form-control">
          <input type="submit" name="submit" value="Login" class="col-4 offset-4 btn btn-primary">
        <!-- <p class="mt-4"> New here <a href="./frontend/signup.php">signup</a> </p> -->
        </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>