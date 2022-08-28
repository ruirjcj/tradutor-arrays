<?php

require __DIR__.'/vendor/autoload.php';
use \App\Text\Translate;

$targetLanguages = ['en', 'es'];

$array = array();

foreach($array as $key=>$value)
{
    $keys[] = $key;
}
$textoString = Translate::separaString($array);

echo "<p><b>Tradução INGLÊS</b></p>";
$traducao = Translate::traduzir($textoString, $targetLanguages)['en'];
$arrayFinal = Translate::juntarArray($traducao);
echo "return [ <br>";
for ($x=0; $x < sizeof($arrayFinal)-1; $x++)
{
    echo "'" .$keys[$x] . "'" . " => " . "'" . $arrayFinal[$x] . "'" . "<br>";
}
echo "]";


echo "<p><b>Tradução ESPANHOL</b></p>";
$traducao = Translate::traduzir($textoString, $targetLanguages)['es'];
$arrayFinal = Translate::juntarArray($traducao);
echo "return [ <br>";
for ($x=0; $x < sizeof($arrayFinal)-1; $x++)
{
    echo "'" .$keys[$x] . "'" . " => " . "'" . $arrayFinal[$x] . "'" . "<br>";
}
echo "]";



?>