<?php 	

    header("Content-type:text/html;charset=utf-8");
    
	class Student{
        //无参数的构造函数
		/*public function __construct()
		{

           echo "Student:无参构造函数";

		}*/
      
		/*public function __construct($i,$j)
		{
           
           echo "有参构造函数";

		}*/
		private function Bk(){
			echo "本科";
		}
		protected function Bk1(){
			echo "本科1";
		}
		public function Yjs(){
			echo "研究生";
		}
		public function aa()
		{

             $this->Bk();

		}	 
	}
	class test extends Student{
      
      /*public function __construct()
		{

           echo "test:无参构造函数";

		}*/

      public function test1(){
			 
			 $this->Bk1();
		}
	}
	//$a=new Student(1,2);
	$a=new test();
	//$a->Bk();
	//$a->Bk();
	$a->aa();
	 
	 
	 


 ?>