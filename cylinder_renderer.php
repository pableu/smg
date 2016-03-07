<?php

$width = 200;
$height = 200;
$stroke = 5;
$fontsize = 40;

?>

<svg
    xmlns="http://www.w3.org/2000/svg"
    width="900"
    height="450"
>


  <path
      style="fill:red;stroke:black;stroke-width:<? echo $stroke; ?>;"
      d="m <? echo $stroke/2; ?>,<? echo $width/8 + $stroke/2;?> a 4,1 0 0 0 <? echo $width;?> ,0 a 4,1 0 0 0 -<? echo $width;?>,0"
      id="top_circle"/>
  <path
      style="fill:red;stroke:black;stroke-width:<? echo $stroke; ?>;"
      d="m <? echo $stroke/2; ?>,<? echo $width/8 + $stroke/2;?> 0,<? echo $height/2;?> a 4,1 0 0 0 <? echo $width;?>,0 l 0,-<? echo $height/2;?> a 4,1 0 0 1 -<? echo $width;?>,0"
      id="upper_half"/>
  <path
      style="fill:lightgreen;stroke:black;stroke-width:<? echo $stroke; ?>;"
      d="m <? echo $stroke/2; ?>, <? echo $height/2 + $width/8 + $stroke/2;?> 0,<? echo $height/2;?> a 4,1 0 0 0 <? echo $width;?>,0 l 0,-<? echo $height/2;?> a 4,1 0 0 1 -<? echo $width;?>,0"
      id="lower_half"/>

  <text
      style="font-size: <?php echo $fontsize ?>px; font-family: sans-serif;"
      x="<?php echo $width + $stroke?>"
      y="<?php echo $width/8 + $stroke/2 + $height/2 + $fontsize/2 ?>"><tspan>12 mm</tspan></text>
  <text
      text-anchor="middle"
      style="font-size: <?php echo $fontsize ?>px; font-family: sans-serif;"
      x="<?php echo $width / 2?>"
      y="<?php echo $width/4 + $stroke + $height + $fontsize/2 + 10?>"><tspan>7 mm</tspan></text>

  <path
      style="fill:red;stroke:black;stroke-width:5;"
      d="m 600,100 a 4,1 0 0 0 200,0 a 4,1 0 0 0 -200,0"
      id="top_circle"/>
  <path
      style="fill:red;stroke:black;stroke-width:5;"
      d="m 600,125 0,100 a 4,1 0 0 0 200,0 l 0,-100 a 4,1 0 0 1 -200,0"
      id="upper_half"/>
  <path
      style="fill:lightgreen;stroke:black;stroke-width:5;"
      d="m 600,250 0,100 a 4,1 0 0 0 200,0 l 0,-100 a 4,1 0 0 1 -200,0"
      id="lower_half"/>
</svg>


