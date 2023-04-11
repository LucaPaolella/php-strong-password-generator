<?php
function generaPassword($lunghezza)
{
    //caratteri possibili per la password
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';

    // genera la password casuale
    $password = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }

    return $password;
}
