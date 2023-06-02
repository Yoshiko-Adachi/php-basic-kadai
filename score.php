<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>score</title>
</head>
<body>
  <p>
    <?php
    $score1 = 80; $score2 = 60; $score3 = 55; $score4 = 40;
    $score5 = 100; $score6 = 25; $score7 = 80; $score8 = 95;
    $score9 = 30; $score10 = 60;
    $scre_all = 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60;
    echo 'テストの合計点';
    echo '<br>';
    echo $score1 + $score2 + $score3 + $score4 + $score5 + $score6 +
    $score7 + $score8 + $score9 + $score10 . '点';
    echo '<br>';
    echo 'テストの平均点';
    echo '<br>';
    echo $scre_all / 10 . '点';
    ?>
  </p>
</body>
</html>