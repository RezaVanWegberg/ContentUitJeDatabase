<?php 
    require "getContent.php";
    $content = getContent(1);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->

<?php 
  include('includes/header.php')
?>

	<!-- Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. -->

<?php 
if (array_key_exists('id', $_GET)) {

  if($_GET['id'] == '1') {
    $content = getContent(1); 
  } else if($_GET['id'] == '2') {
    $content = getContent(2);
  } else if($_GET['id'] == '3') {
    $content = getContent(3);
  } else if($_GET['id'] == '4') {
    $content = getContent(4);
  }

} else {
  $content = getContent(1);
}
?>

	<!-- Laat hier de content die je op hebt gehaald uit de database zien op de pagina. -->
<div id="nier-automata">
  <h1><?= $content['name'] ?></h1>
</div>

<!-- <img src=<?= $content['image']?> alt="image of nier-automata cover art"> -->
<article class="description">
    <h2>Description</h2>
    <!-- <p><?= $content['description'] ?></p> -->
</article>

	<!-- laad hier via php je footer in (vanuit je includes map)-->

<?php
  include('includes/footer.php');
?>

</body>
</html>
