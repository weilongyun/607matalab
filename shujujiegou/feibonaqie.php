<?php

    for($i=0;$i<40;$i++)
    {
        //斐波那契数列    
        echo fib($i)."<br/>";
    }

     function fib($n)
     {
       if($n<2)
       {
          return $n;
       }else
       {
           return fib($n-1)+fib($n-2);

       }

     }



?>