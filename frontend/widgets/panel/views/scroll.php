<?php
use yii\bootstrap\Html;
?>

<div class="layout layout-scroll">
    <?php foreach ($list as $key => $val):?>
        <?= Html::a(Html::img($val['thumbnail'], ['alt'=>$val['title'], 'class'=>'img-circle']), ['news/page', 'id'=>$val['id']], ['target'=>'_blank'])?>
    <?php endforeach;?>
</div>