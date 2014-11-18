
<h1>Bobrov Sergey Igorevich</h1>
<div class="row">
    <?php

    echo CHtml::form();

    echo CHtml::errorSummary($model,"Ошибки",null,array(
        "class" =>"bg-danger",

    ));
    ?>
<div class="col-lg-3">
    <?php
    echo CHtml::label("Ведите имя", "name",array());
    echo CHtml::activeSearchField($model2,"name", array(
        "id"=>"name",
    ));
    ?>
</div>
<div class="col-lg-3">
    <?php
    echo CHtml::checkBoxList("Town","himy",$towns,array()) . "</br>";
    ?>
</div>
<div class="col-lg-3">
    <?php
    echo CHtml::checkBoxList("Education","himy",$edu,array());
    ?>
</div>
<div class="col-lg-3">
    <?php
        echo CHtml::ajaxSubmitButton('Обработать', '', array(
                'type' => 'POST',
    //    // Результат запроса записываем в элемент, найденный
    //    // по CSS-селектору #output.
                'update' => '#output',
            ),
            array(
    //    // Меняем тип элемента на submit, чтобы у пользователей
    //    // с отключенным JavaScript всё было хорошо.
                'type' => 'submit'
            ));
    ?>
</div>
<?php
    echo CHtml::endForm();
?>
</div>

<div id ="output" class="container row">

</div>