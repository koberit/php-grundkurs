<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP Tutorial</title>
</head>
<body>

  <?php
  //PHP MYSQL

  $server = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "phpGrundkurs";

  $db = new mysqli($server,$user,$pass, $dbname);

  if($db->connect_error){
    die("Verbindung fehlgeschlagen: " . $db->connect_error);
  }

  $sql= "SELECT * FROM Kunden";

  $ergebnis = $db->query("SET NAMES 'utf8'");
  $ergebnis = $db->query($sql);


  if($ergebnis->num_rows >0){

    echo "<table><tr><th>ID</th><th>Vorname</th><th>Nachname</th><th>Erstellt am</th></tr>";

    while($row = $ergebnis->fetch_assoc()){
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['vorname'] . "</td>";
      echo "<td>" . $row['nachname'] . "</td>";
      echo "<td>" . $row['erstellt_am'] . "</td>";
      echo "</tr>";
    }

    echo "</table>";

  }else{
    echo "Leider nichts gefunden";
  }


  $db->close();

   ?>

</body>
</html>
