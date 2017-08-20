<?php
namespace frontend\widgets\panel;

class Tabs extends \yii\bootstrap\Widget
{
    public $icon = 'glyphicon glyphicon-send';
    public $title = '';
    public $navTabs = [];
    public $tabContent = [];

    public function run()
    {
        return $this->render('tabs',[
            'icon' => $this->icon,
            'title' => $this->title,
            'navTabs' => $this->navTabs,
            'tabContent' => $this->tabContent,
        ]);
    }
}