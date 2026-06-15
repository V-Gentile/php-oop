<?php

class Car {
    private $num_telaio;

    public function __construct($num_telaio) {
        $this->num_telaio = $num_telaio;
    }

    protected function getNumTelaio() {
        return $this->num_telaio;
    }
}

class Fiat extends Car {
    protected $license;
    protected $name;

    public function __construct($num_telaio, $name, $license) {
        parent::__construct($num_telaio);
        $this->name = $name;
        $this->license = $license;
    }

    public function printInfo() {
        $telaio = $this->getNumTelaio();
        echo "La mia macchina e' $this->name, con targa $this->license e numero di Telaio $telaio\n";
    }
}

$myCar = new Fiat("1234", "Opel", "ND 123 OJ");

$myCar->printInfo();
