<?php

define("ALGO", "aes-256-cbc");
define("LONG_VEC", openssl_cipher_iv_length(ALGO));

function generar_pimienta(){
    $caracteres = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz');
    $pimienta = '';
    $partes_pimienta = array_rand($caracteres,2);
    $pimienta = $caracteres[$partes_pimienta[0]].$caracteres[$partes_pimienta[1]];
    return $pimienta;
}

function verificar_contra_pimienta($contra, $sal, $hash_guardado){
    $caracteres = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz');

    for($i=0; $i<count($caracteres);$i++){
        for($j = 0; $j < count($caracteres); $j++){
            $pimienta = $caracteres[$j].$caracteres[$i];
            if(hash("sha256", $contra . $pimienta . $sal) === $hash_guardado){
                return true;
            }
        }
    }
    return false;
}

function generar_sal(){
    $sal = uniqid();
    return $sal;
}