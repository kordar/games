<?php
namespace frontend\widgets\panel\well;

use yii\bootstrap\Html;

class StyleTwo extends \yii\bootstrap\Widget
{
    public $list = [];

    public function init()
    {
        foreach ($this->list as $val) {
            $img = Html::img($val['src'], ['alt'=>$val['title']]);
            $html = Html::a($img, $val['href'], ['class'=>'thumbnail']);
            echo Html::tag('div', $html, ['class'=>'col-xs-12 col-sm-6 col-md-4 no-padding-left']);
        }
    }

}