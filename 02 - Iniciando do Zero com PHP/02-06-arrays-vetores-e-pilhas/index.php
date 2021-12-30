<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1, 2, 3);
$arrB = [1,2,3];

var_dump($arrB);

$arrayIndex = [
    "Lucas",
    "Maria",
    "Pedro"
];

$arrayIndex[] = "João";

echo"<pre>";
var_dump($arrayIndex);
echo "</pre>";

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
   "vocal" => "Lucas",
    "solo_guitar" => "Maria",
    "base_guitar" => "Pedro",
    "bass_guitar" => "João",
];

$arrayAssoc["drump"] = "Paulo";

echo"<pre>";
var_dump($arrayAssoc);
echo "</pre>";

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$lucas = ["Lucas", "Mic"];

$maria = ["name" => "Maria", "intrument" => "Guitar"];

$instruments = [
    $lucas,
    $maria
];

echo"<pre>";
var_dump($instruments);
echo "</pre>";


echo"<pre>";
var_dump([
    "lucas" => $lucas,
    "maria" => $maria
]);
echo "</pre>";
/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);


$acdc = [
    "band" => "AC / DC",
    "vocal" => "Lucas",
    "solo_guitar" => "Maria",
    "base_guitar" => "Pedro",
    "bass_guitar" => "João",
    "drump" => "Paulo",
];


echo "<p> O vocal da banda AC/DC é {$acdc["vocal"]}, 
e junto com {$acdc["solo_guitar"]} fazem um ótimo show de rock! </p>";

$pearl = [
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drump" => "Jack",
];

$rockBands = [
  "acdc" => $acdc,
  "pearl_jam" => $pearl,
];

echo"<pre>";
var_dump($rockBands);
echo "</pre>";

echo "<p> {$rockBands['pearl_jam']['vocal']} </p>";

foreach($acdc as $item) {
    echo "<p>{$item}</p>";
}

foreach($acdc as $key =>  $value) {
    echo "<p>{$value} is a {$key} of band!</p>";
}

foreach($rockBands as $rockBand) {
    echo"<pre>";
    var_dump($rockBand);
    echo "</pre>";

    $art = "<article>
    <h1>%s</h1>
    <p> %s</p>
    <p> %s</p>
    <p> %s</p>
    <p> %s</p>
    <p> %s</p>
    </article>";

    vprintf($art, $rockBand);
}

