<?php
class NightsWatch implements IFighter
{
    private $tab;

    public function recruit($val)
    {
        if ($val instanceof IFighter)
            $this->tab[] = $val;
    }

    public function fight()
    {
        foreach ($this->tab as $key=>$value)
        {
            $value->fight();
        }
    }
}
?>
