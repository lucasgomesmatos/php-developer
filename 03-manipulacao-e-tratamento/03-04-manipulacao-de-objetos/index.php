<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name" => "Lucas",
    "company" => "Alpha",
    "mail" => "lgomes.lg99@gmail.com"
];

// Transformando um objeto.
$objProfile = (object) $arrProfile;

echo "<p> ARRAY <br> {$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
echo "<p> OBJECT <br>{$objProfile->name} trabalha na {$objProfile->company}</p>";


$ceo = $objProfile;

// Removendo a chave company do objeto.
unset($ceo->company);
var_dump($ceo);

$company = new StdClass();
$company->company = "Alpha";
$company->ceo = $ceo;

$company->manager = new StdClass();
$company->manager->name = "Maria";
$company->manager->mail = "maria@gmail.com";

var_dump($company);
/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump([
    "class" => get_class($date),
    "method" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parents" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime"),
]);

$expection = new PDOException();

var_dump([
    "class" => get_class($expection),
    "method" => get_class_methods($expection),
    "vars" => get_object_vars($expection),
    "parents" => get_parent_class($expection),
    "subclass" => is_subclass_of($expection, "Exception"),
]);

