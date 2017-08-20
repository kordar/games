<?php
namespace common\widgets\layout\panel;

class Side extends \yii\bootstrap\Widget
{
    public $icon = 'glyphicon glyphicon-send';
    public $title = '';
    public $bigImages = [];
    public $smallImages = [];

    public function run()
    {
        return $this->render('side',[
            'icon' => $this->icon,
            'title' => $this->title,
            'bigImages' => $this->bigImages,
            'smallImages' => $this->smallImages,
        ]);
    }
}