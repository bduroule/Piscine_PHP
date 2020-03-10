<?php
class Jaime extends Lannister{
    public function With($val){
        if (get_parent_class($val) !== 'Lannister')
            return ("Let's do this.");
        if (get_class($val) == 'Cersei')
            return ("With pleasure, but only in a tower in Winterfell, then.");
        return ("Not even if I'm drunk !");
    }
}
?>
