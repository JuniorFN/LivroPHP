<?php
    class Produto{
        var $Codigo;
        var $Descricao;
        var $Preco;
        var $Quantidade;
    
    function ImprimeEtiqueta(){
        print 'Codigo : ' . $this->Codigo . "\n"; 
        print 'Descricao : '. $this->Descricao . "\n";
        print 'Preco : '. $this->Preco . "\n";
        print 'Quantidade : '.$this->Quantidade;
    }
    }
?>
