<?php

#SOCIAL MEDIA VARIABLES
$fb = "FACEBOOK";
$sk = "SLACK";
$tg = "TELEGRAM";


##Presentation
$hour = date("H");

if ($hour >= 7 && $hour < 12)
{

    $dayTime_composite = "Buenos días";

    $dayTime = "día";

    $timeFood = "desayuno";

    $article = "un";

}
else if ($hour >= 12 && $hour < 20)
{

    $dayTime_composite = "Buenas Tardes";

    $dayTime = "tarde";

    $timeFood = "almuerzo";

    $article = "una";

}
else if ($hour >= 20 && $hour < 24)
{

    $dayTime_composite = "Buenas Noches";

    $dayTime = "noche";

    $timeFood = "cena";

    $article = "una";

}
else if ($hour >= 0 && $hour < 7)
{

    $dayTime_composite = "Buenas Madrugadas";

    $dayTime = "madrugada";

    $timeFood = "comida madrugadora";

    $article = "una";

}




















?>
