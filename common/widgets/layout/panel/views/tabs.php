<?php
use yii\bootstrap\Html;
?>

<div class="layout" id="<?= $areaId?>">
    <ul class="nav nav-tabs layout-tabs">
        <li>
            <h3 class="panel-title"><?= Html::tag('span', '', ['class'=>$icon])?> <?= $title?></h3>
        </li>

        <?php foreach($tabsHead as $item => $head):?>
            <?= Html::tag('li', Html::a($head['label'], '#' . $item, ['data-toggle' => "tab"]), ['class'=>'pull-right ' . $head['active']])?>
        <?php endforeach;?>

    </ul>
    <div class="tab-content">
        <?php foreach ($tabsBody as $id => $body):?>
            <div class="row tab-pane fade" id="<?= $id?>">
                <?php foreach ($body as $key => $val):?>
                    <div class="col-sm-3">
                        <a href="#" class="thumbnail">
                            <img src="<?= $val['thumbnail']?>" alt="<?= $val['title']?>">
                            <div class="caption text-center">
                                <b class="caption-title"><?= $val['title']?></b>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endforeach;?>

    </div>
</div>

<?php
$js = <<<JS
    var id = $('#{$areaId}').find('li.pull-right.active').find('a').eq(0).attr('href');
    $(id).addClass('in active');
JS;

$this->registerJs($js);

?>
