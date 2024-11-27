<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $myVariable = "";
    if ( isset( $_POST['myVariable'] ) ){
      $myVariable = $_POST['myVariable'];
    }
    echo "<h1>My Program</h1>\n";
    echo "<p>My Variable is = ".$myVariable."</p>\n";
    ?>
    
  </body>
  
</html>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="manifest" href="/site.webmanifest">
  <div id="hello-world">favicon.</div>
  <title>Favicon</title>
  <!-- Textfield with Floating Label -->

  <form action="#">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" id="sample3">
      <label class="mdl-textfield__label" for="sample3">Text...</label>
    </div>
  </form>
  <!-- Colored FAB button with ripple -->
  <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
    <i class="material-icons">add</i>
  </button>
  </div>

  <form action="welcome.php" method="POST">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="name"><br>
    <input type="submit">
  </form>
  Welcome <?php echo $_POST["name"]; ?><br>
  Your email address is: <?php echo $_POST["email"]; ?>
  </body>

</html>
