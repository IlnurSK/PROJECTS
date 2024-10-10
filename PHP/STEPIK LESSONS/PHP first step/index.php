<?php

function lowest_number(int $x, int $y, int $z)
{
  if ($x <= $y && $x <= $z) {
      return $x;
  } elseif ($y <= $x && $y <= $z) {
      return $y;
  } return $z;
}

echo lowest_number(7,10,2);
echo lowest_number(4,4,1);
echo lowest_number(3,3,5);
echo lowest_number(6,7,6);




