<?php
abstract class Fighter
{
    abstract function fight($val);
    public $type_s;

    public function __construct($type)
    {
        $this->type_s = $type;
    }
    public function getType()
    {
        return ($this->type_s);
    }
    public function __clone()
    {
    }
}
?>
