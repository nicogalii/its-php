<?php

$date1 = new DateTime("2011-03-24");
$date2 = new DateTime("2024-06-26");
$interval = $date1->diff($date2);

echo "Differenza: " . $interval->y . " anni, " . $interval->m . " mesi, " . $interval->d . " giorni.";