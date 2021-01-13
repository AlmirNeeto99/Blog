<?php

class ErrorLog extends CWidget
{
    public $errors;
    public function init()
    {
        $this->renderFile("error_log.php", [
            "errors" => $this->errors
        ]);
    }

    public function run()
    {
        // this method is called by CController::endWidget()
    }
}
