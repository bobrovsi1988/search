<!DOCTYPE html>
<html>
<head>
<title>TEST</title>
    <meta charset="utf-8">
    <link href="<?php echo Yii::app()->getBaseUrl()?>/css/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="<?php echo Yii::app()->getBaseUrl()?>/css/master.css" type="text/css" rel="stylesheet">
</head>
<body>
<!--HEADER-->
<div class="conteiner row">

        <img class=" col-sm-2" src="../image/alfa.png">
    <div class="col-sm-8 text-center ">
        <h1>ALFA ROMEO CLUB</h1>
    </div>
    <div class = "col-sm-2 text-right">
        <p>Телефон</p>
        <p>Адрес</p>
        <p>email</p>

    </div>

</div>
<!--Content-->

<div class=" container">
    <!-- menu -->
    <div class="col-sm-3">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="<?php echo Yii::app()->getBaseUrl();?>/index.php/catalog">front</a></li>
            <li><a href="<?php echo Yii::app()->getBaseUrl();?>/index.php/admin">Back</a></li>

        </ul>
        <?php// $this->widget('menu');?>


    </div>
    <!--content value-->
    <div class="col-sm-9">
        <?php echo $content;?>
    </div>
</div>

<script src="<?php echo Yii::app()->getBaseUrl()?>/css/bootstrap/js/bootstrap.js" type="text/javascript"></script>

</body>
