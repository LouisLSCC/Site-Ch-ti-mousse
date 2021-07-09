<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <header>

     <div class="titre">
      <h1>Page de mousaillon</h1>
     </div>
      <div id="navbar">
        <a href="home.html">
          <button class="tablink" >Accueil</button>
        </a>
        <a href="événement.html">
          <button class="tablink" >Evénement</button>
        </a>
        <a href="about.html">
          <button class="tablink" >About</button>
        </a>
        <a href="compte.php">
          <button class="tablink" onclick="">Compte</button>
        </a>
      </div>

    </header>

  <div class="content-box">
    <?php if (isset($_GET["name"])) :
      $_SESSION['user'] = $_GET["name"];?>

        <p>Nom de mousaillon : <?php echo htmlspecialchars ($_GET["name"]);?></p>

    <?php else : ?>

        <p>Nom de mousaillon : Mousaillon fantome</p>

    <?php endif ?>
  </div>

  </body>


</html>
