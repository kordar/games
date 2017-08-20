<?php
namespace frontend\widgets\panel\well;

use yii\bootstrap\Html;

class PanelWell extends \yii\bootstrap\Widget
{
    public $list = [];

    public function init()
    {
        foreach ($this->list as $val) {
            $img = Html::img($val['src'], ['alt'=>$val['title']]);
            $title = Html::tag('div', '<b class="caption-title">' . $val['title'] . '</b>', ['class'=>'caption text-center']);
            $html = Html::a($img . $title, $val['href'], ['class'=>'thumbnail']);
            echo Html::tag('div', $html, ['class'=>'col-xs-6 col-sm-4 col-md-3 no-padding-left']);
        }
    }


}