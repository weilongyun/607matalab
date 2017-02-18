<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="test/html;charset=UTF-8"/>
  <title>各种排序方法</title>
</head>
<body>

<?php


  //................................冒泡排序法........................................
/*function paixue(&$arr){
  //外层循坏次数
  $temp=0;
  for ($i=0; $i < count($arr)-1; $i++) { 
      //内层比较次数
      for ($j=0; $j < count($arr)-1-$i; $j++) { 
        //说明前面的数比后面的数大,交换变量
        if ($arr[$j]>$arr[$j+1]) {
          $temp=$arr[$j];
          $arr[$j]=$arr[$j+1];
          $arr[$j+1]=$temp;
        }
      }
    }
  }
  $myarr=array(0,6,-8,6,1,-23,23.2);
  paixue($myarr);
  echo var_dump($myarr);
  echo "<br/>";
  echo print_r($myarr);*/
  




//...............................韩老师的选择排序法.....................................  
/*function selectSort(&$arr){
      
  $temp=0;
  for($i=0;$i<count($arr)-1;$i++){
         
      //假设 $i就是最小的数
      $minVal=$arr[$i];
      //记录我认为的最小数的下标
      $minIndex=$i;
        for($j=$i+1;$j<count($arr);$j++){
          //说明我们认为的最小值，不是最小
            if($minVal>$arr[$j]){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
              $minVal=$arr[$j];
              $minIndex=$j;
            }
         }
         //最后交换         
  $temp=$arr[$i];
  $arr[$i]=$arr[$minIndex];
  $arr[$minIndex]=$temp;
  }
}
   $myarr=array(0,6,-8,2);
   selectSort($myarr);
   //echo var_dump($myarr);
   echo "<br/>";
   echo print_r($myarr);
*/







//..............................MY选择排序法........................................
   /*function xzpx(&$myarr){
    //外层循坏控制第几个元素进行比较
      for ($i = 0; $i < count($myarr) ; $i++) {
        $temp = o; 
        //假设第$i个数就是最小的数
        $minys=$myarr[$i];
        //记录我认为的最小数的下标
        $minxb = $i;
        //内层for循坏控制比较次数
        for ($j = $i+1; $j < count($myarr) ; $j++) { 
          //把最小的数和最小数的下标挑选出来,“并且用最小数进行下次比较”
          if ($myarr[$j] < $minys) {
            $minys=$myarr[$j];
            $minxb = $j;
          }
        }
        //已经确定了当前的最小值的位置，保存到$p中。
        //如果发现最小值的位置与当前假设的位置$i不同，则位置互换即可。
        if ($minxb != $i) {
          $temp = $myarr[$i];
          $myarr[$i] = $myarr[$minxb];
          //这里不能用$myarr[$j]与$temp交换变量，$j这个下标所指的并不是最小元素的下标，
          //所以就会出现错误。那么这里的变量$minxb就起到了很大的作用
          $myarr[$minxb] = $temp;
        }
      }
   }
   $myarr = array(22.5,6,-8,14,1,-23,0.5,2,22.4,-25);
   xzpx($myarr);
   echo var_dump($myarr);
   echo "<br/>";
   echo print_r($myarr);*/






  //............................百度上的选择排序法....................................
  /*function selectSort(&$arr) {
  //双重循环完成，外层控制轮数，内层控制比较次数
    $len=count($arr);
      for($i=0; $i<$len-1; $i++) {
          //先假设最小的值的位置
          $p = $i;
          
          for($j=$i+1; $j<$len; $j++) {
              //$arr[$p] 是当前已知的最小值
              if($arr[$p] > $arr[$j]) {
              //比较，发现更小的,记录下最小值的位置；并且在下次比较时采用已知的最小值进行比较。
                  $p = $j;
              }
          }
          //已经确定了当前的最小值的位置，保存到$p中。如果发现最小值的位置与当前假设的位置$i不同，则位置互换即可。
          if($p != $i) {
              $tmp = $arr[$p];
              $arr[$p] = $arr[$i];
              $arr[$i] = $tmp;
          }
      }
      //返回最终结果
      //return $arr;
  }
     $myarr=array(22.5,6,-8,14,1,-23,0.5,2,22.4,-25);
     selectSort($myarr);
     //echo var_dump($myarr);
     echo "<br/>";
     echo print_r($myarr);*/








  //..............................韩老师的插入排序法.................................
    /*function insertSort(&$arr){
              
      //先默认下标为0 这个数已经是有序
      //1. 知道思想->看懂代码->写(灵活)
      for($i=1;$i<count($arr);$i++){
         //$insertVal是准备插入的数
         $insertVal=$arr[$i];
         //准备先和$insertIndex比较
         $insertIndex=$i-1;
         
             //如果这个条件满足，说明，我们还没有找到适当的位置
             while($insertIndex>=0&&$insertVal<$arr[$insertIndex]){
                   
                    //同时把数后移
                    $arr[$insertIndex+1]=$arr[$insertIndex];
                    $insertIndex--;               
             }
             //插入(这时就给$insertVal找到适当位置)         
             $arr[$insertIndex+1]=$insertVal;   
        } 
    }
*/



  //.................................快速排序法..........................................
    /*date_default_timezone_set('Asia/Shanghai');

    $arr=array();

    //动态的创建200,000个数据

    for ($i=0; $i < 259999; $i++) { 
      $arr[$i]=rand(-100,100);
    }
    
    function quickSort($left,$right,&$array){
        $l=$left;
        $r=$right;
        $pivot = $array[($left+$right)/2];
        $temp=0;
        
        while($l<$r){
          
          while($array[$l]<$pivot) $l++;
          while($array[$r]>$pivot) $r--;
          
          
          if($l>=$r) break;
          
          $temp=$array[$l];
          $array[$l]=$array[$r];
          $array[$r]=$temp;
          
          if($array[$l]==$pivot) --$r;
          if($array[$r]==$pivot) ++$l;
          
                
        }
        

        if($l==$r){
           
           $l++;
           $r--;
        }
        
        if($left<$r)  quickSort($left,$r,$array);
        if($right>$l) quickSort($l,$right,$array);
              
        }

    $today = date('Y-n-d G:i:s');
    echo '排序前的时间='.$today;
    
    quickSort(0,count($arr)-1,$arr);
    $today = date('Y-n-d G:i:s');
    echo "&nbsp".'排序后的时间='.$today."<br/>";
    
    
    foreach ($arr as $key => $value) {
        echo "&nbsp".$value; 
        if (($key+1)%30==0) {
          echo "<br/>";
        }
    }*/







//.....................................百度上的插入排序法........................................
/*    function insertSort($arr) {
        $len=count($arr); 
        for($i=1, $i<$len; $i++) {
            $tmp = $arr[$i];
            //内层循环控制，比较并插入
            for($j=$i-1;$j>=0;$j--) {
                if($tmp < $arr[$j]) {
                    //发现插入的元素要小，交换位置，将后边的元素与前面的元素互换
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $tmp;
                } else {
                    //如果碰到不需要移动的元素，由于是已经排序好是数组，则前面的就不需要再次比较了。
                    break;
                }
            }
        }
        return $arr;
    }*/







//...............................百度上的快速排序法........................................
/*    function quickSort($arr) {
        //先判断是否需要继续进行
        $length = count($arr);
        if($length <= 1) {
            return $arr;
        }
        //选择第一个元素作为基准
        $base_num = $arr[0];
        //遍历除了标尺外的所有元素，按照大小关系放入两个数组内
        //初始化两个数组
        $left_array = array();  //小于基准的
        $right_array = array();  //大于基准的
        for($i=1; $i<$length; $i++) {
            if($base_num > $arr[$i]) {
                //放入左边数组
                $left_array[] = $arr[$i];
            } else {
                //放入右边
                $right_array[] = $arr[$i];
            }
        }
        //再分别对左边和右边的数组进行相同的排序处理方式递归调用这个函数
        $left_array = quick_sort($left_array);
        $right_array = quick_sort($right_array);
        //合并
        return array_merge($left_array, array($base_num), $right_array);
      }*/






//...............................MY的插入排序法........................................
/*function insertion_sort(&$arr){

  //外层循坏控制第几位数与已拍好的有序数进行比较
    for ($i=1; $i < count($arr); $i++) { 

      //定义交换变量，并将要比较的数赋给$temp，以防后面移动时冲掉了
      $temp=$arr[$i];

        for ($j=$i-1; $j >=0; $j--) { 

            if ($temp<$arr[$j]) {
                $arr[$j+1]=$arr[$j];
                $arr[$j]=$temp;


            }

        }
    }
}
$myarr=array(0,6,-8,6,1,-23,23.2);
  insertion_sort($myarr);
  echo var_dump($myarr);
  echo "<br/>";
  echo print_r($myarr);
*/




//..........................查找......................................

    //$arr=array(12,6,-3,0,5,9);
 /*   function search($arr,$findval){
        $flag=false;
        for ($i=0; $i < count($arr); $i++) { 
            
            if ($findval==$arr[$i]) {

                echo "找到了，下标为=$i"."<br/>";
                $flag=true;
            }
        }
        if (!$flag) {
          
            echo "查无此数";
        }
    }
    search($arr,-3);
*/

//..........................二分查找......................................
    //前提是，数据已经是有序的
    function binary_chop($arr,$target,$left,$right){

        if ($left>$right) {

            echo "找不到该数";
            return;
        }
        $middle=round(($left+$right)/2);
        if ($target<$arr[$middle]) {

            binary_chop($arr,$target,$left,$middle-1);

        } else if($target>$arr[$middle]) {

            binary_chop($arr,$target,$middle+1,$right);
        }else {

            echo "已经找到,下标是:$middle";
        }

    }
    $arr=array(-45,-21,-4,0,12,24,54,76,86);
    binary_chop($arr,24,0,8);









       ?>
</body>
</html>