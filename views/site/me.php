<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '安装yii很纠结';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       come on! yii安装好麻烦！！！
    </p>
    <p>
        使用github安装yii,实现本地和linux服务器的同时访问。
    </p>
    <p>1.在github上新建项目<br />
    2.在本地下载  <br/>
    3.在linux服务器上下载<br/>
    4.将yii安装到本地<br/>
    5.将yii安装到linux服务器<br/>
    6.注意：不能直接将本地的提交到github,也不能将linux下的提交到github。本地和服务器的必须用原生代码。
    </p>
    <p><a href="/index.php?r=site/learn1">3.8一天的问题，3.9号解决了</a></p>
    <code><?= __FILE__ ?></code>
</div>
