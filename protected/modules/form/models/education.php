<?php
class Education extends CActiveRecord{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return 'education';
    }
}
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 15.11.14
 * Time: 16:07
 */ 