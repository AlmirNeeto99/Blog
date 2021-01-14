<?php

class Breadcrumb extends CWidget

{

    public $links = [];
    public function init()
    {
        $this->renderFile("templates/breadcrumb.php", [
            "links" => $this->links
        ]);
    }

    public function run()
    {
        // this method is called by CController::endWidget()
    }
}
