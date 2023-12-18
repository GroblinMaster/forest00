<?php
if( isset($_POST['memory'] ) )
{
    $txt= $_POST['memory'] . PHP_EOL; 
    file_put_contents('input/memories.txt', $txt, FILE_APPEND);
    header("Location: temple.html");
    exit();
}   
?>

