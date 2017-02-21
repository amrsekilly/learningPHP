<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learning about arrays in PHP</title>
  </head>
  <body>
    <h1>Learning about Arrays in PHP</h1>
    <?php $months = ['Jan', 'feb', 'march', 'april', 'may', 'june', 'jul', 'aug', 'sept', 'oct', 'nov', 'dec'] ?>

    <h3>Year's Months:</h3>
    <ul>
      <?php foreach ($months as $month) {
        echo("<li>".ucwords($month)."</li>");
      } ?>

    </ul>
  </body>
</html>
