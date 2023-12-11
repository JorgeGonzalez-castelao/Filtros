<?php

/**
 * @package Conquer_with_Words
 * @version 1.0.0
 */
/*
Plugin Name: Conquer with Words
Plugin URI: http://wordpress.org/plugins/conquer_with_words/
Description: This is not just a plugin, it aims to help you conquer the world with words.
Author: Jorge Gonzalez
Version: 1.0.0
Author URI: http://jorgeGonzalez-castelao/
*/

/*
$words= array("Shoot the words!",
    "Pull the trigger and speak!",
    "Shot up, please",
    "Shot before talk!");

// This just echoes the chosen line, we'll position it later.
function conquer_with_words_get_lyric($words){
    //These are the lyrics to Conquer with Words
    $lyrics = $words[rand(0,count($words)-1)];

    echo $lyrics;
    }

conquer_with_words_get_lyric($words);
*/

$swearingWords = array("Mierda",
    "Coño",
    "Joder",
    "Gilipollas",
    "Cabron",
    "Puta",
    "Puto"
);

$nonSwearingWords = array("Miercoles",
    "Caramba",
    "Jope",
    "Tonto",
    "Cabra",
    "Pumba",
    "Pancho"
);

//Cambiar WordPress por WordPressDAM
function renym_wordpress_typo_fix($text)
{
    global $swearingWords, $nonSwearingWords;
    return str_replace($swearingWords, $nonSwearingWords, $text);
}

add_filter('the_content', 'renym_wordpress_typo_fix');