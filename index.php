<?php
#//Test 01 Crear el Doctype Sin Composer
    //file
    #require_once './ramiro_php/ramiro_php.php';
    /*
        instancia/objeto//por default el constructor 
        toma los valores necesarios para crear el doctype
    */
    #$ramiro_php = new ramiro_php();
    //core metodos
    /*
        $ramiro_php->setEtiqueta(); //seteada por el constructor por primera vez
        $ramiro_php->getEtiqueta();
        $ramiro_php->setAtributos(); //seteados por el constructor por primera vez
        $ramiro_php->getAtributos();
        $ramiro_php->setModificador();
        $ramiro_php->getModificador();
        $ramiro_php->setContenido(); //seteado por el constructor por primera vez
        $ramiro_php->getContenido();
        $ramiro_php->noJs();
    */
    #$ramiro_php->setModificador(0);
    #$ramiro_php->setElemento();
    #echo $ramiro_php->getElemento();
#
require_once __DIR__ . '/vendor/autoload.php';
#//Test 01 Crear el Doctype Con Composer
    /*
        $ramiro_php = new Rmo\ramiro_php();
        $ramiro_php->setModificador(0);
        $ramiro_php->setElemento();
        echo $ramiro_php->getElemento();
    */
    doctype();
#

/*Test 01 clase Format
    echo Rmo\Format::upperText('hola');
*/
echo lower(upper('hola'));