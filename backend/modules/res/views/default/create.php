<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\res\models\ResourcesMain */

$this->title = 'Create Resources Main';
$this->params['breadcrumbs'][] = ['label' => 'Resources Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resources-main-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
