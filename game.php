<?php
session_start();
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
    die('Name parameter missing');
}
if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Luigy David Miranda Sandoval - f9e2270a </title>
  </head>
  <body>
<div class="holu">
    <?php
    //Verificar si esta iniciado sesion
    if ($_SESSION['valid'] = true) {
        echo "Bienvenido, " . $_SESSION['username'] . "!";
        echo "<br />";
     ?>
     </div>
     <form method="post">
     <select name="human">
     <option value="-1">Select</option>
     <option value="0">Rock</option>
     <option value="1">Paper</option>
     <option value="2">Scissors</option>
     <option value="3">Test</option>
     </select>
     <input type="submit" value="Play">
     <input type="submit" name="logout" value="Logout">
     </form>
     </div>
<?php

} else {
    echo "Porfavor de ingresar en la pagina!";
    header('Location: index.php');
    die(juego());
}

//Roca = 0
// Tijera 1
// Papel 2

$names = array('Rock', 'Paper', 'Scissors');
$human = isset($_POST["human"]) ? $_POST['human']+0 : -1;

$computer = 0; //
// TODO: Para la compu men

function xdsa($computer, $human) {
  if ( $human == 0 ) {
      return "Tie";
  } else if ( $human == 1 ) {
      return "You Win";
  } else if ( $human == 2 ) {
      return "You Lose";
  }
  return false;
      }
  $result = xdsa($computer, $human);

  if ( $human == -1 ) {
      print "Seleccione una opcion .\n";
  } else if ( $human == 3 ) {
      for($c=0;$c<3;$c++) {
          for($h=0;$h<3;$h++) {
              $r = xdsa($c, $h);
              print "Human=$names[$h] Computer=$names[$c] Result=$r\n";
          }
      }
  } else {
      print "Your Play=$names[$human] Computer Play=$names[$computer] Result=$result <br />";
  }


?>
</div>
</body>
</html>
