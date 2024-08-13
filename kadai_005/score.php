<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_005</title>
 </head>
 
 <body>
     <p>
         <?php
         // 四則演算
        $score1 =80;
         echo  "score1 {$score1}";
         echo '<br>';
         $score2 =60;
         echo "score2 {$score2}";
         echo '<br>';
         $score3 =55;
         echo "score3 {$score3}";
         echo '<br>';
         $score4 =40;
         echo "score4 {$score4}";
         echo '<br>';
         $score5 =100;
         echo "score5 {$score5}";
         echo '<br>';
         $score6 =25;
         echo "score6 {$score6}";
         echo '<br>';
         $score7 =80;
         echo "score7 {$score7}";
         echo '<br>';
         $score8 =95;
         echo "score8 {$score8}";
         echo '<br>';
         $score9 =30;
         echo "score9 {$score9}";
         echo '<br>';
         $score10 =60;
         echo "score10 {$score10}";
         ?>
     </p>
     <p>
         <?php
         $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
         echo "合計点 {$total}";
         echo '<br>';
         $avrege =$total/10;
         echo "平均点 {$avrege}";
         ?>
     </p>

 </body>
 
 </html>
