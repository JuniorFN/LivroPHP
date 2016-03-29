<?php
    include_once 'Classes/Pessoa.class.php';
    include_once 'Classes/Conta.class.php';
    
    //CRIAÇÃO DOS OBJETOS
    $carlos = new Pessoa(10,"Carlos da Silva",1.85,25,"10/04/1976","Ensino Medio",650.00);
  
    
    echo "Manipulando o objeto {$carlos->Nome} : <br>";
    
    echo "{$carlos->Nome} é formado em : {$carlos->Escolaridade} <br>";
    $carlos->Formar('Técnco em Eletricidade');
    echo "{$carlos->Nome} é formado em : {$carlos->Escolaridade} <br>";
    
    echo "{$carlos->Nome} possui {$carlos->Idade} anos <br>";
    $carlos->Envelhecer(1);
    echo "{$carlos->Nome} possui {$carlos->Idade} anos <br>";
    
    //CRIACAO DO OBJETO
    $conta_carlos = new Conta(6677, "CC.1234,56","10/07/02", $carlos ,9876, 567.89);
    echo "Manipulando a conta de : {$conta_carlos->Titular->Nome} : </br>";
    
    echo "Saldo atual {$conta_carlos->ObterSaldo()} <br>";
    $conta_carlos->Depositar(20);
    echo "O saldo atual é R\$ : {$conta_carlos->ObterSaldo()}<br>";
    $conta_carlos->Retirar(10);
    echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()}";
?>

