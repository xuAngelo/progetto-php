<!DOCTYPE html>
<?php
    session_start();   // starta la sessione 
   if($_SERVER["REQUEST_METHOD"] === "POST"){   
      $logUser = $_POST['logUser'];    //passagio dei valori di Login
      $logPassword = $_POST['logPassword'];
  if(($logUser === $_SESSION['username']  || $logUser === $_SESSION['email']) && $logPassword === $_SESSION['password']){ //confronto credenziali di login
        header('Location: EsercizioB.php');  //se giuste porta a pagina dell EsercizioB.php
        exit();
   } else {
           $errore = "Credenziali errate";    //creazione messaggio errore in caso credenziali errate
          }
}
  ?>
<html>
<head>
<title> Login </title>
</head>
<body>
  <form action="Login.php" method="POST">
        <?php if (isset($errore)) { ?>   
            <p style="color: red;"><?php echo $errore; ?></p>         <?php } ?>
       <label for="logUser">Username o Mail:</label><br>
         <input type="text" id="logUser" name="logUser"><br><br>
       <label for="logPassword">Password:</label><br>
         <input type="password" id="logPassword" name="logPassword"><br><br>
         <input type="submit" value="Login">
</form>
</body>
</html>
        
    
