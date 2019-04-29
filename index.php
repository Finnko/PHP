<?php
$title = 'PHP урок 2';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
   <div class="task1">
       <?php
       $a = -5;
       $b = 6;

       if ($a >= 0 && $b >= 0) {
           echo $a - $b;
       } else if ($a < 0 && $b < 0) {
           echo $a * $b;
       } else {
           echo $a + $b;
       }
       ?>
   </div>
</body>
</html>