<?php

class livro{
    private  $titulo;
    private $ano;
    private $autor;


    #constutores
    public function __construct($titulo, $ano, $autor){
        $this->titulo = $titulo;
        $this->ano = $ano;  
        $this->ano = $ano;
}

    #get e sete

    public function gettitulo(){
        return $this->titulo;

    }

    public function getano(){
        return $this->ano;
       
    }
    public function getautor(){
        return $this->autor;
   }
   


}

?>
