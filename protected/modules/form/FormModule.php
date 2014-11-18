<?php
class FormModule extends CWebModule{
    protected function init(){
        $this->import=array(
            "application.modules.form.models.*"
        );
    }
}
/**
 * Created by PhpStorm.
 * User: morder
 * Date: 22.10.14
 * Time: 11:31
 */ 