<?php 

if (!function_exists('doctype')) {
//<!DOCTYPE html>
    function doctype () {
        $ramiro_php = new Rmo\ramiro_php();
        $ramiro_php->setModificador(0);
        $ramiro_php->setElemento();
        echo $ramiro_php->getElemento();
    }
}

if (!function_exists('upper')) {
    function upper($value) {
        return Rmo\Format::upperText($value);
    }
}

if (!function_exists('lower')) {
    function lower($value) {
        return Rmo\Format::lowerText($value);
    }
}