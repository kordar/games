<?php
namespace frontend\widgets\panel;

class Scroll extends \yii\bootstrap\Widget
{
    public $list = [];

    public function run()
    {
        return $this->render('scroll',[
            'list' => $this->list
        ]);
    }
}