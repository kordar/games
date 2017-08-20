<?php
namespace frontend\widgets\home;

use common\libs\advisory\Home;

class NewsRecom extends \yii\bootstrap\Widget
{
    public function run()
    {
        return $this->render('news-recom', [
            'list' => Home::oneAndTwo()
        ]);
    }
}