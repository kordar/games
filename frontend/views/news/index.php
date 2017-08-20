<?php

/* @var $this yii\web\View */

$this->title = 'News';
?>

<?php $this->beginBlock('carousel')?>

<div class="jumbotron">
    <div class="container">
        asdfdsaf
    </div>
</div>

<?php $this->endBlock();?>


<div class="row">

    <div class="col-sm-9">
        <div class="row layout-news-list">
            <?= \frontend\widgets\advisory\NewsList::widget(['pages'=>$pages, 'newsList'=>$newsList])?>
        </div>
    </div>

    <div class="col-sm-3 no-padding-left">


        <?php // \common\widgets\ad\NormalBar::widget(['href'=>'#', 'src'=>'ad-sidebar.jpg', 'alt'=>'test'])?>

        <?php // \common\widgets\rank\NumbersRank::widget()?>

        <?php // \common\widgets\rank\NormalRank::widget()?>

    </div>

</div>

<div class="body-content"></div>
