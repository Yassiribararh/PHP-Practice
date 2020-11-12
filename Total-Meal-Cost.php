
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculating the Total meal cost using php</title>
    <style>
      body { text-align: center;}
    </style>
  </head>
  <body>
    <h1>This is a simple program to calsulate the total spent on a single meal</h1>
    <form action="Total-Meal-Cost.php" method="post">
      What was the Cost of the meal? <input type="number" step="0.1" name="meal_cost">GBP<br>
      How much was the percentage of the tip? <input type="number" name="tip_percent">%<br>
      What was the tax percentage? <input type="number" name="tax_percent">%<br>
      <input type="submit">
    </form>
  </body>
</html>
<?php
/* Objective
In this challenge, you'll work with arithmetic operators. Check out the Tutorial tab for learning materials and an instructional video!

Task
Given the meal price (base cost of a meal), tip percent (the percentage of the meal price being added as tip), and tax percent (the percentage of the meal price being added as tax) for a meal, find and print the meal's total cost.

Note: Be sure to use precise values for your calculations, or you may end up with an incorrectly rounded result!

Input Format

There are  lines of numeric input:
The first line has a double,  (the cost of the meal before tax and tip).
The second line has an integer,  (the percentage of  being added as tip).
The third line has an integer,  (the percentage of  being added as tax).

Output Format

Print the total meal cost, where  is the rounded integer result of the entire bill ( with added tax and tip).
*/

// Complete the solve function below.
function solve($meal_cost, $tip_percent, $tax_percent) {
 echo round($meal_cost + (($tip_percent / 100) * $meal_cost) + ($tax_percent / 100) * $meal_cost);
}


echo "The Total money spent on this meal is:";
echo solve($_POST["meal_cost"], $_POST["tip_percent"], $_POST["tax_percent"]);
echo " GBP";
?>
