<?php   
  public class Carro extends Veiculo {
    public $nome;
    public $marca;
    public $cor;

    public function Carro($nome, $marca, $cor) {
      echo($nome, $marca, $cor);            
    }

    public function listarCarros() {
      return "Nome do carro: ". $nome. "\nMarca: " . $marca ."\n Cor: " .$cor;     
    }
    
 
  }