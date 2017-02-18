<?php
namespace app\models;
use yii\db\ActiveRecord;
 class test1 extends ActiveRecord{

     //这个时候就可以对test1表进行操控 验证器是用来验证在用户输入数据插入数据库之前要进行验证
     public function rules()
     {
         return [
             //验证id是否为整数
             ['id','integer'],
             //验证title是否为字符串 长度是多少
             ['title','string','length'=>[0,10]]

         ];

     }

 }


