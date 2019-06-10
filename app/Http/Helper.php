<?php

/*
 * Globální funkce: activeItem
 * @param $urls : Adresa nebo adresy, při kterých se má classa přidat
 * @param $class : Jméno classy, která se má přidat
 * @param $tag : Zda se má classa přidat i s html tagem
 * */
function activeItem($urls, $class = 'active', $tag = false)
{
    if ( request()->is( is_array($urls) ? $urls : [$urls] ) )
        return $tag ? "class={$class}" : $class;
}
