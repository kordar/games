<?php
namespace common\widgets\navbar;

class Navbar extends \yii\bootstrap\Widget
{
    public function run()
    {
        return $this->render('navbar');
    }
}