<?php
class FormController extends CController{

    public $layout = "template";
    //возвращает массив с user_ID из выбранных EDU ,Town
public function GetParentUsersID($TableName, $modelName){
    if(Yii::app()->request->getPost($TableName)!==NUll){
        foreach(Yii::app()->request->getPost($TableName) as $value){
            $a = $modelName::model()->findAllByAttributes(array("title" =>$value));
                for($i = 0; $i<= count($a)-1;$i++){
                    $users[] = $a[$i]->user_id;
                }

        }
        return $users;
        }
}
//возвращает массив по имени пользователя
public function GetUserId($name){
    if(!empty($name)){
        $crit = new CDbCriteria();
        $crit->addSearchCondition("name",$name,true,"Like");
        $find = User::model()->findAll($crit);
       // var_dump($find);
        if(empty($find)) return array();
        foreach($find as $value){
            $users[] = $value->id;
        }
        //var_dump($users);echo "dfgfksdjakf";
       // if(empty($users))$users = Null;

        return $users;
    }else Null;

}
    //алгоритм поиска среди введеных массивов
    public function Search($name,$town,$education){
       if(is_array($name) and empty($name)) return array();//"Ничего не найдено";

        $namelog = is_array($name);
        $townlog = is_array($town);
        $educationlog = is_array($education);
        if($namelog and $townlog and $educationlog){

            return array_intersect($name,$town,$education);

        }
        if($namelog and $townlog ){
            return array_intersect($name,$town);

        }
        if($namelog and $educationlog ){

            return array_intersect($name,$education);

        }
        if($townlog and $educationlog ){

            return array_intersect($town,$education);
        }
        if($townlog){
            return $town;
        }
        if($namelog){
            return $name;
        }
        if($educationlog){

            return $education;
        }
        return array() ;


    }

    public function actionIndex(){
       // $posts=Post::model()->with('author')->findAll();
        $criteria = new CDbCriteria;
        $criteria->distinct = TRUE;
        $criteria->select="title";
        $edu=new CDbCriteria;
        $edu ->distinct =TRUE;
        $edu ->select = 'title';
        $model = User::model()->with('town','educ')->findAll();
        $town = Town::model()->findAll($criteria);
        $education = Education::model()->findAll($edu);
        $error = "";
        foreach($town as $city){
            $towns[$city->title] = $city->title;
        }
        foreach($education as $prof){
            $educ[$prof->title] = $prof->title;
        }
            if(Yii::app()->request->isAjaxRequest){

                $name =Yii::app()->request->getPost("User")["name"];
                $user_name = $this->GetUserId($name);
                $user_education = $this->GetParentUsersID("Education","Education");
                $user_towns = $this->GetParentUsersID("Town","Town");

                $intersect = $this->Search($user_name,$user_towns,$user_education);

               if(is_string($intersect) or empty($intersect)){
                   $error ="Ничего не найденно";// $intersect;
               }
                //var_dump(User::model()->with('town','educ')->findAllByPk($intersect));
                $this->layout = false;
                $this->render("table",array(
                    "data" =>User::model()->with('town','educ')->findAllByPk($intersect),
                    "error" =>$error,
                ));
                Yii::app()->end();
            }
        $this->render("index", array(
           "model" =>$model,
           "model2" =>new User,
            "towns" =>$towns,
            "edu" => $educ,



        ));
    }
}
