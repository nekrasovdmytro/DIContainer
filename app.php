<?php

include "DIContainer/Container.php";
include "DIContainer/DIContainer.php";
include "Model/User.php";
include "Model/Article.php";

$dIContainer = new DIContainer\DIContainer();

$dIContainer->set('app.user', Model\User::class);
$dIContainer->set('app.article', Model\Article::class);


echo $dIContainer('app.user'), "\n";

echo $dIContainer->get('app.article'), "\n";