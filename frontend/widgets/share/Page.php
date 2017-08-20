<?php
namespace frontend\widgets\share;

use yii\bootstrap\Widget;

class Page extends Widget
{
    public $pageInfo;

    public function run()
    {
        return $this->render('page', ['page'=>$this->pageInfo]);
    }

}