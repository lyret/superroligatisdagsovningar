<?php
    abstract class Animal{

        abstract protected function whatsMyName($name);

    }

    class bear extends Animal{

        public function whatsMyName($name, $separator = ". "){
            if ($name == "Nalle Puh") {
                $prefix = "Snälla - ";
            } elseif ($name == "Bamse") {
                $prefix = "Världens starkaste björn - ";
            } elseif ($name == "Björne"){
                $prefix = "Björnens magasin - ";
            };
            return "{$prefix}{$name}{$separator}";
        }

        private $bearSound = '';
 
        private function setTo($bearSound)
        {
            $this->to = $bearSound;
        }
    
        public function sayIt()
        {
            return 'Alla björnar älskar: ' . $this->to;
        }

           
    }
    
    $Nalle = new bear;
    echo $Nalle->whatsMyName("Nalle Puh"), "\n";

    $Bamse = new bear;
    echo $Bamse->whatsMyName("Bamse"), "\n";

    $Björne = new bear;
    echo $Björne->whatsMyName("Björne"), "\n";


    $bears  = new \ReflectionClass($Nalle);

    $method = $bears->getMethod('setTo');
    $method->setAccessible(true);

    $method->invoke($Nalle, 'Bärrss');
    echo $Nalle->sayIt(), "\n";

?>