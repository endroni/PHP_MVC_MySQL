<?php

class X{
    private function teste($ordem){
        echo "Executando a ordem $ordem!";
    }
}
     
class Y extends X{
    public function __construct($x){
    X::teste($x+$x);
    }
}
    
new Y(1);