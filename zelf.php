<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Zelf kiezen</title>
  </head>
  <body>
<h1>Je hebt gekozen om zelf een woord te bedenken</h1>
<form  action="#" method="post">
<input type="text" name="woord">
<button type="submit" name="button">Kies dit woord</button>
<?php
if (isset($_POST['woord'])) {
$hetwoord = strtolower($_POST['woord']);
setcookie('woord' , $hetwoord , time() + (86400 * 10) );
header("Location: game.php");
}
?>

</form>
  </body>
</html>
