<?php
use yii\bootstrap\Html;
?>

<div class="panel panel-default layout">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="glyphicon glyphicon-send"></span> 竞技专区
        </h3>
    </div>
    <div class="panel-body sports-hots">

        <?php foreach ($hotsList as $key => $val):?>

            <div class="col-sm-3">
                <?= Html::a(Html::img(SAE_SPORTS_STORAGE . 'images/' . $val['thumbnail'], ['alt'=>$val['title']]), ['news/page', 'id'=>$val['id']], ['class'=>'thumbnail', 'target'=>'_blank'])?>

            </div>
        <?php endforeach;?>

    </div>
</div>
