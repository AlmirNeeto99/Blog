<?php

class Divider extends CWidget
{
    public function init()
    {
        echo "<div class='w-100 bg-conexa my-2' style='height:1px;'></div>";
    }

    public function run()
    {
        // this method is called by CController::endWidget()
    }
}
