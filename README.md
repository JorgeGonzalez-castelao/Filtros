# Filtros

Plugin "Empower With Words"

Este repositorio contiene un plugin de WordPress llamado "Empower With Words" que permite a los usuarios crear publicaciones con títulos y contenido, sometiendo este último a un análisis para determinar si su tono es positivo o negativo.
¿Cómo funciona?

El plugin utiliza dos matrices, una para palabras ofensivas y otra para palabras positivas. Analiza el contenido de la publicación contando la frecuencia de palabras ofensivas y positivas. Si hay más palabras ofensivas que positivas, el plugin emite un mensaje de error y bloquea la publicación.
Función "renym_wordpress_typo_fix":

Esta función toma un parámetro $text, que se supone es el contenido de la publicación o la página de WordPress. En su ejecución, reemplaza las palabras ofensivas por asteriscos utilizando la función str_replace de PHP. Esta función toma tres parámetros: la palabra a reemplazar, la palabra sustituta y el texto en el que se realizará el reemplazo.

php

function renym_wordpress_typo_fix( $text ) {
    global $swearingWords, $nonSwearingWords;
    return str_replace($swearingWords, $nonSwearingWords, $text);
}

Función "add_filter":

Esta función agrega un filtro al contenido de WordPress utilizando la función "renym_wordpress_typo_fix" que hemos creado. Se utiliza la función add_filter de WordPress, con el nombre del filtro a agregar ("the_content") y la función creada anteriormente como parámetros.

php

add_filter( 'the_content', 'renym_wordpress_typo_fix' );

the_content:

En WordPress, the_content es un gancho (hook) utilizado para mostrar el contenido principal de una publicación o página. Se emplea en el ciclo de WordPress para mostrar el contenido de la publicación en el área de contenido de la página. Este gancho se utiliza principalmente para agregar contenido adicional antes o después del contenido de la publicación.
