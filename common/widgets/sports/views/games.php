<?php
use yii\bootstrap\Html;
?>

<div class="bg-element sports-games">
    <?php foreach ($gamesList as $key => $val):?>
        <?= Html::a(Html::img(SAE_SPORTS_STORAGE . 'images/' . $val['thumbnail'], ['alt'=>$val['title'], 'class'=>'img-circle']), ['news/page', 'id'=>$val['id']], ['target'=>'_blank'])?>
    <?php endforeach;?>
</div>
