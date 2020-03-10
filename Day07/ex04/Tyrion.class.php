<?php
class   Tyrion extends Lannister{
    public function     With($val)
    {
        if (get_parent_class($val) !== 'Lannister')
            return ("Let's do this");
        return ("Not even if I'm drunk !");
    }
}
?>
