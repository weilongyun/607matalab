 
<?php
 // $arr=array(1,2,3,4,5,6);
 //$arr=array(a,1,4,2,c,3);
 $arr=array(a,b,c,2,f,3); 
 //把数字都翻转
 //此时要创建一个临时的变量
 $left=0;
 $right=count($arr)-1;
 
 while($left<$right)
 {
     
     if($arr[$left]>0 && $arr[$left]<9)
     {
			//说明是数字
     	 $left++;
     }
      if($arr[$right]>0 && $arr[$right]<9)
     {
           //说明是数字

          $right--;

     } 
      
		 
		 

				$temp=$arr[$right];
				$arr[$right]=$arr[$left];
				$arr[$left]=$temp;
				$left++;
				$right--;

	

 } 
 foreach($arr as $key=>$value)
 {
      echo   $arr[$key];

 }

 ?>