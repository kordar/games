<?php
    use yii\bootstrap\Html;
?>

<div class="panel panel-default layout">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?= Html::tag('span', '', ['class'=>$icon]);?> <?= $title?>
        </h3>
    </div>
    <div class="panel-body layout-default">

        <?php foreach ($list as $key => $val):?>
            <div class="col-sm-3 normal">
                <?= Html::a(Html::img($val['thumbnail'], ['alt'=>$val['title']]), ['news/page', 'id'=>$val['id']], ['class'=>'thumbnail', 'target'=>'_blank'])?>
            </div>
        <?php endforeach;?>

    </div>
</div>
