<?php
    include("includes/header.php");
  ?>

    <link rel="stylesheet" href="css/style.css">

    <!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php
      
    include("getContent.php");
      
  ?>



<?php
function connect()
    {
        try {
            $serveraddress = "localhost";
            $dbname = "databank_php";
            $username = "root";
            $password = "mysql";

            $conn = new PDO("mysql:host=$serveraddress;dbname=databank_php", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>

<?php
    include("includes/footer.php");
  ?>