<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>商城后台</title>

    <!-- Bootstrap -->
    <link href="/tp/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/tp/Public/bootstrap/js/html5shiv.min.js"></script>
    <script src="/tp/Public/bootstrap/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo U('Admin/add');?>">
                <<添加商品
            </a>
        </div>
    </div>
</nav>

<!--商品列表呈现出来就应该用表单来实现------------------>
<table class="table table-striped">

        <tr>
        <th>商品序号</th>
        <th>商品名字</th>
        <th>商品价格</th>
        <th>商品规格</th>
        <th>操作</th>
        </tr>
    <input type="hidden" value="<?php echo ($i=0); ?>"/>
    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>

        <td><?php echo ($i); ?></td>
        <td><?php echo ($vo["name"]); ?></td>
        <td><?php echo ($vo["price"]); ?></td>
        <td><?php echo ($vo["guige"]); ?></td>
        <td><a href="<?php echo U('Admin/del',array('id'=>$vo['id']));?>">删除</a></td>

    </tr>
    <input type="hidden" value="<?php echo ($i++); ?>"/><?php endforeach; endif; ?>
</table>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/tp/Public/js/bootstrap.min.js"></script>
</body>
</html>