<?php 

//doctype
function doctype () {
    $ramiro_php = new Rmo\ramiro_php();
    $ramiro_php->setModificador(0);
    $ramiro_php->setElemento();
    echo $ramiro_php->getElemento();
}

function upper($value) {
    return Rmo\Format::upperText($value);
}