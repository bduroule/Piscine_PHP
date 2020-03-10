<?php
class   UnholyFactory
{
    private $array = array();
    private $fabricate = array();
    private $absorb;
    private $type_f;

    public function absorb($type)
    {
        if ($type instanceof Fighter)
        {
            if (in_array($type, $this->array))
                print("(Factory already absorbed a fighter of type ");
            else
            {
                print("(Factory absorbed a fighter of type ");
                $this->array[] = $type;
            }
            print($type->getType().")").PHP_EOL;
        }
        else
            print ("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
    }

    public function change($val)
    {
        if ($val === 'foot soldier')
            return ("Footsoldier");
        if ($val === "archer")
            return ("Archer");
        if ($val === "assassin")
            return ("Assassin");
        if ($val === "llama")
            return ("Llama");
    }

    public function fabricate($val)
    {
        $this->type_f = $this->change($val);
        foreach ($this->array as $key => $value)
        {
            if (get_class($value) === $this->type_f)
            {
                $new = clone $this->array[$key];
                print("(Factory fabricates a fighter of type ".$val.")".PHP_EOL);
                return ($new);
            }
        }
        print("(Factory hasn't absorbed any fighter of type ".$val. ")".PHP_EOL);
    }
}
?>
