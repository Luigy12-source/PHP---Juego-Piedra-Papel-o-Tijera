<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Luigy David Miranda Sandoval - f9e2270a </title>
  </head>
  <body>
    <?php
            $msg = '';
            $salt = 'XyZzy12*_';
            $stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';
            $md5 = hash('md5', 'XyZzy12*_php123');
            if (isset($_POST['login']) && empty($_POST['who']) && empty($_POST['pass'])) {
  echo "Los campos estan vacios!";
               }else {
                 if (isset($_POST['login']) && !empty($_POST['who'])
                    && !empty($_POST['pass'])) {
                 if ($_POST['who'] == 'umsi@umich.edu' &&
                    $_POST['pass'] == 'php123') {
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();
                    $_SESSION['username'] = $_POST['who'];
                    header("Location: game.php?name=".urlencode($_POST['who']));
                 }else {
                    $msg = 'El usuario o Contraseña no son validos';
                    echo $msg;
                 }
               }
            }

         ?>
    <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
  <div>
    <h5>Numero de Identificacion:</h5>
    <input type="text" name="who" placeholder="Who">
  </div>
</div>
<div class="credenciales">
  <div>
    <h5>Contraseña:</h5>
    <input type="password" name="pass" placeholder="Pass">
  </div>
</div>
<!--Boton de Ingresar-->
<button class = "btn btn-lg btn-primary btn-block" type = "submit"
   name = "login">Log In</button>
</form>
               </div>
            </div>
        </div>

    </form>
  </body>
</html>
