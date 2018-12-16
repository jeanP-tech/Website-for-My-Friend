<!DOCTYPE html>
<html>
  <head>
    <title>Cat-Asteroid</title>
    <link rel=stylesheet href='styles.css' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body class="text-center" id="register_body">
    <form class="form-signin" action="checklogin.php" method="POST">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
      <label for="inputEmail" class="sr-only">ID</label>
      <input name="username" type="text" id="inputEmail" class="form-control" placeholder="ID" required autofocus>
      <label for="inputword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <button id="sign_button" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

  </body>
  </body>
</html>
