<?php


namespace MonApp;

class BienImmo {

    public function __construct( public int $price){
    
    }

}

class Maison {

    public function __construct( public string $nbPiece){
        
    }
}