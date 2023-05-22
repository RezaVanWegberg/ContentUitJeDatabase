<?php 
    $inhoud = getId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($inhoud as $inhoud){ ?>
        <h1><?= $inhoud['name'] ?></h1>
        <p><?= $inhoud['description'] ?></p>
        <img src=<?= $inhoud['image']?> alt="image"  >

    <?php } ?>

</body>
</html>

<?php
function getId($id){

// maak een verbinding
    $connection = connect($id);

// maak een query
    $query = "SELECT * FROM onderwerpen WHERE id = $id";


    // $query = "SELECT * FROM onderwerpen WHERE name = " +  $_GET['name']"";


// voorbereid een query
    $statement = $connection->prepare($query);

// voer de query uit
    $statement->execute();

// haal de result op
    $result = $statement->fetchALl();

    return $result;

}

?>