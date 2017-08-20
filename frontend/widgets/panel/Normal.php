<?php
namespace frontend\widgets\panel;

class Normal extends \yii\bootstrap\Widget
{
    public $icon = 'glyphicon glyphicon-send';
    public $title = '';
    public $content= [];

    public function run()
    {
        return $this->render('normal',[
            'icon' => $this->icon,
            'title' => $this->title,
            'panelContent' => $this->content,
        ]);
    }
}