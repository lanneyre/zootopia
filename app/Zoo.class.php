<?php
abstract class Zoo 
{
    public function __get($name)
    {
        if(isset($this->$name))
            return $this->$name;
        else 
            return null;
    } 

    public function __set($name, $value)
    {
        if(isset($this->$name))
            $this->$name = $value;
    }
}
