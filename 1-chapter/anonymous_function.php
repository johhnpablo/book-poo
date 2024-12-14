<?php

$accent_remove = function ($string) {
    $a = [
        "á", "à", "â", "ã", "ä", "é", "è", "ê", "ë",
        "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö",
        "ú", "ù", "û", "ü", "Á", "À", "Â", "Ã", "Ä",
        "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó",
        "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü"
    ];

    $b = [
        "a", "a", "a", "a", "a", "e", "e", "e", "e",
        "i", "i", "i", "i", "o", "o", "o", "o", "o",
        "u", "u", "u", "u", "A", "A", "A", "A", "A",
        "E", "E", "E", "E", "I", "I", "I", "I", "O",
        "O", "O", "O", "O", "U", "U", "U", "U"
    ];

    return str_replace($a, $b, $string);
};

$names = [
    "João Álvares de Almeida",
    "Márcia Figueirêdo da Silva",
    "André Luís Pereira D'Ávila",
    "José Antônio de Souza Júnior",
    "Sílvia Márcia Rodrigues Coração",
    "Júnior Lázaro d'Assunção",
];

print $accent_remove( "João Álvares de Almeida");

$r = array_map($accent_remove, $names);

print_r($r);