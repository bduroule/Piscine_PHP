<?php
class Color {
    public $red;
    public $green;
    public $blue;
    static $verbose = FALSE;

    public function    __construct(array $color) {
        if (array_key_exists('rgb', $color))
        {
            $this->red = ($color['rgb'] >> 16) & 255;
            $this->green = ($color['rgb'] >> 8) & 255;
            $this->blue = $color['rgb'] & 255;
        }
        else
        {
            $this->red = intval($color['red']);
            $this->green = intval($color['green']);
            $this->blue = intval($color['blue']);
        }
        if (self::$verbose)
            printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
    }
    public function    __destruct() {
        if (self::$verbose)
            printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
    }
    public function    __toString() {
        return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
    }
    public function    add(Color $rhs) {
        return (new Color(array('red' => $this->red + $rhs->red,
        'green'=> $this->green + $rhs->green,
        'blue' => $this->blue + $rhs->blue)));
    }
    public function    sub(Color $rhs){
        return (new Color(array('red' => $this->red - $rhs->red,
        'green'=> $this->green - $rhs->green,
        'blue' => $this->blue - $rhs->blue)));
    }
    public function    mult($n){
        return (new Color(array('red' => $this->red * $n,
        'green'=> $this->green * $n,
        'blue' => $this->blue *$n)));
    }
    public function doc(){
        return (file_get_contents("./color.doc.txt")."\n");
    }
}
?>
