<?php namespace model;

class BaseModel{
    function __construct($fields = []){
        foreach($fields as $k => $v){
            if(property_exists($this, $k))
                $this->{$k} = $v;
        }
    }
}
?>