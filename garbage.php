#!/usr/bin/php
<?php
echo "Right now, this script is trash. Soon, it will be platinum trash.".PHP_EOL;
$newArray = array();
$newArray[] = 1;
$newArray[] = 2;
$newArray[] = 3;
$newArray[4] = 5;
$newArray[] = 10;
$newArray[] = 20;
$newArray[ayy] = blue;
$newArray[lmao] = applesauce;
function agentOrange($word, array $arrayIn = NULL)
{
  if ($arrayIn === NULL)
  {
    echo __FILE__.":".__LINE__.": NULL ARRAY".PHP_EOL;
    return NULL; 
  }
  $return = "Array not found, dummy.";
  foreach ($arrayIn as $arraySubstance)
  {
    echo __FILE__.":".__LINE__.": $word - $arraySubstance".PHP_EOL;
    $return .= $ar;
  }
  return $return;
}
var_dump($newArray);
echo __FILE__.":".__LINE__.":array size = ".count($newArray).PHP_EOL;
foreach ($newArray as $arrayObject)
{
  echo "array value:\" $arrayObject".PHP_EOL;
}
echo "C style:\n";
for ($i = 0;$i < count($newArray);$i++)
{
  echo "array value: ".$newArray[$i].PHP_EOL;
}
$ret = agentOrange("davey in the navy");
$ret = agentOrange("davy in the navy",$newArray);
echo $ret.PHP_EOL;
echo "Test PHP END".PHP_EOL;
?>
