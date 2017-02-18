<?php

	class Cake extends AppModel

      {
           public $useTable = 'cake';
           public function aa()
           {

              $result=$this->Cake->find('first',array('conditions'=>array(
                  'id'=>1,
                   'title'=>'title1'

            	)));

           }
             

      } 
       
      
      
        
        
         

      
       
        


	 