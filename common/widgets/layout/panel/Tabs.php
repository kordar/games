<?php
namespace common\widgets\layout\panel;

class Tabs extends \yii\bootstrap\Widget
{
    public $areaId = 'tabs-default';
    public $icon = 'glyphicon glyphicon-send';
    public $title = '';
    public $head = [];
    public $body = [];

    public function run()
    {
        return $this->render('tabs',[
            'areaId' => $this->areaId,
            'icon' => $this->icon,
            'title' => $this->title,
            'tabsHead' => $this->head,
            'tabsBody' => $this->body,
        ]);
    }
}