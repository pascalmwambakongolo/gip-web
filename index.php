<?php
$gip =microtime(true);
echo 'test'
   //affichage du temps ?>
<div style="position:fixed; bottom:0; background : #5389a2; color: #fff; line-height:30px; height:30px; right:0; padding-right:30px; text-align:right;">

<?php 
echo 'Page générée en '.round(microtime(true) - $gip, 5). 'secondes';
?></div>
