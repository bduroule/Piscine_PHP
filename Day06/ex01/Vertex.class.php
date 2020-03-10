<?php
require_once '../ex00/Color.class.php';
class Vertex{
    private $_x;
    private $_y;
    private $_z;
    private $_w = 1.0;
    private $_color;
    static $verbose = FALSE;

    public function    getx()
    {
        return($this->_x);
    }

    public function    gety()
    {
        return($this->_y);
    }

    public function    getz()
    {
        return($this->_z);
    }

    public function    getw()
    {
        return($this->_w);
    }

    public function    getcolor()
    {
        return($this->_color);
    }

    public function    setx($val)
    {
        $this->_x = $val;
    }
    
    public function    sety($val)
    {
        $this->_y = $val;
    }

    public function    setz($val)
    {
        $this->_z = $val;
    }

    public function    setw($val)
    {
        $this->_w = $val;
    }

    public function    setcolor($val)
    {
        $this->_color = $val;
    }

    public function    __construct(array $tab) {
        $this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
        if ($tab['x'] !== NULL && $tab['y'] !== NULL && $tab['z'] !== NULL)
        {
            $this->_x = $tab['x'];
            $this->_y = $tab['y'];
            $this->_z = $tab['z'];
            if (array_key_exists('w', $tab))
                $this->_w = $tab['w'];
            if (array_key_exists('color', $tab))
                $this->_color = $tab['color'];
        }
        $color = $this->_color->__toString();
        if (self::$verbose)
            printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, $color ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
    }
    
    public function    __destruct() {
        $color = $this->_color->__toString();
        if (self::$verbose)
        printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, $color ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
    }
    public function    __toString() {
        if (Self::$verbose)
            $color = ", " . $this->_color->__toString();

        return (vsprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f$color )", array($this->_x, $this->_y, $this->_z, $this->_w)));
    }
    public function doc(){
        return (file_get_contents("./Vertex.doc.txt")."\n");
    }
}

?>