<?php
return array(
    "modules"=>array(
        "form",

    ),
    "import" => array(
        "application.components.*"
    ),
    'components'=>array(
        'viewRenderer'=>array(
            'class'=>'application.extensions.Twig.ETwigViewRenderer',
            'fileExtension' => '.html',
            'options' => array(
                'autoescape' => true,
                "cache" => false,
                "debug" => true,
            ),

        ),

        'user'=>array(
            'allowAutoLogin'=>true,
            'loginUrl'=>array('view'),
        ),
        'db'=>array(
        'class'=>'CDbConnection',
        'connectionString'=>'mysql:host=localhost;dbname=peoples',
        'username'=>'root',
        'password'=>'',
        'emulatePrepare'=>true,
    ),
        "urlManager" =>array(
            'urlFormat'=>'path',
            'showScriptName' => false,
            'rules' => array(
                "ajax" =>"form/form/ajax",
                "" =>"form/form/index",

                             ),
                             ),
                        ),

);
