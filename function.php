<?php

function drawMonster(int $type, int $size):void {

?>


 <img src="picture<?= $type; ?>.png" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 


<?php
}