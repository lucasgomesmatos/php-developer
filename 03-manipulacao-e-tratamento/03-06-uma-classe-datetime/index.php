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


$birth = new DateTime(date("Y") . "-01-02");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth);

var_dump([$birth, $diff]);


/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

