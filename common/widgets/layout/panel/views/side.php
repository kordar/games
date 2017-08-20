<?php
use yii\bootstrap\Html;
?>

<div class="panel panel-default layout">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?= Html::tag('span', '', ['class'=>$icon]);?> <?= $title?>
        </h3>
    </div>
    <div class="panel-body layout-side">

        <div class="col-sm-3 big-img">

            <img src="<?= SAE_SPORTS_STORAGE?>side-big-default.jpg" alt="">

        </div>

        <div class="col-sm-9 small-img">

            <div class="col-sm-6">
                <div class="col-sm-5">
                    <img src="<?= SAE_SPORTS_STORAGE?>side-small-default.jpg" class="img-rounded">
                </div>
                <div class="col-sm-7"></div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-5">
                    <img src="<?= SAE_SPORTS_STORAGE?>side-small-default.jpg" class="img-rounded">
                </div>
                <div class="col-sm-7"></div>
            </div>

            <div class="space-img"></div>

            <div class="col-sm-6">
                <div class="col-sm-5">
                    <img src="<?= SAE_SPORTS_STORAGE?>side-small-default.jpg" class="img-rounded">
                </div>
                <div class="col-sm-7"></div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-5">
                    <img src="<?= SAE_SPORTS_STORAGE?>side-small-default.jpg" class="img-rounded">
                </div>
                <div class="col-sm-7"></div>
            </div>

            <div class="space-img"></div>

            <div class="col-sm-6">
                <div class="col-sm-5">
                    <img src="<?= SAE_SPORTS_STORAGE?>side-small-default.jpg" class="img-rounded">
                </div>
                <div class="col-sm-7"></div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-5">
                    <img src="<?= SAE_SPORTS_STORAGE?>side-small-default.jpg" class="img-rounded">
                </div>
                <div class="col-sm-7"></div>
            </div>

            <div class="space-img"></div>

            <div class="col-sm-6">
                <div class="col-sm-5">
                    <img src="<?= SAE_SPORTS_STORAGE?>side-small-default.jpg" class="img-rounded">
                </div>
                <div class="col-sm-7"></div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-5">
                    <img src="<?= SAE_SPORTS_STORAGE?>side-small-default.jpg" class="img-rounded">
                </div>
                <div class="col-sm-7"></div>
            </div>

        </div>

    </div>
</div>

<?php

//$js = <<<JS
//
//    var autoImgHeight = function(){
//        var spaceImgHeight = ($('.layout .layout-side .big-img').height() - $('.layout .layout-side .small-img').find('img').height() * 4) / 3;
//        $('.layout .layout-side .small-img .space-img').height(spaceImgHeight + 'px');
//    };
//
//    $(window).resize(function() {
//       autoImgHeight();
//    });
//
//    autoImgHeight();
//
//JS;
//
//$this->registerJS($js);

?>