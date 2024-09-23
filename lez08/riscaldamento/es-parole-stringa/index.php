<?php

function wordsInString($string)
{
    $counter = 1;
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === " ") {
            $counter++;
        }
    }

    return $counter;
}

echo wordsInString("Ciao mi chiamo Stefano Cherio");