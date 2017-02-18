<?php 
   namespace app\controllers;
   use yii\web\Controller;
   use app\models\test1;


   class HelloController extends Controller
   {

        public function actionIndex()
        {
            $this->layout="common";
           /* $request=\Yii::$app->request;
            echo $request->get('id',20);*/
        	//echo "hello world";
     //return $this->renderPartial('index')执行被分为三步
            $hello="hello world<script>alert(3);</script>";
            //第一步 创建一个数组
            $data=array();
            //第二步 把数据放到数组中
            $data['hel']=$hello;
            //传给视图



            //把数组送给视图
           // $shus=array(1,2);
            //$data['arr']=$shus;

        	//return $this->renderPartial('index',$data);

            return $this->render('index');//首先会把index内容放到content中
        }
       public function actionTest()
       {
           $this->layout="common";
         // return $this->render('test');//首先会把index内容放到content中
            return $this->render('about');
       }



       public function actionShujuku()
       {

            //这个函数用来操作数据库 curd
           //必须要知道操作的表在哪个命名空间中
           //防止sql注入 $id='1 or 1=1'这种情况下会造成sq注入 会查到表中所有数据 很危险
           //$id='1 or 1=1';
          // $sql="select * from test1 where id=".$id;
           //$sql='select * from test1 where id=1';
           //要改成这样
          /* $sql="select * from test1 where id=:id";
           //:id为占位符 这种琴况会把':id'=>1看成整体 即使是:id'=>'1 or 1=1'
           $result=test1::findBySql($sql,array(':id'=>1))->all();*/

          // select * from test1 where id=1 等价于test1::find()->where(['id'=>1])->all();
           //test1::find()会返回一个对象 然后id=1 all代表把结果返回
          /* $result=test1::find()->where(['id'=>2])->all();
           print_r($result);
           */
           //现在想查询id>0的结果
          /* $result=test1::find()->where(['>','id',0])->all();
           print_r($result);*/


           //现在想查询id>=1并且id<=2的结果
         /*  $result=test1::find()->where(['between','id',1,2])->all();*/


           //现在想模糊查询 like ti
         $result=test1::find()->where(['like','title','ti'])->all();


           //从数据库查询出来的结果(返回的是对象)会到内存中 耗费资源 查询的结果要变为数组 这样消耗的内存远远低于对象
         /*  $result=test1::find()->where(['between','id',1,2])->asArray()->all();
           print_r($result);*/


           //批量查询 要用到循环
           //每次在数据库中拿二条数据 因为数据库现在一共就有二条数据 所以只循环一次就可以了
           //batch代表一次拿二条数据
          /* foreach(test1::find()->batch(2) as $tem)
           {

                print_r(count($tem));
           }*/


           //------------删除数据------------------------------------//
           //删除数据的第一种方式
           /*$result=test1::find()->where(['id'=>2])->all();
           $result[0]->delete();*/

           //删除数据的第二种方式:id代表占位符 防止sql注入

          /* test1::deleteAll('id>:id',array(':id'=>0));*/


           //-------------添加数据---------------------//

           //插入数据前需要实例化对象
         /*  $test1=new test1;
           $test1->id=2;
           $test1->title='title2';
           //启用验证器 启用rules
           $test1->validate();
           if($test1->hasErrors())
           {

               //验证有错误 就不保存到数据库
               echo 'data is error';
               die;
           }
           $test1->save();*/


           //------------修改数据----------------------//
           $result=test1::find()->where(['id'=>2])->one();
           //查找到id为4然后进行修改id为4的数据
           $result->title='title22';
            $result->save();

       }

   }






 ?>