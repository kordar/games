<?php
use frontend\assets\SportsAsset;

SportsAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'News';
?>
<div class="site-index">

    <?php $this->beginBlock('jumbotron')?>

    <div class="row">
        <div class="col-sm-12">
            <?= \common\widgets\sports\Banner::widget();?>
        </div>
    </div>

    <?php $this->endBlock(); ?>



    <div class="row">

        <div class="col-sm-9">

            <?= \common\widgets\layout\panel\Normal::widget([
                'title' => '热门视频',
                'list' => [
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/default.jpg', 'title' => 'ASDF', 'id' => 12],
                ]
            ]) ?>

            <?= \common\widgets\layout\panel\Scroll::widget([
                'list' => [
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/games-default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/games-default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/games-default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/games-default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/games-default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/games-default.jpg', 'title' => 'ASDF', 'id' => 12],
                    ['thumbnail' => SAE_SPORTS_STORAGE . 'images/games-default.jpg', 'title' => 'ASDF', 'id' => 12],
                ]
            ]) ?>

            <?= \common\widgets\sports\middle::widget()?>

            <?= \common\widgets\layout\panel\Side::widget(['title'=>'网络'])?>


        </div>

        <div class="col-sm-3 no-padding-left">


            <?= \common\widgets\rank\TableRank::widget()?>

            <?= \common\widgets\rank\NumbersRank::widget()?>

            <?= \common\widgets\rank\NormalRank::widget()?>
            
        </div>

    </div>





    <div class="body-content"></div>

</div>