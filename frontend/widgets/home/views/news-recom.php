<?php
use yii\bootstrap\Html;

?>

<h2 style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
    <?= Html::a($list['new1']['title'], ['news/page', 'id'=>$list['new1']['id']], ['class'=>'text-danger', 'target'=>'_blank'])?>
</h2>

<p class="news-header-p" style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?= $list['new1']['desc'];?></p>

<hr style="border-bottom: 2px solid #e67e22; margin-bottom: 10px">

<ul class="news-header-ul">
    <?php foreach ($list['new2'] as $res):?>
        <li><?= html::a($res['title'], ['news/page', 'id'=>$res['id']])?><span class="pull-right"><?= $res['publishDate']?></span></li>
    <?php endforeach;?>
</ul>
