<?php
$side1=12;
$side2=23;
$side3=34;
$peri=($side1 + $side2 + $side3)/2;
$area=sqrt($peri*($peri-$side1)*($peri-$side2)*($peri-$side3));
echo "$area";