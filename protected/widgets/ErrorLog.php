<?php

class ErrorLog extends CWidget
{
    public $errors;
    public function init()
    {
        $this->renderFile("templates/error_log.php", [
            "errors" => $this->errors
        ]);
    }

    public function run()
    {
        // this method is called by CController::endWidget()
    }
}
