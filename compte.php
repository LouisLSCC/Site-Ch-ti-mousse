<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

  <h1>Page de mousaillon</h1>

  <div class="">

  <?php if (isset($_GET["name"])) :
    $_SESSION['user'] = $_GET["name"];?>

      <p>Nom de mousaillon : <?php echo htmlspecialchars ($_GET["name"]);?></p>

  <?php else : ?>

      <p>Nom de mousaillon : Mousaillon fantome</p>

  <?php endif ?>
  </div>

  </body>


</html>
