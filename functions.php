<?php 


function generate_password($length)
{
    $generated_password = "";

    for ($i = 0; $i < $length; $i++) {

        // stinga di caratteri
        $all_chars = range('!', 'þ');

        // indice casuale con range numero di caratteri nella stringa
        $rand_char_index = rand(0, count($all_chars) - 1);

        // carattere randomico della stringa chars nella posizione dell'indice casuale
        $rand_char = $all_chars[$rand_char_index];

        // aggiungo alla passoword i caratteri
        $generated_password .= $rand_char;
        // stampo password
    }
    ;
    return $generated_password;

}