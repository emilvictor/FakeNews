<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.



require __DIR__.'/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>RealFakeNewsToday</title>
</head>

<body>

<header>
  <h1>Todays news</h1>
</header>

    

  <?php foreach($newsFeed as $item) : ?>

    <?php echo $item['Title']; ?>
    <br>
    <?php echo $item['Author'];//This gives authors id's (does not gives names) ?>
    <br>
    <?php echo $authors[ $item['Author'] ] ; ?>
    <br>
    <br>

  <?php endforeach; ?>

  

   

</body>

</html>


<?php 
$id = 2;
echo $authors[$id];