<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Je hebt gekozen voor een willekeurig woord</h1>
<?php
    $woorden = array('bit academy', 'henk' , "bob" , "schommel" , "glijbaan");
    $rand_keys = array_rand($woorden);
    setcookie('woord' , $woorden[$rand_keys] , time() + (86400 * 10) );
    echo $woorden[$rand_keys];
    ?>
    <form action="game.php" method="get">
      <button type="submit" name="button">Begin het spel</button>
    </form>
  </body>
</html>
