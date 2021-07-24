<?php

class ramiro_php {

    private string $etiqueta;

    public function setEtiqueta (string $etiqueta) {
        $this->etiqueta = htmlspecialchars($etiqueta);
    }

    public function getEtiqueta () : string {
        return $this->etiqueta;
    }

    private string $atributos;

    public function setAtributos (array $atributos) {
        $attributes = '';

        foreach ($atributos as $key => $value) {

            $key = htmlspecialchars($key);

            $value = htmlspecialchars($value);

            if ($key === '!') {

                $tmpAttrs = explode(' ',$value);

                for($i = 0; $i < count($tmpAttrs); $i++) {

                    $attributes .= ' ' . $tmpAttrs[$i];

                }

            } else {

                $attributes .= ' '.$key.'="'.$value.'"';

            }

        }

        $this->atributos = $attributes;
    }

    public function getAtributos () : string {
        return $this->atributos;
    }

    private int $modificador;

    public function setModificador (int $modificador) {
        $this->modificador = $modificador;
    }

    public function getModificador () : int {
        return $this->modificador;
    }

    private $contenido;

    public function setContenido ($contenido) {

        if(is_array($contenido)) {

            $aux = [];

            for($i = 0; $i < count($contenido); $i++) {

                array_push($aux,(is_array($contenido[$i])) ? implode("",$contenido[$i]) : $contenido[$i]);

            }
    
            $this->contenido = implode("",$aux);

        }else{

            $this->contenido = $contenido;

        }

    }

    public function getContenido () {
        return $this->contenido;
    }

    public function noJs (string $contenido) : string {
        if(strpos($contenido , '<script>') !== false){
            die('Inserta La etiqueta script en el body');
        }else{
            return $contenido;
        }
    }

    private string $elemento;

    public function __construct (string $etqt='doctype', $ctnd = '$', array $atbts=['!'=>'html']) {
        $this->setEtiqueta($etqt);
        $this->setContenido($ctnd);
        $this->setAtributos($atbts);
    }

    public function setElemento () {
        switch($this->getModificador()) {
            case -1:
                //close tag
                $this->elemento = "</{$this->getEtiqueta()}>";
                break;
            case 0: 
                #self - closing
                $this->elemento = ($this->getEtiqueta() === 'doctype') ? 
                '<!'.strtoupper($this->getEtiqueta()).$this->getAtributos().'>' : 
                "<{$this->getEtiqueta()}".$this->getAtributos().">"
                ;
                break;
            case 1: 
                #empty open & close , sin atributos
                $this->elemento = "<{$this->getEtiqueta()}></{$this->getEtiqueta()}>";
                break;
            case 2: 
                #empty open & close , con atributos
                $this->elemento = "<{$this->getEtiqueta()}".$this->getAtributos()."></{$this->getEtiqueta()}>";
                break;
            case 3: 
                #open & close , sin atributos
                $this->elemento = "<{$this->getEtiqueta()}>".$this->getContenido()."</{$this->getEtiqueta()}>";
                break;
            case 4: 
                #open & close , con atributos
                $this->elemento = "<{$this->getEtiqueta()}".$this->getAtributos().">".
                $this->getContenido()."</{$this->getEtiqueta()}>";
                break;
            default: return "Modificador Invalido : ($mdfcdr) >>> [-1, 0, 1]";
        }
    }

    public function getElemento () : string {
        #por default se creara el doctype
        return $this->elemento;
    }

}