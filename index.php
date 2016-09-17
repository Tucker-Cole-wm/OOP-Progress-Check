<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OOP in PHP</title>

    <?php include('class_lib.php'); ?>
  </head>
  <body>

  </body>
</html>

<?php
$zues = new name('Zues Yousif');
echo "Zues' full name: " . $zues->get_customer() . '<br />';

$kyle = new name('Kyle Shumway');
echo "Kyle's full name: " . $kyle->get_customer();
?>
