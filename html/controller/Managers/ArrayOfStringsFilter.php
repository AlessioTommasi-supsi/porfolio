<?php


class ArrayOfStringFilter extends Filter
{
    public function __construct($filterParameters)
    {
        parent::__construct($filterParameters); // Chiama il costruttore della classe genitore
    }

    /*
    * @ensures  Controlla se ce un occorrenza di una stringa in un array di stringhe
    * @param $array_object: array of strings
    * @return boolean
    */
    function isPresent($array_object)
    {
        foreach ($array_object as $object) {
            if(parent::isPresent($object)){
                return true;
            }
        }
        return false;
    }

 
}