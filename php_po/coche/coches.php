<?php
class coche{
   public $combustible;
   public $deposito;
   public int $velocidad;

   function __construct($combustible, $deposito){
    $this -> combustible = $combustible;
    $this -> deposito = $deposito;

   }

   function get_combustible(){
    
    return $this->combustible;
   }

   function get_deposito(){
    return $this->deposito;
   }
}

   $auto1 = new coche("gasolia", 5);
    //$auto1 ->combustible = 'gasolina';
   // echo "el coche usa " . $auto1->get_combustible();
   
   if ($auto1->combustible == "gasolina") {
    echo "El coche usa " . $auto1->get_combustible();
    }else{
        echo " gasolina erronea ";
    }

?>