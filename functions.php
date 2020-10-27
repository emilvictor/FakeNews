<?php

declare(strict_types=1);

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

function getAuthor( $item,  $authors){

    return $authors[$item] ;
};


function getNewsFeed($authors, $newsFeed){


    usort($newsFeed, "sortFunction");


    foreach($newsFeed as $item) : ?>

        <h3><?php echo $item['Title']; ?></h3>
        <?php echo "Written by: " .  getAuthor($item['Author'], $authors) ; ?>
        <br>
        <br>
        <?php echo $item['Content'];?>
        <br>
        <?php echo $item['Date']; ?>
        <br>
    
        <button><?php echo "Like: " . $item['Likes']; ?> </button>
    
        <br>
    
      <?php endforeach;
}



function sortFunction($a,$b) {
    return strtotime($b["Date"]) - strtotime($a["Date"]);
}




