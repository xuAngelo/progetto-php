<!DOCTYPE html>
<html>

<head>
    <title>Tabella Pitagorica</title>
</head>

<body>

    <h1>Tabella Pitagorica</h1>

    <?php
    
    //impostare il bordo della tabella
    echo '<table border="1">';

    //Creazione della tabella pitgorica
    for ($i = 1; $i <= 10; $i++) {
     echo "<tr>";
        for ($k = 1; $k <= 10; $k++) {
            echo "<td>" . ($i * $k) . "</td>"; 

        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
    
    <br>
    <br>

    <a href="appunti_esercizio_a.html"> Per capirne di piu del sito clicca qui</a>

    <br>
    <br>
    <a href="index.html"> Torna alla Home </a>

</body>

</html>
