<?php
/* @var $this yii\web\View */

$this->title = $pageInfo['title'];
$this->params['breadcrumbs'][] = ['label'=>'游戏咨询', 'url'=>['news/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->beginBlock('carousel')?>

<div class="jumbotron">
    <div class="container">

    </div>
</div>

<?php $this->endBlock();?>



    <div class="col-sm-9 layout-detail no-margin-top">

        <?= \frontend\widgets\share\Page::widget(['pageInfo'=>$pageInfo])?>

        <?php // \common\widgets\ad\NormalBar::widget(['href'=>'#', 'src'=>'ad-top.jpg', 'alt'=>'test'])?>

        <?php // \common\widgets\rostrum\Discuss::widget()?>

    </div>

    <div class="col-sm-3">

        <?php // \common\widgets\ad\NormalBar::widget(['href'=>'#', 'src'=>'ad-sidebar.jpg', 'alt'=>'test'])?>

        <?php // \common\widgets\rank\NumbersRank::widget()?>

        <?php // \common\widgets\ad\NormalBar::widget(['href'=>'#', 'src'=>'ad-sidebar-small.jpg', 'alt'=>'test'])?>

        <?php // \common\widgets\rank\NormalRank::widget()?>

    </div>
