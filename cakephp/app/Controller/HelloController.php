<?php


   class HelloController extends AppController
   {
   	  public $uses = 'Cake';
       public function index()
        {

           $this->autoRender = false;
        	 
        	//$sql="select * from cake where id=1";
            $result=$this->Cake->find('first',array('conditions'=>array(
                  'id'=>1,
                   'title'=>'title1'

            	)));
        	//$this->Cake->query($sql);
        	var_dump($result);
        	 

        }
        	


        

   } 