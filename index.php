<?php



require __DIR__.'/header.php';

require __DIR__.'/data.php';

require __DIR__.'/functions.php';

?>


<article>

<h1>Todays news</h1>



  <?php getNewsFeed($authors, $newsFeed); ?>

  <?php echo strtotime('october 5th'); ?>

</article>

<?php 


require __DIR__.'/footer.php';

?>