<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Multiplication table</title>
    <style>
      body { text-align: center;}
    </style>
  </head>
  <body>
    <form action="multiplication-table.php" method="post">
      Please enter a number:  <br> <input type="text" name="number">
      <input type="submit">
    </form>
    <br>

    <?php

    $n = $_POST["number"];

    //starting from index 1 we go through a loop of numbers from 1 to 10
    for ($i= 1; $i <= 10; $i++) {

    echo "$n x $i = ", $n * $i;
    echo "<br>";
    }
     ?>
  </body>
</html>
