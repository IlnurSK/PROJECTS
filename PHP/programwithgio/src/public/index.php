<?php

// DateTime Object

require_once __DIR__ . '/../vendor/autoload.php';

//$dateTime = new DateTime();
//$dateTime = new DateTime('tomorrow 3:35pm');
//$dateTime = new DateTime('yesterday noon');
//$date = '15/05/2021 3:30PM';
//$date = '15/05/2021';
//$dateTime = new DateTime(str_ireplace('/', '.', $date));
//$dateTime = DateTime::CreateFromFormat('d/m/Y g:iA',$date);
//$dateTime = DateTime::CreateFromFormat('d/m/Y',$date)->setTime(0,0);
//
//var_dump($dateTime, new DateTime('15-05-2021'));

//echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;
////$dateTime = new DateTime('05/12/2021 3:30PM', new DateTimeZone('Europe/Amsterdam'));
////var_dump($dateTime);
//
//$dateTime->setDate(2021,4,21)->setTime(2,15);
//$dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));
////$dateTime->setDate(2021,4,21)->setTime(2,15);
//
//echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;
////var_dump($dateTime);

//$dateTime1 = new DateTime('05/25/2021 9:15 AM');
//$dateTime2 = new DateTime('03/15/2021 3:25 AM');
//$interval = new DateInterval('P3M2D');

//var_dump($dateTime1 < $dateTime2);
//var_dump($dateTime1 > $dateTime2);
//var_dump($dateTime1 == $dateTime2);
//var_dump($dateTime1 <=> $dateTime2);
//var_dump($dateTime2->diff($dateTime1));
//echo $dateTime2->diff($dateTime1)->days;
//echo $dateTime2->diff($dateTime1)->format('%Y years, %m months, %d days, %H, %i, %s') . PHP_EOL;
//echo $dateTime1->diff($dateTime2)->format('%R%a') . PHP_EOL;
//var_dump($interval);

//$dateTime = new DateTime('05/25/2021 9:15 AM');
//$interval = new DateInterval('P3M2D');
//$interval->invert = 1;
//$dateTime->add($interval);
//echo $dateTime->format('m/d/Y g:iA') . PHP_EOL;
//$dateTime->sub($interval);
//echo $dateTime->format('m/d/Y g:iA') . PHP_EOL;

//$from = new DateTime();
//$to = (new DateTime())->add(new DateInterval('P1M'));
//$to = (clone $from)->add(new DateInterval('P1M'));

//$from = new DateTimeImmutable();
//$to = $from->add(new DateInterval('P1M'));
////$to->add(new DateInterval('P1Y'));
//$to = $to->add(new DateInterval('P1Y'));
//echo $from->format('m/d/Y') . ' - ' . $to->format('m/d/Y') . PHP_EOL;

//$period =  new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P1D'), (new DateTime('05/31/2021'))->modify('+1 day'));
//$period =  new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P1D'), 3);
$period =  new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P3D'), 3, DatePeriod::EXCLUDE_START_DATE);
foreach ($period as $date) {
    echo $date->format('m/d/Y') . PHP_EOL;
}