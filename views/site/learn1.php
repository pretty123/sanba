<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '再见linux与yii';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
      1.主要原因是linux下github提交问题http://www.xitongzhijia.net/xtjc/20150320/42297.html
    </p>
    <p>
      2.接下来上传：</p>
　　<p>git init</p>
　　<p>git add 。 #如果是。表示上传全部目录下的文件，可以是某个文件</p>
　　<p>git commit -m ‘version 1.0’</p>
　　<p>git remote add origin https://github.com/用户名/test.git</p>
　　<p>git push origin master -f</p>
   <p>很 easy！！！</p>
    <code><?= __FILE__ ?></code>
</div>
