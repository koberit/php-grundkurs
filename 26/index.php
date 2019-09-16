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

  $sql= "UPDATE Kunden SET nachname='ändern' WHERE id = 1";

  $db->query("SET NAMES 'utf8'");

  if($db->query($sql)){
    echo "Update erfolgreich";
  }else{
    echo "Leider fehlgeschlagen";
  }

  $db->close();

   ?>

</body>
</html>
