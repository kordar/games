<?php
use yii\bootstrap\Html;
?>
<div class="col-sm-12 timeline">
    <ul>
        <?php foreach($news as $key => $val):?>
            <?php if(empty($val['date'])):?>
                <li><span class="glyphicon glyphicon-stop"></span> <?= Html::a($val['label'], ['news/page', 'id'=>$val['id']])?></li>
            <?php else:?>
                <li class="title"><span><?= $val['date']?></span> <?= Html::a($val['label'], ['news/page', 'id'=>$val['id']])?></li>
            <?php endif; ?>
        <?php endforeach;?>
    </ul>
</div>
