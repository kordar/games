<?php
namespace common\widgets\sports;

class Games extends \yii\bootstrap\Widget
{
    public $gamesList = [];
    public function run()
    {
        return $this->render('games', ['gamesList' => $this->gamesList]);
    }
}