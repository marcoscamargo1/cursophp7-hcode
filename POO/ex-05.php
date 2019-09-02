<?php

interface Veiculo {
  public function acelerar($velocidade);
  public function frear($velocidade);
  public function trocarMarcha($marcha);
}

class Civic implements Veiculo {

    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até ".$velocidade." km/h <br>";
    }

    public function frear($velocidade)
    {
        echo "O veículo diminui para ".$velocidade." km/h <br>";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a ".$marcha."ª"." marcha <br>";
    }
}
$c1 = new Civic();
$c1->acelerar(100);

$c1->frear(40);

$c1->trocarMarcha(5);

