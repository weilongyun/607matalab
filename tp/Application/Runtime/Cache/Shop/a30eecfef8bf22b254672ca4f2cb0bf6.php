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
            <a class="navbar-brand" href="<?php echo U('Admin/lists');?>">
                <<商品列表
            </a>
        </div>
    </div>
</nav>

<form action="<?php echo U('addgoods');?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">商品名字</label>
        <input type="text" name="name" class="form-control"  >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">商品价格</label>
        <input type="text" name="price" class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputFile">商品规格</label>
        <select class="form-control" name="guige">
            <option>A类商品</option>
            <option>B类商品</option>
            <option>C类商品</option>
            <option>D类商品</option>
            <option>E类商品</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">商品图片</label>
        <input type="file" name="img" id="exampleInputFile">
    </div>
    <button type="submit" class="btn btn-default">添加商品</button>
</form>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/tp/Public/js/bootstrap.min.js"></script>
</body>
</html>