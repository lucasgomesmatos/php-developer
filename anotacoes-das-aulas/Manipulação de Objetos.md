# Manipulação de Objetos

## Transformando um *Array em Objeto* em PHP.

A variável *$objProfile* vai receber o array *$arrProfile* transformando em objeto.

```php
$arrProfile = [
    "name" => "Lucas",
    "company" => "Alpha",
    "mail" => "lgomes.lg99@gmail.com"
];

$objProfile = (object) $arrProfile;
```

## Removendo uma chave do objeto em PHP.

A função unset remove a chave desejada.

```php
unset($objProfile->company);
var_dump($objProfile);
```



