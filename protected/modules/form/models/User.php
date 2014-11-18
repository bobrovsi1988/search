<?php
class User extends CActiveRecord{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return 'user';
    }
    public function relations()
    {
        return array(
            'town'=>array(self::HAS_MANY, 'Town', 'user_id'),
            'educ'=>array(self::HAS_MANY, 'education', 'user_id'),
        );
    }

}
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.09.14
 * Time: 20:55
 */ 