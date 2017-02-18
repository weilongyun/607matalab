<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
	<title>平均时间</title>
</head>
<body>
	<h1>请输入小孩的成绩，用空格隔开！</h1>

	<form action="array1.php" method="post">
		<input type="text" name="grade"/>
		<input type="submit" value="开始统计"/>
	</form>

	<?php
	//接收用户提交的学生的成绩!
	$grades1=$_REQUEST['grade'];
	       //echo 'grade='.$grades;
	       //拆分，对成绩进行分割
	       $grades=explode(" ",$grades1);
	       $allGrades=0;
	       //遍历
	       foreach($grades as $k=>$v){
	              
	              $allGrades+=$v; //隐藏转换 string->float
	       }
	       echo "<br/>"."总的时间是=".$allGrades;
	       echo "<br/>";
	       echo "<br/>"."平均时间是=".$allGrades/count($grades);
	?>
</body>
</html>