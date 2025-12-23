<?php
do {

$intro = ("Heyy let's make a nice christmas tree together!! ");
$leafs_width = (int) trim(readline("Choose a width for the Leafs (max.60) : "));
if ($leafs_width > 60) {
  echo "Mhh that's too big, try less than 60 of width, try again!\n";
  exit;
}
$parity = ($leafs_width % 2 === 0) ? "even" : "odd";
$wood_width = (int) trim(readline("Choose a width for the wood (should be less than the width of your leafs by at least 2 and has to be {$parity} ! width of leafs : {$leafs_width}) : "));
if ($wood_width > $leafs_width || $wood_width % 2 !== 0){
  echo "No try again!\n";
  exit;

}
$leafs_height = floor($leafs_width / 2);
$leafs_height_message = "We picked the height for you so the tree will look prettier";

$wood_height = readline("choose a height for the wood (min.1) : ");
if ($wood_height < 1 ){
  echo "No try again!\n";
  exit;
} 
if ($wood_height > $leafs_height){
  echo "No try again!\n";
  exit;
}


$ready_message = strtolower(trim(readline("Are you ready 🎄? (y/n)")));
if ($ready_message === "y") {


// ===== STAR =====
if ($leafs_width % 2 === 0) {
    // even width → 2 stars
    $star = "**";
} else {
    // odd width → 1 star
    $star = "*";
}

$starPadding = intdiv($leafs_width - strlen($star), 2);

echo str_repeat(' ', $starPadding);
echo "\e[1;31m{$star}\e[0m" . PHP_EOL;
  
// ===== LEAVES =====

$topWidth = $leafs_width - 2 * ($leafs_height - 1);

if ($topWidth < 1) {
    echo "No try again !";
    exit;
}

for ($i = 0; $i < $leafs_height; $i++) {

    $currentWidth = $topWidth + ($i * 2);

    $padding = intdiv($leafs_width - $currentWidth, 2);

    echo str_repeat(' ', $padding);
    echo "\e[0;32m" . str_repeat('x', $currentWidth) . "\e[0m" . PHP_EOL;
}


  // ===== WOOD =====
  $padding = intdiv($leafs_width - $wood_width, 2);

  for ($k = 0; $k < $wood_height; $k++) {
    echo str_repeat(' ', $padding);
    echo "\e[0;30m";
    for ($l = 0; $l < $wood_width; $l++) {
      echo 'o';
    }
    echo "\e[0;30m" . PHP_EOL;
}
}
$restart = strtolower(trim(readline("Another christmas tree? (y/n) : ")));
} while ($restart === "y");

?>