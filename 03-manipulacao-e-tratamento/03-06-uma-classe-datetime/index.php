<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1999-01-02");
$dateStatic = DateTime::createFromFormat("d/m/Y", "10/03/2020");

var_dump(
  $dateNow,
    $dateBirth,
    $dateStatic
);

var_dump(
  $dateNow->format(DATE_BR),
    $dateNow->format("d"),
);

echo "<p>Hoje é dia {$dateNow->format('d')} do mês {$dateNow->format('m')} de {$dateNow->format('Y')}</p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    $newTimeZone,
    $newDateTime,
    $dateNow
]);
/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M");

var_dump([$dateInterval,]);


$dateTime = new DateTime('now');
$dateTime->add($dateInterval);
$dateTime->sub($dateInterval);

var_dump([$dateTime]);


$birth1 = new DateTime(date("Y") . "-01-02");

// próximo aniversário
$birth2 = new DateTime( "2023-01-02");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth1);
$diff2 = $dateNow->diff($birth2);

var_dump([$birth1, $diff, $diff2]);

if($diff2->invert){
    echo "<p>Seu aniversário foi a {$diff2->days} dias</p>";
} else {
    echo "<p>Faltam {$diff2->days} dias para seu aniversário!</p>";
}

$dateResources = new DateTime("now");

var_dump([
    $dateResources->format(DATE_BR),
    $dateResources->sub(DateInterval::createFromDateString("15days"))->format(DATE_BR),
    $dateResources->add(DateInterval::createFromDateString("15days"))->format(DATE_BR)
]);




/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$interval = new DateInterval("P1M");
$end = new DateTime("2023-01-20");

$period = new DatePeriod($start, $interval, $end);

var_dump([
    $start->format(DATE_BR),
    $interval->format(DATE_BR),
    $end->format(DATE_BR)
], $period, get_class_methods($period));


echo "<h1>Sua Assinatuara: </h1>";
foreach ($period as $recurrences) {
    echo "<p>Proxima vencimento {$recurrences->format(DATE_BR)}</p>";
}