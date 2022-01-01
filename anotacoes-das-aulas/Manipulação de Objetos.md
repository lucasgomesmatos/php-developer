# Manipulação de Objetos

## Transformando um *Array em Objeto* em PHP.

A variável *$objProfile* vai receber o array *$arrProfile* transformando em objeto.

```ph
$arrProfile = [
    "name" => "Lucas",
    "company" => "Alpha",
    "mail" => "lgomes.lg99@gmail.com"
];

$objProfile = (object) $arrProfile;
```

