<?php

function listeJourLabel(){
    return array(
        'Lundi' => 'Lundi',
        'Mardi' => 'Mardi',
        'Mercredi' => 'Mercredi',
        'Jeudi' => 'Jeudi',
        'vendredi' => 'Vendredi',
        'Samedi' => 'Samedi',
        'Dimanche' => 'Dimanche'
    );
}

function listeJourIndice(){
    $payload = array();
    for($i = 1; $i <=31; $i++){
        $payload["$i"] = $i;
    }
    return $payload;
}

function listeMois(){
    return array(
        'Janvier' => 'Janvier',
        'Février' => 'Février',
        'Mars' => 'Mars',
        'Avril' => 'Avril',
        'Juin' => 'Juin',
        'Juillet' => 'Juillet',
        'Août' => 'Août',
        'Septembre' => 'Septembre',
        'Octobre' => 'Octobre',
        'Novembre' => 'Novembre',
        'Décembre' => 'Décembre'
    );
}

function listeSeance(){
    $payload = array();
    for($i = 8; $i <= 17; $i++){
        for($j = 0; $j <= 2; $j++){
            $mins = $j * 20;
            $string = $i . 'h' . $mins;
            $payload["$string"] = $string;
        }
    }
    return $payload;
}