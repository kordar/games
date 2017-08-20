<?php
namespace frontend\widgets\share;

use common\libs\advisory\Home;

class TimeNewsWell extends \yii\bootstrap\Widget
{
    public function run()
    {
        return $this->render('timeline-well', ['news' => Home::three()]);
    }
}