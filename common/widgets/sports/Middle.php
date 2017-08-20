<?php
namespace common\widgets\sports;

class Middle extends \yii\bootstrap\Widget
{
    public $list = [];
    public function run()
    {
        return $this->render('middle', ['list' => $this->list]);
    }
}