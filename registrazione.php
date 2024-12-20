<!DOCTYPE HTML>
<?php
 session_start();
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $codice = $_POST['codice'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    if ($password === $conf_password) {
        // Memorizza i dati nella sessione
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['codice'] = $codice;
        $_SESSION['password'] = $password;

        header("Location:Login.php");
        exit();
    } else {
        $errore = "Le password non corrispondono.";
    }
}


?>
<html>
<head>
  <title>Registrazione</title>
</head>
<body>
  <center>
    <h1>Registrazione</h1>
    <form action="Registrazione.php" method="POST">
      <label for="username">username:</label><br>
      <input type="text" id="username" name="username"><br><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br><br>
      
      <label for="codice">CodiceFiscale:</label><br>
      <input type="text" id="codice" name="codice"><br><br>

      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" required><br><br>

      <label for="conf_password">Conferma Password:</label><br>
      <input type="password" id="conf_password" name="conf_password" required><br><br>

      <input type="submit" value="Registrati">
        
       <br>
       <br>
      <a href="appunti_esercizio_c.html">Per saperne fi piu del sito clicca qui</a>
        <br>
        <br>
      <a href="index.html">Torna alla home</a>
    </form>
  </center>
</body>
</html>