<?php

class Divider extends CWidget
{
    public $size = null;
    public $color = "conexa";
    public $centered = false;
    public function init()
    {
        switch ($this->size) {
            case "small":
                $this->size = "w-25";
                break;
            case "large":
                $this->size = "w-100";
                break;
        }
        if ($this->centered) $this->centered = "mx-auto";
        else $this->centered = "";
        echo "<div class='$this->size bg-$this->color my-2 $this->centered' style='height:1px;'></div>";
    }

    public function run()
    {
        // this method is called by CController::endWidget()
    }
}
