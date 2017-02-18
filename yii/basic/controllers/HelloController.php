<?php 
   namespace app\controllers;
   use yii\web\Controller;

   class HelloController extends Controller
   {

        public function actionIndex()
        {

        	//echo "hello world";
        	return $this->renderPartial('index');
        }

   }






 ?>