# ramiro-php

<p>
ramiro_php es una clase que te permite <br>
crear etiquetas html utilizando cadenas <br>
de caracteres.
</p>

<h2>Las herramientas que esta clase nos proporciona son las siguientes</h2>

<p>
Supongamos que estamos en un archivo index.php <br>
La forma de testear la clase ramiro_php por default<br>
es la siguiente:
</p>

<pre>
#//Test 01 Crear el Doctype
    //file
    require_once './ramiro_php/ramiro_php.php';
    /*
        instancia/objeto//por default el constructor 
        toma los valores necesarios para crear el doctype
    */
    $ramiro_php = new ramiro_php();
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
    $ramiro_php->setModificador(0);
    $ramiro_php->setElemento();
    echo $ramiro_php->getElemento();
#
</pre>

<p>
Los metodos son muy descriptivos por lo tanto no te sera 
dificil comprender su funccionamiento
</p>

<h2>Modificadores</h2>

<p>del -1 al 4</p>

<p>Estos modificadores indican que situacion queremos generar</p>

<h2>Posibles situaciones</h2>

<ul>
    <li>-1 .- close tag</li>
    <li>0 .- self - closing</li>
    <li>1 .- empty open & close , sin atributos</li>
    <li>2 .- empty open & close , con atributos</li>
    <li>3 .- open & close , sin atributos</li>
    <li>4 .- open & close , con atributos</li>
</ul>