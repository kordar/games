<?php
    use yii\bootstrap\Html;
?>

<div class="panel panel-default layout-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?= Html::tag('span', '', ['class'=>$icon]);?> <?= $title?>
            <small class="pull-right more">更多&gt;&gt;</small>
        </h3>
    </div>
    <div class="panel-body">
        <div class="row"><?= $panelContent?></div>
    </div>
</div>
