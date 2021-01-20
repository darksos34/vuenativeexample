<?php

$authorName = "Jordy Capes";

function setAuthorName()
{
    global $authorName;
    $authorName = "Mister Coder";
}

setAuthorName();

echo $authorName;
?>
