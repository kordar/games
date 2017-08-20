<?php
namespace common\widgets\layout\panel;

class Normal extends \yii\bootstrap\Widget
{
    public $icon = 'glyphicon glyphicon-send';
    public $title = '';
    public $list = [];

    public function run()
    {
        return $this->render('normal',[
            'icon' => $this->icon,
            'title' => $this->title,
            'list' => $this->list
        ]);
    }
}