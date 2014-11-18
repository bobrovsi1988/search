<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <meta charset="utf-8">
    <link href="<?php echo Yii::app()->getBaseUrl()?>/css/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="<?php echo Yii::app()->getBaseUrl()?>/css/master.css" type="text/css" rel="stylesheet">
</head>
<body>
<!--HEADER-->
<div class="conteiner row">

   <h1 class="text-center">Welcom too  Site</h1>

</div>
<!--Content-->

<div class=" container">



    <!--content value-->
    <div class="row center-block text-center">
        <?php echo $content;?>
    </div>
</div>

<script src="<?php echo Yii::app()->getBaseUrl()?>/css/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl()?>/css/master.js" type="text/javascript"></script>

</body>