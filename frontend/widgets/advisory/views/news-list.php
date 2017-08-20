<?php
use yii\bootstrap\Html;
?>

<?php foreach ($list as $key => $val):?>

    <div class="row media-news border-bottom">

        <div class="col-sm-3">
            <?= Html::a(Html::img($val['thumbnail'], ['alt'=>$val['title']]), ['news/page', 'id'=>$val['id']], ['class'=>'thumbnail', 'target'=>'_blank'])?>
        </div>
        <div class="col-sm-9 media-news-body">
            <h4 class="media-heading">
                <?= Html::a($val['title'], ['news/page', 'id'=>$val['id']], ['target'=>'_blank'])?>
            </h4>
            <p class="desc"><?= $val['desc']?></p>
            <p class="bottom">
                <i class="label label-success">作者：<?= $val['auth']?></i>
                <i  class="label label-warning">发布日期：<?= date('Y-m-d', $val['publish_at'])?></i>
            </p>
        </div>
    </div>

<?php endforeach;?>

<?= \yii\widgets\LinkPager::widget([
    'firstPageLabel' => true,
    'lastPageLabel' => true,
    'maxButtonCount' => 10,
    'pagination' => $pages,
    'options' => ['class'=>'pagination pull-right', 'id'=>'head-pagination']
]); ?>

