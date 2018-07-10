<?php
    
  public class Estacionamento {

    
   //listando os veículos
   private  veiculos;
    
   public function Estacionamento() {
    veiculos = new Array();
   }
   
   //adicionando veículo
   public function adicionar($o) {
    veiculos.add($o);
    echo("Adicionando veículo = " + $o+ "\n");
   }
   
  }