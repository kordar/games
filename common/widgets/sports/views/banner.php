    <div class="space-12"></div>

    <div class="col-sm-12 no-padding">

        <?php echo \yii\bootstrap\Carousel::widget([
            'items' => [
                // 只有图片的格式
//                    '<img src="images/carousel1.jpg"/>',
//                    '<img src="images/carousel2.jpg"/>',

                // 与上面的效果一致
//                    ['content' => '<img src="http://www.yii-china.com/statics/images/b_1.jpg"/>'],
//
//                    // 包含图片和字幕的格式
                [
                    'content' => '<img src="images/carousel1.jpg"/>',
                    'caption' => '',
                    //'options' => [...],       //配置对应的样式
                ],
                [
                    'content' => '<img src="images/carousel2.jpg"/>',
                    'caption' => '',
                    //'options' => [...],       //配置对应的样式
                ],
            ],
            'options' => ['class'=>'layout carousel slide'],
            'showIndicators' => false,
            'controls' => ['', '']
        ]);
        ?>

    </div>

