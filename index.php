<?php


/**
 * Schrijf een functie waarbij de kleur van de pagina
 * bepaald wordt op basis van tijd
 */

function GetTime()
{
    $time = date('H');
    $style = "";

    if ($time >= 6 && $time <= 18) {
        $style = $style . "light";
    } else {
        $style = $style . "dark";
    }

    echo $style;
}

/**
 * Schrijf een functie waarbij de waarde van een variable getoond wordt, hoeveel het
 * er zijn en welk type het is.
 */

/**
 * Schrijf een functie waarbij een array random een andere waarde toont vanuit de array
 */

/**
 * Verplaats alles naar een function directory, en require de function file.
 */

/**
 * Haal de presentatie van een variabele binnen
 */
