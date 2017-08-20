<?php
namespace common\widgets\rank;

use yii\bootstrap\Widget;

class TableRank extends Widget
{
    public $rankList;

    public function run()
    {
        return $this->render('table-rank', ['list'=>$this->rankList]);
    }

}