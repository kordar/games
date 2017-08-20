<?php
$this->title = '233Games-首页';
?>

<?php $this->beginBlock('carousel')?>

<div class="jumbotron">
    <div class="container">

    </div>
</div>


<?php $this->endBlock();?>

<div class="row">
    <div class="col-sm-12 col-md-8">

        <div class="layout no-padding">
            <?= \frontend\widgets\share\Carousel::widget()?>
        </div>

        <div class="layout">
            <?= \frontend\widgets\home\NewsRecom::widget()?>
        </div>

        <?= \frontend\widgets\panel\Normal::widget([
            'title' => '热门视频',
            'content' => \frontend\widgets\panel\well\PanelWell::widget(['list'=>[
                ['src' => 'images/media.jpg', 'title' => 'ASDF', 'href' => 12],
                ['src' => 'images/media.jpg', 'title' => 'ASDF', 'href' => 12],
                ['src' => 'images/media.jpg', 'title' => 'ASDF', 'href' => 12],
                ['src' => 'images/media.jpg', 'title' => 'ASDF', 'href' => 12],
                ['src' => 'images/media.jpg', 'title' => 'ASDF', 'href' => 12],
                ['src' => 'images/media.jpg', 'title' => 'ASDF', 'href' => 12],
                ['src' => 'images/media.jpg', 'title' => 'ASDF', 'href' => 12],
            ]])
        ]) ?>


        <?= \frontend\widgets\panel\Tabs::widget([
            'title' => '热门视频',
            'navTabs' => [
                'AAA' => ['label' => 'ATEST', 'active' => 'active'],
                'BBB' => ['label' => 'BTEST', 'active' => ''],
            ],
            'tabContent' => [
                'AAA' => \frontend\widgets\panel\well\StyleTwo::widget(['list'=>[
                    ['src' => 'images/p1.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p2.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p3.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p2.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p2.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p1.jpg', 'title' => 'ASDF', 'href' => 12],
                ]]),
                'BBB' => \frontend\widgets\panel\well\StyleTwo::widget(['list'=>[
                    ['src' => 'images/p1.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p2.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p3.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p2.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p2.jpg', 'title' => 'ASDF', 'href' => 12],
                    ['src' => 'images/p1.jpg', 'title' => 'ASDF', 'href' => 12],
                ]]),
            ]
        ]) ?>

    </div>

    <div class="col-sm-12 col-md-4 layout-side">
        <?= \frontend\widgets\panel\Normal::widget([
            'title' => '热门视频',
            'content' => \frontend\widgets\share\TimeNewsWell::widget()]) ?>
    </div>
</div>



