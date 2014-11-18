<?php
class UserIdentity extends CUserIdentity
{
    private $_id;
    public function authenticate()
    {

        $record=User::model()->findByAttributes(array('email'=>$this->username));
        if($record===null)
            // Если нету - сохраняем в errorCode ошибку.
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==sha1("123123".$this->password))
            // Проверяем совпадает ли введенный пароль с тем что у нас в базе
            // Если не совпадает - сохраняем в errorCode ошибку.
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            // Если все действий выше успешно пройдены - значит
            // пользователь действительно существует и пароль был
            // указан верно.
            $this->_id=$record->id;
            $this->setState('id', $record->id);
            //$this->setState если понадобиться связать две таблицы
            // В errorCode сохраняем что ошибок нет
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }
}