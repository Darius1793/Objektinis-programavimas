<?php

class trysxklase {

    private $x;

    public function __construct($pradinisSkaicius) {
        $this->x = $pradinisSkaicius;
    }
    public function vykdyti() {
        while ($this->x != 1) {
            echo $this->x . "<br>";
            if ($this->x % 2 == 0) {
                $this->x = $this->x / 2;
            } else {
                $this->x = 3 * $this->x + 1;
            }
        }
        echo $this->x;
    }
}
?>