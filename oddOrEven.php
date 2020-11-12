<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Odd or Even</title>
    <style>
      body { text-align: center;}
    </style>
  </head>
  <body>
    <form action="oddOrEven.php" method="post">
      Check if a number is Odd or Even: <br> <input type="text" name="oddOrEven">
      <input type="submit">
    </form>
    <?php

    $int = $_POST["oddOrEven"];

    if ($int %2 != 0) {
      echo "The number is Odd: Odd Numbers are any integer that cannot be divided exactly by 2 is an odd number.";
    } elseif ($int %2 == 0) {
      echo "The number is Even: Even Numbers are any integer that can be divided exactly by 2 is an even number.";
    }
     ?>
  </body>
</html>
