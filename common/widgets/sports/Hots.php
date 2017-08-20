<?php
namespace common\widgets\sports;

class Hots extends \yii\bootstrap\Widget
{
    public $hotsList = [];
    public function run()
    {
        return $this->render('hots', ['hotsList' => $this->hotsList]);
    }
}