
<?php

  use yii\helpers\Html;
  use yii\helpers\HtmlPurifier;

 ?>

<!--<h1><?/*=Html::encode($hel);*/?></h1>
<h1><?/*=HTMLPurifier::process($hel);*/?></h1>-->
<!--<h1><?/*=$arr[0];*/?></h1>-->

create table if not exists test1(
id int(10) primary key not null auto_increment ,
title varchar(200)
);