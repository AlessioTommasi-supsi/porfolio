<?php
class Filter{
    protected $filterParameters = NULL;

    function __construct($filterParameters = NULL)
    {
        $this->filterParameters = $filterParameters;
    }

    function isPresent($string_object){
        if($this->filterParameters == NULL){
            return false;
        }
        foreach ($this->filterParameters as $f) {
            if ($f != NULL) {
                if (strpos($string_object, $f) !== false) {
                    return true;
                }
            } else {
                return false; //bad filterParameter format
            }
        }
        return false;
    }

    function checkExtenction($file){
        if($this->filterParameters == NULL){
            return true;
        }
        foreach ($this->filterParameters as $f) {
            if ($f != NULL) {
                if (substr($file, (strlen($f) * -1)) == $f) {
                    return true;
                }    
            }else{
                return true; //bad filterParameter format, comunque stampo file
            }
        }
        return false;
    }

}